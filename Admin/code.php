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
     if(isset($_POST["add_ptro"])){
          $title = $_POST['title'];
          $description = $_POST['description'];
          $price = $_POST['price'];
          $area = $_POST['area'];
          $address = $_POST['address'];
          $utilities = $_POST['utilities'];
          $phone = $_POST['phone'];
          $anh = basename($_FILES["anh"]["name"]);
          $target_dir = "image/";
          $target_file = $target_dir .$anh;
          $user = $_POST['users_id'];
          $category_id = $_POST['category_id'];
          $district_id = $_POST['district_id'];
          move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file);
          $sqls = "insert into motel (title,description,price,area,count_view,address,latlng,images,user_id,category_id,districi_id,utilities,phone,approve) values('$title','$description','$price','$area','','$address','','$target_file','$user','$category_id','$district_id','$utilities','$phone','')";
          $querys = mysqli_query($con,$sqls);
          if($querys){
               $_SESSION['thongbao'] = "Bài đăng cần được duyệt";
               header("location:view_ptro.php");
               exit(0);
          }
          else{
               $_SESSION['thongbao'] = "Thêm bài đăng thất bại";
               header("location:view_ptro.php");
               exit(0);
          }
      }
     if(isset($_POST["ptro_del"])){
          $id = $_POST['ptro_del'];
          $sql = "DELETE FROM motel where id = $id";
          $query = mysqli_query($con,$sql);
          if($query){
               $_SESSION['thongbao'] = "Xóa bài đăng thành công";
               header("location:view_ptro.php");
               exit(0);
          }else{
               $_SESSION['thongbao'] = "Xóa bài đăng thất bại";
               header("location:view_ptro.php");
               exit(0);
          }
     }
     if(isset($_POST["update_ptro"])){
          $id = $_POST['user_id'];
          $title = $_POST['Title'];
          $description = $_POST['Description'];
          $price = $_POST['Price'];
          $area = $_POST['Area'];
          $address = $_POST['Address'];
          $utilities = $_POST['Utilities'];
          $phone = $_POST['Phone'];
          $anh = basename($_FILES["anh"]["name"]);
          $target_dir = "image/";
          $target_file = $target_dir .$anh;
          move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file);
          $sua = "UPDATE motel SET title = '$title', description = '$description', price ='$price',area = '$area', address='$address', images='$target_file', utilities ='$utilities',phone = '$phone' where id = $id";
          $query = mysqli_query($con,$sua);
          if($query){
               $_SESSION['thongbao'] = "Cập nhật thành công";
               header("location:view_ptro.php");
               exit(0);
          }  
          
      }
     if(isset($_POST["user_del"])){
          $id = $_POST['user_del'];
          $sql = "DELETE FROM user where id = $id";
          $query = mysqli_query($con,$sql);
          if($query){
               $_SESSION['thongbao'] = "Xóa người dùng thành công";
               header("location:view.php");
               exit(0);
          }else{
               $_SESSION['thongbao'] = "Xóa người dùng thất bại";
               header("location:view.php");
               exit(0);
          }
     }
     if(isset($_POST["add_user"])){
          $id = $_POST['user_id'];
          $username = $_POST['username'];
          $pass = $_POST['pw'];
          $pass = md5($pass);
          $email = $_POST['email'];
          $tenht = $_POST['tenht'];
          $sdt = $_POST['sdt'];
          $role = $_POST['role_as'];
          $anh = basename($_FILES["anh"]["name"]);
          $target_dir = "image/";
          $target_file = $target_dir .$anh;
          move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file);
          $sql = "insert into user (Name,Username,email,password,role,phone,avatar) values('$tenht','$username','$email','$pass','$role','$sdt','$target_file')";
          $query = mysqli_query($con,$sql);
          if($query){
               $_SESSION['thongbao'] = "Thêm người dùng thành công";
               header("location:view.php");
               exit(0);
          }
          else{
               $_SESSION['thongbao'] = "Thêm người dùng thất bại";
               header("location:view.php");
               exit(0);
          }
          
      }
     if(isset($_POST["update_user"])){
          $id = $_POST['user_id'];
          $username = $_POST['username'];
          $pass = $_POST['pw'];
          $pass = md5($pass);
          $email = $_POST['email'];
          $tenht = $_POST['tenht'];
          $sdt = $_POST['sdt'];
          $role = $_POST['role_as'];
          $anh = basename($_FILES["anh"]["name"]);
          $target_dir = "image/";
          $target_file = $target_dir .$anh;
          move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file);
          if($username !="" && $pass !=""){
              $sua = "UPDATE user SET Name = '$tenht', Username = '$username', email ='$email',password = '$pass', phone='$sdt', avatar='$target_file', role ='$role' where id = $id";
              $query = mysqli_query($con,$sua);
              if($query){
                    $_SESSION['thongbao'] = "Cập nhật thành công";
                    header("location:view.php");
                    exit(0);
              }  
          }
      }
?>