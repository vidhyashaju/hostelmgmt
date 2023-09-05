<?php
include 'connection.php';
if(isset($_POST['submit'])){
  $hostelname=$_POST['hostelname'];
  $address=$_POST['address'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $wardenname=$_POST['wname'];
  $wphone=$_POST['wphone'];
  $emergencyphone=$_POST['emphone'];
  $data=mysqli_query($con,"INSERT INTO `hostel_details`(`hostel_name`, `address`, `phone`, `email`, `wname`, `wphone`, `em_phone`) VALUES ('$hostelname','$address','$phone','$email','$wardenname','$wphone','$emergencyphone')");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>HOSTEL MANAGEMENT SYSTEM</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css"/>
  <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="vendors/jquery-bar-rating/fontawesome-stars-o.css">
  <link rel="stylesheet" href="vendors/jquery-bar-rating/fontawesome-stars.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php
    include 'navbar.php';
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php
      include 'sidebar.php'
      ?>
      <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2>Hostel Details</h2>
                  <form class="forms-sample" method="POST">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Hostel Name" name="hostelname">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Address</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="address"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Phone</label>
                      <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Phone No" name="phone">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Warden Name</label>
                      <input type="wname" class="form-control" id="exampleInputEmail3" placeholder="Warden Name" name="wname">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Warden Phone</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Warden Phone No" name="wphone">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Emergency Contact No</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Emergency Contact No" name="emphone">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            
         
      <!-- partial -->
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

