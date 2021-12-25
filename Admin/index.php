<?php
     include('authetication.php');
     include('includes/header.php');
?>
<div class="container-fluid px-4">
     <h1 class="mt-4">Trang Quan Tri</h1>
     <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Dashboard</li>
     </ol>
          <?php include('message.php'); ?>
     <div class="row">
     <div class="col-xl-3 col-md-6">
          <div class="card bg-primary text-white mb-4">
               <div class="card-body">Thong ke bai dang
                    <?php
                         $sql = "select * from motel where approve = 1";
                         $sql_run = mysqli_query($con,$sql);
                         if($total = mysqli_num_rows($sql_run)){
                              echo'<h4 class="mb-0">'.$total.'</h4>';
                         }else{
                              echo'<h4 class="mb-0"> ko co du lieu </h4>';
                         }
                    ?>
               </div>
               <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="view_ptro.php">View Details</a>
               <div class="small text-white"><i class="fas fa-angle-right"></i></div>
               </div>
          </div>
     </div>
     <div class="col-xl-3 col-md-6">
          <div class="card bg-warning text-white mb-4">
               <div class="card-body">Thong ke nguoi dung
               <?php
                         $sql = "select * from user";
                         $sql_run = mysqli_query($con,$sql);
                         if($total = mysqli_num_rows($sql_run)){
                              echo'<h4 class="mb-0">'.$total.'</h4>';
                         }else{
                              echo'<h4 class="mb-0"> ko co du lieu </h4>';
                         }
                    ?>
               </div>
               <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="view.php">View Details</a>
               <div class="small text-white"><i class="fas fa-angle-right"></i></div>
               </div>
          </div>
     </div>
</div>
<?php
     include('includes/footer.php');
     include('includes/script.php');
?>