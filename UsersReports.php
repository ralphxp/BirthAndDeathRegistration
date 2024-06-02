

<?php
session_start();
error_reporting(0);
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

        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<!--Data Table-->
            <script>
	        $(document).ready(function() {
	            $('#example').DataTable();s
	        });
	        </script>



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
          =
          <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="mb-0 text-left"> USERS REGISTRATION REPORT</h4><br>
                  <!-- <form class="form-sample" method="post" action="centreRegistration.php"> -->
                  <div class="table-responsive">
                  <table id="example"  class="display" style="width:100%">
					        <thead>
					            <tr>
                                    <th>S/N</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Reg_Centre</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
					            </tr>
					        </thead>
					        <tbody>

                                    <?php
                        $query = mysqli_query($con, "SELECT  * from tbladmin") or die(mysqli_error());
                            $count = mysqli_num_rows($query);
                            while ($row = mysqli_fetch_array($query)) 
                  {

                    $querys = mysqli_query($con, "SELECT  * from tblcentre where centreId =".$row['RegCentre']."") or die(mysqli_error());
                    $counts = mysqli_num_rows($querys);
                    while ($rows = mysqli_fetch_array($querys))
                  {
                    $sn=$sn+1;
                    $adminId = $row['adminId'];

                            ?>
                                <tr>
                                    <td> <?php echo $sn; ?> </td>
                                    <td> <?php echo $row['email']; ?> </td>
                                    <td> <?php echo $row['username']; ?> </td>
                                    <td> <?php echo "******"; ?> </td>
                                    <td> <?php echo $row['role']; ?> </td>
                                    <td> <?php echo $rows['centreName']; ?> </td>
                                    <td><a href = "editUsersRegistration.php?adminId=<?php echo $adminId;?>">Edit</a></td>
                                    <td><a href = "deleteUsersRegistration.php?adminId=<?php echo $adminId;?>" >Delete</a></td>
                                </tr>

                               <?php  
								 
                                }
                            }
                            ?>
 
					        </tbody>
					    </table>  

                        </div>

                    <div class="row">
                      <div class="col-md-6">
                        
                      </div>
                      <div class="col-md-6">
                        
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-6">
                        <!-- <div class="form-group row">
                          <label class="col-sm-3 col-form-label">LGA</label>
                          <div class="col-sm-9">
                          <input class="form-control" required name="lga" type="text"  />
                          </div>
                        </div> -->
                      </div>
                      <div class="col-md-6">
                        <!-- <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Death</label>
                          <div class="col-sm-9">
                            <input class="form-control" required name="dod" type="date" placeholder="dd/mm/yyyy" />
                          </div>
                        </div> -->
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
                    <!-- <input type="submit" name="btnSubmit" value="Save" class="btn btn-success mr-2"/>
                        <button class="btn btn-light">Cancel</button> -->
                  </form>
                </div>
              </div>
            </div>
          </div>
       
          <?php 
               if (isset($_POST['btnSubmit'])) {
//code for validation of fields goes here





                   $centreName = $_POST['centreName'];
                                $state = $_POST['state'];
                                $lga = $_POST['lga'];
                                
                          $dateReg = date('Y-m-d');
                             

                    $result =  mysqli_query($con, "INSERT into tblcentre (centreName,state,lga,dateReg)
                            	values ('$centreName','$state','$lga','$dateReg')
                                ") or die(mysqli_error());

                                         if($result){

                                 echo "   <script type='text/javascript'>
                                                alert('Successfully Registered!');
                                                window.location= 'centreRegistration.php';
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