<?php
session_start();

include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the username is already taken
    $check_sql = "SELECT * FROM login WHERE username = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("s", $username);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();

    if ($check_result->num_rows > 0) {
        // Username already exists, redirect back to the registration page with an error message
        header("Location: register.php?error=username_exists");
        exit();
    }

    $check_stmt->close();

    // Insert the user's information into the database
    $insert_sql = "INSERT INTO login (username, password) VALUES (?, ?)";
    $insert_stmt = $conn->prepare($insert_sql);
    $insert_stmt->bind_param("ss", $username, $hashed_password);

    if ($insert_stmt->execute()) {
        // Registration successful - start a session and redirect to the home page or perform other actions
        $_SESSION['username'] = $username; // Store the username in the session
        header("Location: index.php");
        exit();
    } else {
        // Redirect back to the registration page with an error message
        header("Location: register.php?error=registration_failed");
        exit();
    }

    $insert_stmt->close();
}

$conn->close();
?>