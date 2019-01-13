<?php
session_start();
if(!(isset($_SESSION['tb_siswa']))){
header("location: form-login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
      a {text-decoration: none;display: inline-block;}
      table{width: 60%;margin: 25px 0 0 28%;color: #fff;padding: 10px 10px; background-color: rgba(0,0,0,0.75); border-radius: 5px; height: auto;}
      .kat {width: 160px;box-sizing: border-box;border: 2px solid #ccc;border-radius: 4px;font-size: 14px;background-color: white;padding: 4.5px 10px 4.5px 10px;-webkit-transition: width 0.4s ease-in-out;transition: width 0.4s ease-in-out;}
      .teal {text-align: center; text-transform: uppercase;}
      .click:hover {background-color: #39ace7}
      .click:active {-moz-transform: scale(0.95); -webkit-transform: scale(0.95); -o-transform: scale(0.95); -ms-transform: scale(0.95); transform: scale(0.95);}
      .click {display: block; border-radius: 1px; padding: 5px 14px; background-color: #adb0b5; float: left; text-align: center;
              margin: 10px 0;text-decoration: none; color: white; font-size: 12px;font-family: sans-serif; width: 130px }
      td {text-align: center;padding: 8px 10px;}
      tr {background-color: rgba(0,0,0,0.75)color: white;}
      th {padding: 8px 10px;background-color: rgba(0,0,0,0.75);color: white; text-align: center; text-transform: uppercase;}
    </style>
    <link rel="stylesheet" href="css/node.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    require_once "connect.php";

    $query = 'SELECT * FROM tb_siswa';
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result)) {
    ?>
    <div class="sidebar light-grey bar-block" style="width:20%">
      <h2 class="bar-item teal" style="color:white">WELCOME</h2>
      <h3 class="bar-item" style="color:white;font-weight:bold;"></h3>
      <a href="add_data.php" class="bar-item button">Tambah Data</a>
      <a href="logout.php" class="bar-item button">Log Out</a>
    </div>

    <div style="margin-left:3%">
      <div class="container teal">
      </div>
        <div id="container">
          <table>
            <tr>
              <td>#</td>
              <td>NIS</td>
              <td>Nama</td>
              <td>Alamat</td>
            </tr>
              <?php
                $i = 1;
                while ($row = mysqli_fetch_row($result)) {
              ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $row[0]; ?></td>
                  <td><?php echo $row[1]; ?></td>
                  <td><?php echo $row[2]; ?></td>
                </tr>
                <?php
                  $i++;
                  }
                ?>
          </table>
        </div>
    </div>
    <?php
    }
    else {
      echo 'Data Tidak Ditemukan';
    }
    mysqli_close($connect);
    ?>

  </body>
</html>
