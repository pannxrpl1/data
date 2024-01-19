<?php
include "koneksi.php";
$id = $_GET["id"];
$sql = "DELETE FROM `tb_anggota` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: anggota.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
