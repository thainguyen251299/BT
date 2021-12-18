<?php
session_start();
include('config/dbcon.php');
if(!isset($_SESSION['auth'])){
     $_SESSION['thongbao']="Wecolme ";
     header("location: ../login.php");
     exit(0);
}
else{
     if($_SESSION['auth_role'] != "1"){
          $_SESSION['thongbao']="Chi co admin moi truy cap duoc";
          header("location: ../login.php");
          exit(0);
     }
}
?>