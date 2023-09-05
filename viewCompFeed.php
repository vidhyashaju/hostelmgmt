<?php
include 'connection.php';
$data=mysqli_query($con,"SELECT * FROM `student`");
if(isset($_POST['submit'])){
  $stuid=$_POST['stu_id'];
  $complaints=mysqli_query($con,"SELECT `stu_id`, `complaint`, `date` FROM `complaint` WHERE stu_id='$stuid'");
  $feedback=mysqli_query($con,"SELECT `feedback`, `stu_id`, `date` FROM `feedback` WHERE stu_id='$stuid'");
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
       <div class="col-md-6 grid-margin-lg-0 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form action="" method="POST">
                    <div class="form-group">
                    <label><h5>Student Name</h5></label>
                    <select class="form-control" name="stu_id">
                              <option value="">Select</option>
                              <?php
                              while($row=mysqli_fetch_assoc($data))
                              {
                                ?>
                              <option value="<?php echo $row['stu_id'];?>"><?php echo $row['stu_name'];?></option>  
                              <?php
                              }
                              ?>
                            </select>
                          
                  </div>
                  <div>
                  <button type="submit" class="btn btn-primary mr-2" name="submit">View</button>
                  </div>
                   <div class="card">
                <div class="card-body">
                  <h3>Complaints</h3>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Student Id</th>
                          <th>Complints</th>
                          <th>Date</th>
                         </tr>
                      </thead>
                      <tbody>
                        <?php
                        while($row=mysqli_fetch_assoc($complaints))
                        {
                          ?>
                        <tr>
                          <td><?php echo $row['stu_id'];?></td>
                          <td><?php echo $row['complaint'];?></td>
                          <td><?php echo $row['date'];?></td>
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
          
              </div>
            </div>
            <div class="card">
                <div class="card-body">
                  <h3>Feedbacks</h3>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Student Id</th>
                          <th>Feedback</th>
                          <th>Date</th>
                         </tr>
                      </thead>
                      <tbody>
                        <?php
                        while($row=mysqli_fetch_assoc($feedback))
                        {
                          ?>
                        <tr>
                          <td><?php echo $row['stu_id'];?></td>
                          <td><?php echo $row['feedback'];?></td>
                          <td><?php echo $row['date'];?></td>
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
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

