<?php
include 'connection.php';
if(isset($_POST['submit'])){
  $day=$_POST['day'];
  $breakfast=$_POST['breakfast'];
  $lunch=$_POST['lunch'];
  $dinner=$_POST['dinner'];
  $data=mysqli_query($con,"SELECT `day`FROM `mealsadd` WHERE day='$day'");
    if(mysqli_num_rows($data)>0){
      mysqli_query($con,"UPDATE `mealsadd` SET `breakfast`='$breakfast',`lunch`='$lunch',`dinner`='$dinner' WHERE day='$day'");
    }
    else{
      mysqli_query($con,"INSERT INTO `mealsadd`( `day`, `breakfast`, `lunch`, `dinner`) VALUES ('$day','$breakfast','$lunch','$dinner')");
    }
   
}
  $data=mysqli_query($con,"SELECT `day`, `breakfast`, `lunch`, `dinner` FROM `mealsadd`");

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
                    <label><h5>Day</h5></label>
                    <select class="js-example-basic-single w-100" name="day">
                      <option value="Sunday">Sunday</option>
                      <option value="Monday">Monday</option>
                      <option value="Tuesday">Tuesday</option>
                      <option value="Wednesday">Wednesday</option>
                      <option value="Thusday">Thursday</option>
                      <option value="Friday">Friday</option>
                      <option value="Saturday">Saturday</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputUsername1"><h5>Breakfast</h5></label>
                      <input type="text" class="form-control" name="breakfast"placeholder="Item Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1"><h5>Lunch</h5></label>
                      <input type="text" class="form-control" name="lunch"placeholder="Item Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1"><h5>Dinner</h5></label>
                      <input type="text" class="form-control" name="dinner"placeholder="Item Name">
                    </div>
                  
                  
                    <button type="submit" class="btn btn-primary mr-2" name="submit">ADD</button>
                    </form>
                   </div>
                   <div class="card">
                <div class="card-body">
                  <h3>FOOD MENU</h3>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Day</th>
                          <th>Breakfast</th>
                          <th>Lunch</th>
                          <th>Dinner</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php
                        while($row=mysqli_fetch_assoc($data))
                        {
                          ?>
                        <tr>
                          <td><?php echo $row['day'];?></td>
                          <td><?php echo $row['breakfast'];?></td>
                          <td><?php echo $row['lunch'];?></td>
                          <td><?php echo $row['dinner'];?></td>
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

