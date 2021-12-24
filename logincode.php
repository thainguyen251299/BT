<?php
    session_start();
    include('Admin/config/dbcon.php');
    if(isset($_POST['dangnhap'])&& $_POST['uname']&& $_POST['psw'] != ''){
        $tk = $_POST['uname'];
        $mk = $_POST['psw'];
        $mk = md5($mk);
        $sql = "SELECT * FROM user where Username = '$tk' AND password='$mk' limit 1";
        $user = mysqli_query($con, $sql);
        if(mysqli_num_rows($user) > 0){
            foreach($user as $data){
                 $user_id = $data['id'];
                 $user_name = $data['Name'];
                 $user_username = $data['username'];
                 $role_as = $data['role'];
            }
            $_SESSION["auth"] = true;
            $_SESSION["auth_role"] = "$role_as";
            $_SESSION["auth_user"] = [
                 'user_id' => $user_id,
                 'user_name' => $user_name,
                 'user_username' => $user_username,
            ];
            if($_SESSION["auth_role"] == 1){
               $_SESSION["thongbao"]="Xin Chao admin";
               header('location:./Admin/index.php');
               exit(0);
            }
            elseif($_SESSION["auth_role"] == 0) {
               $_SESSION["thongbao"]="Xin Chao user";
               header('location:index.php');
               exit(0);
            }
        }else{           
            $_SESSION["thongbao"]="Sai ten dang nhap hoac mat khau";
            header('location:login.php');
            exit(0);
        }
    }else{
        $_SESSION["thongbao"]="vui long nhap ten dang nhap va mat khau";
      header('location:login.php');
    }
?>