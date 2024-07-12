

<?php
session_start();
// error_reporting(0);
include('dbcon.php');


if (!isset($_SESSION['email']))
{

  echo "<script type = \"text/javascript\">
  window.location = (\"index.php\");
  </script>";

}

if (isset($_SESSION['RegCentre']))
{

$querys = mysqli_query($con, "SELECT  * from tblcentre where centreId =".$_SESSION['RegCentre']."") or die(mysqli_error());
$rows = mysqli_fetch_array($querys);
$regCentre = $rows['centreName'];

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
          
          <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> DEATH REGISTRATION</h4>
                  <form class="form-sample" method="post" action="DeathRegistration.php">
                    <p class="card-description">
                      Personal info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" name= 'firstName' required class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" name= 'lastName' required class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select name="gender" required class="form-control">
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Death</label>
                          <div class="col-sm-9">
                            <input class="form-control" required name="dod" type="date" placeholder="dd/mm/yyyy" />
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
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Age at Death</label>
                          <div class="col-sm-9">
                            <input type="text" name="ageDeath" required class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                          <select name="state" class="form-control" >
              <option value="Abuja FCT">Abuja FCT</option>
              <option value="Abia">Abia</option>
              <option value="Adamawa">Adamawa</option>
              <option value="Akwa Ibom">Akwa Ibom</option>
              <option value="Anambra">Anambra</option>
              <option value="Bauchi">Bauchi</option>
              <option value="Bayelsa">Bayelsa</option>
              <option value="Benue">Benue</option>
              <option value="Borno">Borno</option>
              <option value="Cross River">Cross River</option>
              <option value="Delta">Delta</option>
              <option value="Ebonyi">Ebonyi</option>
              <option value="Edo">Edo</option>
              <option value="Ekiti">Ekiti</option>
              <option value="Enugu">Enugu</option>
              <option value="Gombe">Gombe</option>
              <option value="Imo">Imo</option>
              <option value="Jigawa">Jigawa</option>
              <option value="Kaduna">Kaduna</option>
              <option value="Kano">Kano</option>
              <option value="Katsina">Katsina</option>
              <option value="Kebbi">Kebbi</option>
              <option value="Kogi">Kogi</option>
              <option value="Kwara">Kwara</option>
              <option value="Lagos">Lagos</option>
              <option value="Nassarawa">Nassarawa</option>
              <option value="Niger">Niger</option>
              <option value="Ogun">Ogun</option>
              <option value="Ondo">Ondo</option>
              <option value="Osun">Osun</option>
              <option value="Oyo">Oyo</option>
              <option value="Plateau">Plateau</option>
              <option value="Rivers">Rivers</option>
              <option value="Sokoto">Sokoto</option>
              <option value="Taraba">Taraba</option>
              <option value="Yobe">Yobe</option>
              <option value="Zamfara">Zamfara</option>
            </select>                               
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Place of Death</label>
                          <div class="col-sm-9">
                            <input  type="text" name = "placeDeath" required class="form-control"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <input  type="text" name = "address" required class="form-control"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">LGA</label>
                          <div class="col-sm-9">
                            <input type="text" name = "lga" required class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Place of Issue</label>
                          <div class="col-sm-9">
                            <input type="text" readonly name="Placeissue" required value='<?php echo $regCentre;?>' class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Registration Centre</label>
                          <div class="col-sm-9">
                          <input type="text" name="regCentre" readonly value='<?php echo $regCentre;?>' required class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <input type="submit" name="btnSubmit" value="Submit" class="btn btn-success mr-2"/>
                        <!-- <button class="btn btn-light">Cancel</button> -->
                  </form>
                </div>
              </div>
            </div>
          </div>
       
          <?php 
               if (isset($_POST['btnSubmit'])) {
//code for validation of fields goes here





                   $firstName = $_POST['firstName'];
                                $lastName = $_POST['lastName'];
                                $gender = $_POST['gender'];
                                $dod = $_POST['dod'];
                                $state = $_POST['state'];
                                $lga = $_POST['lga'];
                                $Placeissue = $_POST['Placeissue'];
                                $address = $_POST['address'];
                                $ageDeath = $_POST['ageDeath'];
                                $placeDeath = $_POST['placeDeath'];
                                $regCentre = $_POST['regCentre'];

                          $dateReg = date('Y-m-d');
                       
                          
                          $query = mysqli_query($con, "SELECT  * from tblcertno where certId = '200000'") or die(mysqli_error());
                          $row = mysqli_fetch_array($query);
                          $numberOfRows = mysqli_num_rows($query);				
      
                         $newCertNo  = $row['lastCertId']  + 1;  
  
     $resultt = mysqli_query($con, "UPDATE tblcertno set lastCertId='$newCertNo' where certId = '200000'") or die(mysqli_query());
  
                         if($resultt > 0){
                                    


                    $result =  mysqli_query($con, "INSERT into tbldeath (certNo,firstName,lastName,gender,state,lga,address,ageAtDeath,placeOfDeath,dateOfDeath,PlaceOfIssue,regCentre,dateReg)
                            	values ('$newCertNo','$firstName','$lastName','$gender','$state','$lga','$address','$ageDeath','$address', '$dod','$Placeissue','$regCentre','$dateReg')
                                ") or die(mysqli_error());

                                         if($result){

                                 echo "   <script type='text/javascript'>
                                                alert('Successfully Registered!');
                                                window.location= 'DeathRegistration.php';
                                            </script>";

                                }
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