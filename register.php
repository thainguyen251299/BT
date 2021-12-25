<?php
    session_start();
    include'config.php';
    if(isset($_POST['dangky'])&& $_POST['username'] && $_POST['pw'] && $_POST['pwr'] && $_POST['email'] && $_POST['tenht'] != ''){
        $username = $_POST['username'];
        $pass = $_POST['pw'];
        $passr = $_POST['pwr'];
        $email = $_POST['email'];
        $tenht = $_POST['tenht'];
        $sdt = $_POST['sdt'];
        $anh = basename($_FILES["anh"]["name"]);
        $target_dir = "image/";
        $target_file = $target_dir .$anh;
        move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file);
        if($pass != $passr){
            $_SESSION["thongbao"]="vui long nhap dung password da nhap";
            header("location:dangky.php");
            die();
        }
        $sql = "SELECT * FROM user WHERE Username = '$username'";
        $old = mysqli_query($con,$sql);
        $pass = md5($pass);
        if (mysqli_num_rows($old)>0){
            $_SESSION["thongbao"]="Ten tai khoan da ton tai";
            header("location:dangky.php");
            die();
        }
        $sql = "insert into user (Name,Username,email,password,phone,avatar) values('$tenht','$username','$email','$pass','$sdt','$target_file')";
        mysqli_query($con,$sql);
        $_SESSION["thongbao"]="Da dang ky thanh cong";
        header('location:login.php');
    }else{
        $_SESSION["thongbao"]="vui long nhap day du thong tin";
        header("location:dangky.php");
    }
?>