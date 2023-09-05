<?php
$con=mysqli_connect("localhost","root","","hosteldb");
$data=json_decode(file_get_contents('php://input'),true);
foreach($data as $room){
    $stuname=$room['stuname'];
    $roomno=$room['roomno'];
    $type=$room['type'];
    $rent=$room['rent'];
    $booked_date=$room['date'];
}
$payment_date=date("Y/m/d");
$data=mysqli_query($con,"INSERT INTO `payment_confirm`(`stuname`, `roomno`, `type`, `rent`, `date`, `payment_date`) VALUES ('$stuname','$roomno','$type','$rent','$booked_date','$payment_date')");
if($data)
{
    $myarray['message']='success';
}
else
{
    $myarray['message']='failed';
}
echo json_encode($myarray);

?>