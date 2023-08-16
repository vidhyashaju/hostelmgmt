<?php
include 'connection.php';
$data=mysqli_query($con,"SELECT `roomno`, `roomtype`, `fee`, `photo` FROM `addroom`");
$roomdetails=array();
while($row=mysqli_fetch_assoc($data)){
    $roomdetails[]=$row;
    }
echo json_encode($roomdetails);
?>