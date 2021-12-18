<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="assets/css/login.css">
     <title>Login</title>
</head>
<body>
<h2>Dang Nhap</h2>
<p>
  <?php
      if(isset($_SESSION["thongbao"])){
        echo $_SESSION["thongbao"];
        unset($_SESSION['thongbao']);
      }
  ?>
</p>
<form action="logincode.php" method="post">
  <form action="index.php" method="get">
  <div class="container">
    <label for="uname"><b>Ten Dang Nhap</b></label>
    <input type="text" placeholder="Enter Username" name="uname">
    <label for="psw"><b>Mat Khau</b></label>
    <input type="password" placeholder="Enter Password" name="psw">
    <button type="submit" name="dangnhap">Dang Nhap </button>
    <a href="dangky.php"> Dang ky tai khoan </a>
  </div>
</form>
</body>
</html>