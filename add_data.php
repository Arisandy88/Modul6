<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
      table{width: 43%;margin: 25px 0 0 28%;color: #fff;padding: 10px 10px; background-color: rgba(0,0,0,0.75); border-radius: 5px; height: 550px;}
    </style>
    <link rel="stylesheet" href="css/node.css">
    <title></title>
  </head>
  <body>
    <div class="sidebar light-grey bar-block" style="width:20%">
      <h2 class="bar-item teal" style="color:white">Welcome</h2>
      <h3 class="bar-item" style="color:white;font-weight:bold;"></h3>
      <a href="record.php" class="bar-item button">Lihat Data</a>
      <a href="logout.php" class="bar-item button">Log Out</a>
    </div>
    <div style="margin-left:20%">
      <div class="container teal">
        <div class="container">
          <div id="form">
              <table>
                <form class="" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <tr>
                  <td>NIS</td>
                  <td><input type="text" name="nis" class="form-input" required></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td><input type="password" name="password" class="form-input" required></td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td><input type="text" name="nama" class="form-input" required></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td><input type="text" name="alamat" class="form-input" required></td>
                </tr>
                <tr>
                  <td></td>
                  <td><input type="submit" name="btnSimpan"></td>
                </tr>
                <tr>
                  <td></td>
                  <td><?php
                    session_start();
                    if(!(isset($_SESSION['tb_siswa']))){
                    header("location: form-login.php");
                    }
                    require_once "connect.php";
                    if (isset($_POST['nis']) && isset($_POST['nama'])) {
                      $nis  = $_POST['nis'];
                      $nama = $_POST['nama'];
                      $alamat = $_POST['alamat'];
                      $password = $_POST['password'];

                      $query = "INSERT INTO tb_siswa VALUES ('$nis','$nama','$alamat','$password')";
                      $result = mysqli_query($connect, $query);
                      if ($result){
                        echo '<h7>Data Berhasil Ditambahkan</h7>';
                      }
                      else{
                        echo '<h7>Gagal Menambahkan Data</h7>';
                      }
                    }
                  ?></td>
                </tr>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
