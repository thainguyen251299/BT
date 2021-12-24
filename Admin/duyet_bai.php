<?php
     include('authetication.php');
     include('includes/header.php');
?>
<div class="container-fluid px-4">
     <h1 class="mt-4">Duyệt bài đăng</h1>
     <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Trang Admin</li>
          <li class="breadcrumb-item">Duyệt bài đăng</li>
     </ol>
     <div class="row">
          <div class="col-md-12">
               <?php include('message.php'); ?>
               <div class="card">
                    <div class="card-header">
                         <h4>Duyệt bài
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
                                        <th>Duyệt</th>
                                        <th>Xoa</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php
                                        $sql = "SELECT * FROM motel where approve = 0";
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
                                                                  if($row['approve'] == '0'){
                                                                      echo 'Chưa duyệt';
                                                                 }
                                                                 ?>
                                                            </td>
                                                            <td><?= $row['created_at']; ?></td>
                                                            <td>
                                                                 <form action="codee.php" method="POST">
                                                                      <button type="submit" name="ptro_duyet" value="<?= $row["id"]; ?>" class="btn btn-success">Duyệt</button>
                                                                 </form>
                                                            </td>
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