<?php
include 'connection.php';
if(isset($_POST['submit']))
{
  $roomno=$_POST['roomno'];
  $roomtype=$_POST['roomtype'];
  $fee=$_POST['fee'];
  $pic=$_FILES['f1']['name'];
  if($pic!=""){
    $filearray=pathinfo($_FILES['f1']['name']);
    $file1=rand();
    $file_ext=$filearray["extension"];
    $filenew=$file1.".".$file_ext;
    move_uploaded_file($_FILES['f1']['tmp_name'],"image/".$filenew);
  }
  mysqli_query($con,"INSERT INTO `addroom`(`roomno`, `roomtype`, `fee`, `photo`) VALUES ('$roomno','$roomtype','$fee','$filenew')");
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
                  <h1 class="card-title">Room Details</h1>
                  <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Room No</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Room No" name="roomno">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Room Type</label>
                        <select class="form-control" id="exampleSelectGender" name="roomtype">
                          <option value="Single">Single</option>
                          <option value="Double">Double</option>
                        </select>
                      </div>
                    <div class="form-group">
                      <label>Photo</label>
                      <input type="file" name="f1">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Fee Per Month</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Fee Per Month" name="fee">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                   </form>
                </div>
              </div>
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

