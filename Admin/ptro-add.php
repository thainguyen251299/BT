<?php
     include('authetication.php');
     include('includes/header.php');
?>
<div class="container-fluid px-4">
     <div class="row mt-4">
          <div class="col-md-12">
               <div class="card">
                    <div class="card-header">
                         <h4>Đăng bài
                         <a href="view_ptro.php" class="btn btn-danger float-end">Back</a>
                         </h4>
                    </div>
                    <div class="card-body">
                         <form action="code.php" method="POST" enctype="multipart/form-data">
                              <div class="row">
                                   <div class="col-md-12 mb-3">
                                        <label for="">Title</label>
                                        <input type="text" name="title" class="form-control">
                                   </div>
                                   <div class="col-md-12 mb-3">
                                        <label for="">Description</label>
                                        <textarea type="text" name="description" class="form-control" rows="4"></textarea>
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Price</label>
                                        <input type="text" name="price" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Area</label>
                                        <input type="text" name="area" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Address</label>
                                        <input type="text" name="address" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Images</label>
                                        <input multiple type="file" name="anh" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">user_id</label>
                                        <?php
                                             $user_id = "select * from user";
                                             $user_run = mysqli_query($con,$user_id);
                                             if(mysqli_num_rows($user_run) > 0){
                                                  ?>
                                                  <select name="users_id" required class="form-control">
                                                       <option value="">--Người đăng--</option>
                                                       <?php
                                                            foreach($user_run as $row){
                                                                 ?>
                                                                 <option value="<?= $row['id'];?>"> <?= $row['Name'];?> </option>
                                                                 <?php
                                                            }
                                                       ?>
                                                  </select>
                                                  <?php
                                             }else{
                                                  ?>
                                                  <h5>Ko có dữ liệu</h5>
                                                  <?php
                                             }
                                        ?>
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">category_id</label>
                                        <?php
                                             $category_id = "select * from category";
                                             $category_run = mysqli_query($con,$category_id);
                                             if(mysqli_num_rows($category_run) > 0){
                                                  ?>
                                                  <select name="category_id" required class="form-control">
                                                       <option value="">--Loại phòng--</option>
                                                       <?php
                                                            foreach($category_run as $rows){
                                                                 ?>
                                                                 <option value="<?= $rows['id'];?>"> <?= $rows['loai_phong'];?> </option>
                                                                 <?php
                                                            }
                                                       ?>
                                                  </select>
                                                  <?php
                                             }else{
                                                  ?>
                                                  <h5>Ko có dữ liệu</h5>
                                                  <?php
                                             }
                                        ?>
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">district_id</label>
                                        <?php
                                             $district_id = "select * from districts";
                                             $district_run = mysqli_query($con,$district_id);
                                             if(mysqli_num_rows($district_run) > 0){
                                                  ?>
                                                  <select name="district_id" required class="form-control">
                                                       <option value="">--Khu vực--</option>
                                                       <?php
                                                            foreach($district_run as $rows){
                                                                 ?>
                                                                 <option value="<?= $rows['id'];?>"> <?= $rows['name'];?> </option>
                                                                 <?php
                                                            }
                                                       ?>
                                                  </select>
                                                  <?php
                                             }else{
                                                  ?>
                                                  <h5>Ko có dữ liệu</h5>
                                                  <?php
                                             }
                                        ?>
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Utilities</label>
                                        <input type="text" name="utilities" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Phone</label>
                                        <input type="text" name="phone" class="form-control">
                                   </div>
                                   <div class="col-md-12 mb-3">
                                        <button type="submit" name="add_ptro" class="btn btn-primary">Đăng bài</button>
                                   </div>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>
<?php
     include('includes/footer.php');
     include('includes/script.php');
?>