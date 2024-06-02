

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
          
          <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="mb-0 text-left"> BIRTH REGISTRATION REPORT</h4><br>
                  <!-- <form class="form-sample" method="post" action="centreRegistration.php"> -->
                  <div class="table-responsive">
                  <table id="example"  class="display" style="width:50%">
					        <thead>
					            <tr>
                                    <th>S/N</th>
                                    <th>First_Name</th>
                                    <th>Last_Name</th>
                                    <th>Father's_Name</th>
                                    <th>Mother's_Name</th>
                                    <th>Gender</th>
                                    <th>Genotype</th>
                                    <th>Weight</th>
                                    <th>Birth_Place</th>
                                    <th>State</th>
                                    <th>LGA</th>
                                    <th>DOB</th>
                                    <th>YOB</th>
                                    <th>Place_Of_Issue</th>
                                    <th>Reg_Centre</th>
                                    <th>Reg_Date</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
					            </tr>
					        </thead>
					        <tbody>

					        <?php
		  $query = mysqli_query($con, "select  * from tblbirth") or die(mysqli_error());
          $count = mysqli_num_rows($query);
          while ($row = mysqli_fetch_array($query)) 
{
  $sn=$sn+1;
  $birthRegId = $row['birthId'];

                            ?>

                                <tr>
                                    <td> <?php echo $sn; ?> </td>
                                    <td> <?php echo $row['firstName']; ?> </td>
                                    <td> <?php echo $row['lastName']; ?> </td>
                                    <td> <?php echo $row['fathersName']; ?> </td>
                                    <td> <?php echo $row['mothersName']; ?> </td>
                                    <td> <?php echo $row['gender']; ?> </td>
                                    <td> <?php echo $row['genotype']; ?> </td>
                                    <td> <?php echo $row['weight']; ?> </td>
                                    <td> <?php echo $row['birthPlace']; ?> </td>
                                    <td> <?php echo $row['state']; ?> </td>
                                    <td> <?php echo $row['lga']; ?> </td>
                                    <td> <?php echo $row['dateOfBirth']; ?> </td>
                                    <td> <?php echo $row['yearOfBirth']; ?> </td>
                                    <td> <?php echo $row['PlaceOfIssue']; ?> </td>
                                    <td> <?php echo $row['regCentre']; ?> </td>
                                    <td> <?php echo $row['dateReg']; ?> </td>
                                    <td><a href = "EditBirthRegistration.php?birthRegId=<?php echo $birthRegId;?>">Edit</a></td>
                                    <td><a href = "deleteBirthRegistration.php?birthRegId=<?php echo $birthRegId;?>" >Delete</a></td>
                                </tr>

                                

                                    
                               <?php  
								 
								     
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
                        
                      </div>
                      <div class="col-md-6">
                        
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
                        
                      </div>
                      <div class="col-md-6">
                        
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        
                      </div>
                      <div class="col-md-6">
                        
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        
                      </div>
                      <div class="col-md-6">
                        
                    </div>
                    
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
                             

                    $result =  mysqli_query("insert into tblcentre (centreName,state,lga,dateReg)
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