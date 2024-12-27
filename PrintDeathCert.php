

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
	            $('#example').DataTable();
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
            <!-- <div class="col-12">
              <span class="d-block d-md-flex align-items-center">
                <p>Like what you see? Check out our premium version for more.</p>
                <a class="btn ml-auto download-button d-none d-md-block" href="https://github.com/BootstrapDash/StarAdmin-Free-Bootstrap-Admin-Template" target="_blank">Download Free Version</a>
                <a class="btn purchase-button mt-4 mt-md-0" href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank">Upgrade To Pro</a>
                <i class="mdi mdi-close popup-dismiss d-none d-md-block"></i>
              </span>
            </div> -->
          </div>
          

          <?php include_once 'TopDash.php';?>



          <div class="row">
            <div class="col-lg-7 grid-margin stretch-card">
              
            </div>
            
          </div>
          
          <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="mb-0 text-left"> PRINT DEATH CERTIFICATES</h4><br>
                  <!-- <form class="form-sample" method="post" action="centreRegistration.php"> -->
                  <div class="table-responsive">
                  <table id="example"  class="display" style="width:50%">
					        <thead>
					            <tr>
                                    <th>S/N</th>
                                    <th>First_Name</th>
                                    <th>Last_Name</th>
                                    <th>Gender</th>
                                    <th>State</th>
                                    <th>LGA</th>
                                    <th>Address</th>
                                    <th>Age_at_Death</th>
                                    <th>Place_Of_Death</th>
                                    <th>Date_Of_Death</th>
                                    <th>Place_Of_Issue</th>
                                    <th>Reg_Centre</th>
                                    <th>Reg_Date</th>
                                    <th>Print</th>
					            </tr>
					        </thead>
					        <tbody>

					        <?php
		  $query = mysqli_query($con, "select  * from tbldeath") or die(mysqli_error());
          $count = mysqli_num_rows($query);
          while ($row = mysqli_fetch_array($query)) 
         
            {
              $sn=$sn+1;
              $deathRegId = $row['deathId'];
                            ?>

                                <tr>
                                    <td> <?php echo $sn; ?> </td>
                                    <td> <?php echo $row['firstName']; ?> </td>
                                    <td> <?php echo $row['lastName']; ?> </td>
                                    <td> <?php echo $row['gender']; ?> </td>
                                    <td> <?php echo $row['state']; ?> </td>
                                    <td> <?php echo $row['lga']; ?> </td>
                                    <td> <?php echo $row['address']; ?> </td>
                                    <td> <?php echo $row['ageAtDeath']; ?> </td>
                                    <td> <?php echo $row['placeOfDeath']; ?> </td>
                                    <td> <?php echo $row['dateOfDeath']; ?> </td>
                                    <td> <?php echo $row['PlaceOfIssue']; ?> </td>
                                    <td> <?php echo $row['regCentre']; ?> </td>
                                    <td> <?php echo $row['dateReg']; ?> </td>
                                    <td><a href = "PrintDeathCertPage.php?deathRegId=<?php echo $deathRegId;?>"class="btn btn-success btn-fw"> <i class="mdi mdi-printer"></i>Print_Certificate</a></td>
                                </tr>

                               <?php  
								 
								     
							}
                            ?>
 
					        </tbody>
					    </table>  

                        </div>

                    <div class="row">
                      <div class="col-md-6">
                        <!-- <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Centre Name</label>
                          <div class="col-sm-9">
                            <input type="text" name= 'centreName' required class="form-control" />
                          </div>
                        </div> -->
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