<?php
     include('authetication.php');
     include('includes/header.php');
?>
<div class="container-fluid px-4">
     <h1 class="mt-4">Quản lý phòng trọ</h1>
     <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Trang Quản Lý</li>
          <li class="breadcrumb-item">Quản lý phòng trọ</li>
     </ol>
     <div class="row">
          <div class="col-md-12">
               <div class="card">
                    <div class="card-header">
                         <h4>Chỉnh sửa bài đăng
                         <a href="view_ptro.php" class="btn btn-danger float-end">Back</a>
                         </h4>
                    </div>
                    <div class="card-body">
                         <?php
                              if(isset($_GET["id"])){
                                   $user_id = $_GET['id'];
                                   $users = "SELECT * FROM motel where id = $user_id";
                                   $users_run = mysqli_query($con,$users);
                                   if(mysqli_num_rows($users_run)>0){
                                        foreach($users_run as $row){
                                             ?>
                                             
                         <form action="code.php" method="POST" enctype="multipart/form-data">
                              <input type="hidden" name="user_id" value="<?= $row['id']; ?>">
                              <div class="row">
                                   <div class="col-md-6 mb-3">
                                        <label for="">Title</label>
                                        <input type="text" name="Title" value="<?= $row['title']; ?>" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Description</label>
                                        <input type="text" name="Description" value="<?= $row['description']; ?>" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Price</label>
                                        <input type="text" name="Price" value="<?= $row['price']; ?>" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Area</label>
                                        <input type="text" name="Area" value="<?= $row['area']; ?>" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Address</label>
                                        <input type="text" name="Address" value="<?= $row['address']; ?>" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Images</label>
                                        <input multiple type="file" name="anh" value="<?= $row['images']; ?>" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Utilities</label>
                                        <input type="text" name="Utilities" value="<?= $row['utilities']; ?>" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Phone</label>
                                        <input type="text" name="Phone" value="<?= $row['phone']; ?>" class="form-control">
                                   </div>
                                   <div class="col-md-12 mb-3">
                                        <button type="submit" name="update_ptro" class="btn btn-primary">Thay đổi</button>
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