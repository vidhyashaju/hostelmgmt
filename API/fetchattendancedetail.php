<?php
$con=mysqli_connect("localhost","root","","hosteldb");
$stuid=$_POST['sid'];
$data=mysqli_query($con,"SELECT `stu_id`, `status`, `remark`, `date`, `stu_name` FROM `attendance` WHERE stu_id='$stuid'");
$myarray=array();
if(mysqli_num_rows($data)> 0)
{   
    $row=mysqli_fetch_assoc($data);
    $myarray[]=$row;
     
}
else
{
    $myarray['message']="failed";
}
echo json_encode($myarray);

?>

