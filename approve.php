<?php
include 'connection.php';
$stu_id=$_GET['stu_id'];
$parent_id=$_GET['parent_id'];
$data=mysqli_query($con,"UPDATE `student` SET `status`='approve' WHERE stu_id='$stu_id'");
$data=mysqli_query($con,"UPDATE `parent` SET `status`='approve' WHERE parent_id='$parent_id'");
header('location:index.php');
?>