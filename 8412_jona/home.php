<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="p-5 bg-info text-white text-center">
  <h2 class="text-center">Selamat datang !!</h2>
  <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
</div>
<br>

<div class="container">
  <div class="row">
    <div class="col-md-3"> <!-- Each card takes 3 columns on medium devices and larger -->
      <div class="card">
        <img src="img/07.jpg" class="card-img-top" alt="Anggota Image">
        <div class="card-body">
          <h4 class="card-title">Data Anggota</h4>
          <p class="card-text">Some example text. Some example text.</p>
          <a href="anggota.php" class="btn btn-success">See Anggota</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <img src="img/pd.jpg" class="card-img-top" alt="Pustaka Image">
        <div class="card-body">
          <h4 class="card-title">Data Pustaka</h4>
          <p class="card-text">Some example text. Some example text.</p>
          <a href="Pustaka.php" class="btn btn-success">See Pustaka</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <img src="img/ll.jpg" class="card-img-top" alt="pinjam Image">
        <div class="card-body">
          <h4 class="card-title">Data Pinjam</h4>
          <p class="card-text">Some example text. Some example text.</p>
          <a href="pinjam.php" class="btn btn-success">See Pinjam</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <img src="img/ad.jpg" class="card-img-top" alt="Denda Image">
        <div class="card-body">
          <h4 class="card-title">Data Denda</h4>
          <p class="card-text">Some example text. Some example text.</p>
          <a href="denda.php" class="btn btn-success">See Denda</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "footer.php"; ?>

</body>
</html>
