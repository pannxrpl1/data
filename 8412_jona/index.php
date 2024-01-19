<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <style>
        body {
  background-image: url("img/kern.jpg");
}
    </style>
    <title>Login Form</title>
</head>
<body>
    <div class="container" style="margin-top: 50px">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center">Login</h1>

                        <?php
                        // Display login error messages, if any
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == 'invalid_credentials') {
                                echo '<div class="container mt-3"><div class="alert alert-danger" role="alert">Password salah</div></div>';
                            } elseif ($_GET['error'] == 'login_failed') {
                                echo '<div class="alert alert-danger" role="alert">Login failed. Please try again.</div>';
                            }
                        }
                        ?>

                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                            </div>
                            <a href="register.php" class="btn btn-success">Buat akun</a>
                            <button type="submit" class="btn btn-success">Login</button>
                        </form>
                    </div>
                </div>
             </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
