<?php
include 'connection.php';
$data=mysqli_query($con,"SELECT `roomno`, `roomtype`, `fee`, `photo` FROM `addroom`WHERE status='not booked'");
$roomdetails=array();
if (mysqli_num_rows($data) > 0) {
while($row=mysqli_fetch_assoc($data)){
    $roomdetails[]=$row;
    }
}
echo json_encode($roomdetails);
?>