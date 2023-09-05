<?php
$con=mysqli_connect("localhost","root","","hosteldb");
$roomno=$_POST['roomno'];
$roomtype=$_POST['type'];
$amount=$_POST['fee'];
$stuid=$_POST['stuId'];
$date=date("Y/m/d");
$data=mysqli_query($con,"INSERT INTO `book_room`(`roomno`, `type`, `fee`, `stu_id`, `date`,`status`) VALUES ('$roomno','$roomtype','$amount','$stuid','$date','pending')");
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