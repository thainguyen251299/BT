<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang Ky Thanh Vien</title>
</head>
<body>
    <h3>Dang ky thanh vien</h3>
    <p>
    <?php
        if(isset($_SESSION["thongbao"])){
            echo $_SESSION["thongbao"]; 
            unset($_SESSION['thongbao']);
        }
    ?>
    </p>
    <form action="register.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Tai khoan:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Mat khau:</td>
                <td><input type="password" name="pw"></td>
            </tr>
            <tr>
                <td>nhap lai mat khau:</td>
                <td><input type="password" name="pwr"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Ten hien thi</td>
                <td><input type="text" name="tenht"></td>
            </tr>
            </tr>
            <tr>
                <td>SDT</td>
                <td><input type="text" name="sdt"></td>
            </tr>
            <tr>
                <td>Anh</td>
                <td><input multiple type="file" name="anh"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="dangky"> Dang Ky </button>
                    <button type="reset"> lam moi </button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>