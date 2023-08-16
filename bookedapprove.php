<?php
include 'connection.php';
$stuid=$_GET['stu_id'];
$data=mysqli_query($con,"UPDATE `book_room` SET `status`='Approve' WHERE stu_id='$stuid'");
?>