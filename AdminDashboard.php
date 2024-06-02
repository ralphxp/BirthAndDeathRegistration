
<?php
error_reporting(0);
session_start(); 
include('dbcon.php');


if (!isset($_SESSION['email']))
{

  echo "<script type = \"text/javascript\">
  window.location = (\"index.php\");
  </script>";

}

?>
  


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include_once('title.php');?>
    <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">

  <?php include_once 'header.php';?>

</div>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      
<?php include_once 'sidebar.php';?>
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
           
          </div>
          

          <?php include_once 'TopDash.php';?>



          <div class="row">
            <div class="col-lg-7 grid-margin stretch-card">
              
            </div>
           
          </div>
          
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">SYSTEM USERS</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th>USERNAME </th>
                          <th>PASSWORD </th>
                          <th>ROLE</th>
                          <th>CENTRE</th>
                          <th>DATE_REGISTERED </th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php
                        $query = mysqli_query($con,"SELECT * FROM tbladmin LIMIT 5") or die(mysqli_error());
                        $count = mysqli_num_rows($query);
                        while ($row = mysqli_fetch_array($query)) 
         
                        {

                          $querys = mysqli_query($con,"SELECT * FROM tblcentre where centreId =".$row['RegCentre']."") or die(mysqli_error());
                          $counts = mysqli_num_rows($querys);
                          while ($rows = mysqli_fetch_array($querys))
                          {
              
                              ?>



                                          <tr>
                                            <td class="font-weight-medium"> <?php echo $row['email'];?></td>
                                            <td><?php echo $row['username'];?></td>
                                            <td><?php echo '*****';?> </td>
                                            <td><?php echo $row['role'];?> </td>
                                            <td class="text-success"> <?php echo $rows['centreName'];?><i class="mdi mdi-arrow-down"></i> </td>
                                            <td>
                                            <?php echo $row['dateReg'];?></td>
                                          </tr>
                                          <tr>
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
          
       <?php include_once('footer.php');?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>