<?php
     include('authetication.php');
     include('includes/header.php');
?>
<div class="container-fluid px-4">
     <h1 class="mt-4">Quản lý user</h1>
     <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Trang Admin</li>
          <li class="breadcrumb-item">Quản lý user</li>
     </ol>
     <div class="row">
          <div class="col-md-12">
               <?php include('message.php'); ?>
               <div class="card">
                    <div class="card-header">
                         <h4>Người dùng
                              <a href="register-add.php" class="btn btn-primary float-end"> Thêm người dùng</a>
                         </h4>
                    </div>
                    <div class="card-body">
                         <table class="table table-bordered">
                              <thead>
                                   <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th>Phone</th>
                                        <th>Avatar</th>
                                        <th>Sua</th>
                                        <th>Xoa</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php
                                        $sql = "SELECT * FROM user";
                                        $user = mysqli_query($con, $sql);
                                        if(mysqli_num_rows($user) > 0){
                                             foreach($user as $row){
                                                  ?>
                                                       <tr>
                                                            <td><?= $row['id']; ?></td>
                                                            <td><?= $row['Name']; ?></td>
                                                            <td><?= $row['Username']; ?></td>
                                                            <td><?= $row['email']; ?></td>
                                                            <td>
                                                                 <?php
                                                                 if($row['role'] == '1'){
                                                                      echo 'Admin';
                                                                 }elseif($row['role'] == '0'){
                                                                      echo 'User';
                                                                 }
                                                                 ?>
                                                            </td>
                                                            <td><?= $row['phone']; ?></td>
                                                            <td><img src="<?= $row["avatar"]?>" width="60px" height="60px"></td>
                                                            <td><a href="register-edit.php?id=<?= $row["id"]; ?>" class="btn btn-success">Sua</a></td>
                                                            <td>
                                                                 <form action="code.php" method="POST">
                                                                      <button type="submit" name="user_del" value="<?= $row["id"]; ?>" class="btn btn-danger">Xoa</button>
                                                                 </form>
                                                            </td>
                                                       </tr>
                                                  <?php
                                             }
                                        }
                                        else{
                                        ?>
                                             <tr>
                                                  <td colspan="8">ko co du lieu</td>
                                             </tr>
                                        <?php
                                        }
                                   ?>
                                   
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</div>
<?php
     include('includes/footer.php');
     include('includes/script.php');
?>