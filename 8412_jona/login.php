<?php
session_start();

include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM login WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Successful login - start a session and store user information
            $_SESSION['username'] = $username;
            header("Location: home.php");
            exit();
        } else {
            // Failed login - redirect back to the login page with an error message
            header("Location: login.php?error=invalid_credentials");
            exit();
        }
    } else {
        // Failed login - redirect back to the login page with an error message
        header("Location: login.php?error=invalid_credentials");
        exit();
    }

    $stmt->close();
}

$conn->close();
?>
