<?php
     include('authetication.php');
     include('includes/header.php');
?>
<div class="container-fluid px-4">
     <div class="row mt-4">
          <div class="col-md-12">
               <div class="card">
                    <div class="card-header">
                         <h4>Thêm người dùng
                         <a href="view.php" class="btn btn-danger float-end">Back</a>
                         </h4>
                    </div>
                    <div class="card-body">
                         <form action="code.php" method="POST" enctype="multipart/form-data">
                              <input type="hidden" name="user_id" value="<?= $row['id']; ?>">
                              <div class="row">
                                   <div class="col-md-6 mb-3">
                                        <label for="">Name</label>
                                        <input type="text" name="tenht" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Username</label>
                                        <input type="text" name="username" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Email</label>
                                        <input type="text" name="email" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Password</label>
                                        <input type="text" name="pw" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Phone</label>
                                        <input type="text" name="sdt" class="form-control">
                                   </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="">Roles</label>
                                        <select name="role_as" required class="form-control">
                                             <option value="">--Chọn quyền--</option>
                                             <option value="1" >Admin</option>
                                             <option value="0" >User</option>
                                        </select>
                                   </div>
                                   <div class="col-md-12 mb-3">
                                        <button type="submit" name="add_user" class="btn btn-primary">Thêm</button>
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