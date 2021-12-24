<?php
     include('authetication.php');
     include('includes/header.php');
?>
<div class="container-fluid px-4">
     <h1 class="mt-4">Quản lý user</h1>
     <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Trang Quản Lý</li>
          <li class="breadcrumb-item">Quản lý user</li>
     </ol>
     <div class="row">
          <div class="col-md-12">
               <div class="card">
                    <div class="card-header">
                         <h4>Chỉnh sửa người dùng
                         <a href="view.php" class="btn btn-danger float-end">Back</a>
                         </h4>
                    </div>
                    <div class="card-body">
                         <?php
                              if(isset($_GET["id"])){
                                   $user_id = $_GET['id'];
                                   $users = "SELECT * FROM user where id = $user_id";
                                   $users_run = mysqli_query($con,$users);
                                   if(mysqli_num_rows($users_run)>0){
                                        foreach($users_run as $row){
                                             ?>
                                             
                         <form action="code.php" method="POST" enctype="multipart/form-data">
                              <input type="hidden" name="user_id" value="<?= $row['id']; ?>">
                              <div class="row">
                                   <div class="col-md-6 mb-3">
                                        <label for="">Name</label>
                                        <input type="text" name="tenht" value="<?= $row['Name']; ?>" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Username</label>
                                        <input type="text" name="username" value="<?= $row['Username']; ?>" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Email</label>
                                        <input type="text" name="email" value="<?= $row['email']; ?>" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Password</label>
                                        <input type="text" name="pw" value="<?= $row['password']; ?>" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Phone</label>
                                        <input type="text" name="sdt" value="<?= $row['phone']; ?>" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Avatar</label>
                                        <input multiple type="file" name="anh" value="<?= $row['avatar']; ?>" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Roles</label>
                                        <select name="role_as" required class="form-control">
                                             <option value="">--Chọn quyền--</option>
                                             <option value="1" <?= $row['role'] == '1' ? 'selected':'' ?> >Admin</option>
                                             <option value="0" <?= $row['role'] == '0' ? 'selected':'' ?>>User</option>
                                        </select>
                                   </div>
                                   <div class="col-md-12 mb-3">
                                        <button type="submit" name="update_user" class="btn btn-primary">Thay đổi</button>
                                   </div>
                              </div>
                         </form>
                         <?php
                                        }
                                   }else
                                   {
                                        ?>
                                        <h4>Ko có dữ liệu</h4>
                                        <?php
                                   }
                               }
                         ?>
                    </div>
               </div>
          </div>
     </div>
</div>
<?php
     include('includes/footer.php');
     include('includes/script.php');
?>