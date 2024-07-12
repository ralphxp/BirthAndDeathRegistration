

<?php
session_start();
error_reporting(0);
include('dbcon.php');


$_SESSION['adminId'] = $_GET['adminId'];


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
          

          <?php

$query = mysqli_query("select  * from tbladmin where adminId = '$_SESSION[adminId]'") or die(mysqli_error());
$row = mysqli_fetch_array($query);

   ?>


          <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">UPDATE USERS REGISTRATION</h4>
                  <form class="form-sample" method="post">
                    <p class="card-description">
                      Users Info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Email_Address</label>
                          <div class="col-sm-9">
                            <input type="email" value="<?php echo $row['email']?>" name= 'email' required class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Role </label>
                          <div class="col-sm-9">
                          <select name="role" class="form-control" >
              <option value="Super_Administrator">Super_Administrator</option>
              <option value="Administrator">Administrator</option>
            </select>                          
                        </div>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Username</label>
                          <div class="col-sm-9">
                          <input class="form-control" value="<?php echo $row['username']?>" required name="username" type="text"  />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Centre</label>
                          <div class="col-sm-9">


                            <?php 
                        $qry= "SELECT * FROM tblcentre ORDER BY centreName ASC";
                        $res= mysqli_query($qry);
                        $num = mysqli_num_rows($res);
                        if ($num > 0){
                          echo ' <select type="text" required name="centre" class ="form-control">';
                          while ($rows=mysqli_fetch_array($res)){
                          echo'<option value="'.$rows['centreId'].'" >'.$rows['centreName'].'</option>\n';
                              }
                                  echo '</select>';
                              }
                                ?>
                          
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                       
                      </div>
                      
                      
                    </div>
                    <!-- <p class="card-description">
                      Address
                    </p> -->
                    <div class="row">
                      <div class="col-md-6">
                        <!-- <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Birth Place(Town)</label>
                          <div class="col-sm-9">
                            <input type="text" name="bPlace" required class="form-control" />
                          </div>
                        </div> -->
                      </div>
                      <div class="col-md-6">
                        <!-- <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                            <input type="text" name = "state" required class="form-control" />
                          </div>
                        </div> -->
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <!-- <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <input  type="text" name = "address" required class="form-control"/>
                          </div>
                        </div> -->
                      </div>
                      <div class="col-md-6">
                        <!-- <div class="form-group row">
                          <label class="col-sm-3 col-form-label">LGA</label>
                          <div class="col-sm-9">
                            <input type="text" name = "lga" required class="form-control" />
                          </div>
                        </div> -->
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <!-- <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Place of Issue</label>
                          <div class="col-sm-9">
                            <input type="text" readonly name="Placeissue" required  class="form-control" />
                          </div>
                        </div> -->
                      </div>
                      <div class="col-md-6">
                        <!-- <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Registration Centre</label>
                          <div class="col-sm-9">
                          <input type="text" name="regCentre" required class="form-control" />
                          </div>
                        </div>
                      </div> -->
                    </div>
                    <input type="submit" name="btnSubmit" value="Update" class="btn btn-success mr-2"/>
                        <!-- <button name ="btnCancel" class="btn btn-light">Cancel</button> -->
                  </form>
                </div>
              </div>
            </div>
          </div>
       
          <?php 


               if (isset($_POST['btnSubmit'])) {
//code for validation of fields goes here

                                $email = $_POST['email'];
                                $username = $_POST['username'];
                                $role = $_POST['role'];
                                $centre = $_POST['centre'];
                                $password = 'password';
                                $dateReg = date('Y-m-d');
                                  
$resultt = mysqli_query("update tbladmin set email ='$email',username='$username',password='".$row['password']."',role='$role',RegCentre='$centre',dateReg='$dateReg' where adminId = '$_SESSION[adminId]'") or die(mysqli_error());

                                if($resultt){
                                           
         
                                          echo "   <script type='text/javascript'>
                                                         alert('Admin/Users Registration Successfully Updated!');
                                                         window.location= 'UsersReports.php';
                                                     </script>";
         
                                         }
                                       }
                            
                            ?>


         
        <!-- partial:partials/_footer.html -->
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