<?php
include 'connection.php';
//$stuid=$_GET['stu_id'];
$roomno=$_GET['roomno'];
mysqli_query($con,"UPDATE `book_room` SET `status`='Approve' WHERE roomno='$roomno'");
mysqli_query($con,"UPDATE `addroom` SET `status`='Booked' WHERE roomno='$roomno'");
header('location:index.php');
?>