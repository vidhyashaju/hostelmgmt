<?php
$con=mysqli_connect("localhost","root","","hosteldb");
$stuId=$_POST['stuId'];
$complaint=$_POST['complaint'];
$date=date("Y/m/d");
$data=mysqli_query($con,"INSERT INTO `complaint`(`complaint`, `stu_id`, `date`) VALUES ('$complaint','$stuId','$date')");
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