<?php
  $host = "localhost";
  $db_here = "db_moklet";
  $user = "root";
  $pass = "";
  $connect = mysqli_connect($host, $user, $pass, $db_here);
  if (!$connect) {
    echo "Koneksi ke database gagal : " . mysqli_connect_error();
  }
 ?>
