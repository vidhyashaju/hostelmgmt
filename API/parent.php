<?php
$con=mysqli_connect("localhost","root","","hosteldb");
$name=$_POST['stu_name'];
$res=mysqli_query($con,"SELECT `stu_id` FROM `student` WHERE stu_name='$name'");
if(mysqli_num_rows($res)>0){
    $row=mysqli_fetch_assoc($res);
    $studentId=$row['stu_id'];
}
$username=$_POST['name'];
$pwd=$_POST['pwd'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$data=mysqli_query($con,"INSERT INTO `parent`(`stu_id`, `name`, `address`, `phone`, `status`) VALUES ('$studentId','$username','$address','$phone','pending')");
$reg_id=mysqli_insert_id($con);
$data=mysqli_query($con,"INSERT INTO `login`(`username`, `pwd`, `type`,`reg_id`) VALUES ('$username','$pwd','parent','$reg_id')");
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