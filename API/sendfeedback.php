<?php
$con=mysqli_connect("localhost","root","","hosteldb");
$stuId=$_POST['stuId'];
$feedback=$_POST['feedback'];
$date=date("Y/m/d");
$data=mysqli_query($con,"INSERT INTO `feedback`(`feedback`, `stu_id`, `date`) VALUES ('$feedback','$stuId','$date')");
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