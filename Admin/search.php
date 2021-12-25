<?php
     include('authetication.php');
     include('includes/header.php');
?>
<div class="container-fluid px-4">
     <h1 class="mt-4">Quản lý phòng trọ</h1>
     <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Trang Admin</li>
          <li class="breadcrumb-item">Quản lý phòng trọ</li>
     </ol>
     <div class="row">
          <div class="col-md-12">
               <?php include('message.php'); ?>
               <div class="card">
                    <div class="card-header">
                         <h4>Tim kiem
                         <form action="search.php" method="POST" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                         <div class="input-group">
                         <input name="tkk" type="text" />
                         <button name="sear" class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i>
                         </button>
                         </div>
                         </form>
                              <a href="ptro-add.php" class="btn btn-primary float-end"> Đăng bài </a>
                         </h4>
                    </div>
                    <div class="card-body">
                         <table class="table table-bordered">
                              <thead>
                                   <tr>
                                        <th>id</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Area</th>
                                        <th>Count_view</th>
                                        <th>Address</th>
                                        <th>images</th>
                                        <th>utillities</th>
                                        <th>Phone</th>
                                        <th>approve</th>
                                        <th>created_at</th>
                                        <th>Sua</th>
                                        <th>Xoa</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php
                                        if(isset($_POST['sear'])){
                                        $tk=$_POST['tkk'];
                                        $sql = "SELECT * FROM motel where price = $tk";
                                        $user = mysqli_query($con, $sql);
                                        if(mysqli_num_rows($user) > 0){
                                             foreach($user as $row){
                                                  ?>
                                                       <tr>
                                                            <td><?= $row['id']; ?></td>
                                                            <td><?= $row['title']; ?></td>
                                                            <td><?= $row['description']; ?></td>
                                                            <td><?= $row['price']; ?></td>
                                                            <td><?= $row['area']; ?></td>
                                                            <td><?= $row['count_view']; ?></td>
                                                            <td><?= $row['address']; ?></td>
                                                            <td><img src="<?= $row["images"]?>" width="100px" height="100px"></td>
                                                            <td><?= $row['utilities']; ?></td>
                                                            <td><?= $row['phone']; ?></td>
                                                            <td>
                                                                 <?php
                                                                  if($row['approve'] == '1'){
                                                                      echo 'Đã duyệt';
                                                                 }
                                                                 ?>
                                                            </td>
                                                            <td><?= $row['created_at']; ?></td>
                                                            <td><a href="edit-ptro.php?id=<?= $row["id"]; ?>" class="btn btn-success">Sua</a></td>
                                                            <td>
                                                                 <form action="code.php" method="POST">
                                                                      <button type="submit" name="ptro_del" value="<?= $row["id"]; ?>" class="btn btn-danger">Xoa</button>
                                                                 </form>
                                                            </td>
                                                       </tr>
                                                  <?php
                                             }
                                        }
                                        else{
                                        ?>
                                             <tr>
                                                  <td colspan="14">ko co du lieu</td>
                                             </tr>
                                        <?php
                                        }
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