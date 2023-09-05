<?php
include 'connection.php';
$stuid=$_GET['stu_id'];
mysqli_query($con,"UPDATE `book_room` SET `status`='Reject' WHERE stu_id='$stuid'");
?>