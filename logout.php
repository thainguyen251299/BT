<?php
     session_start();
     if(isset($_POST['logout_btn'])){
          unset($_SESSION['auth']);
          unset($_SESSION['auth_role']);
          unset($_SESSION['auth_user']);
          $_SESSION['thongbao'] = "Thoat thanh cong";
          header("location:login.php");
     }
?>