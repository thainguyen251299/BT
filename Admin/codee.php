<?php
include('authetication.php');
if(isset($_POST["ptro_duyet"])){
     $id = $_POST['ptro_duyet'];
     $update = "UPDATE motel SET approve = 1 where id = $id";
     $queryy = mysqli_query($con,$update);
     if($queryy){
          $_SESSION['thongbao'] = "Duyệt bài đăng thành công";
          header("location:view_ptro.php");
          exit(0);
     }else{
          $_SESSION['thongbao'] = "Duyệt bài đăng thất bại";
          header("location:view_ptro.php");
          exit(0);
     }
}
?>