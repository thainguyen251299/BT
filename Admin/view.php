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
                         <h4>Người dùng</h4>
                    </div>
                    <div class="card-body">
                         <table class="table table-bordered">
                              <thead>
                                   <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
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
                                                            <td><?= $row['phone']; ?></td>
                                                            <td><img src="<?= $row["avatar"]?>" width="200px"></td>
                                                            <td><a href="suatt.php?id=<?= $row["id"]; ?>" class="btn btn-success">Sua</a></td>
                                                            <td><a href="xoa.php?id=<?= $rows["id"]; ?>"class="btn btn-success">Xoa</a></td>
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