<?php
$con=mysqli_connect("localhost","root","","hosteldb");
$username=$_POST['stu_name'];
$pwd=$_POST['pwd'];
$email=$_POST['stu_email'];
$course=$_POST['course'];
$radio1=$_POST['gender'];
$dob=$_POST['dob'];
$pic=$_FILES['image']['name'];
    if($pic!="")
    {
        $filearray=pathinfo($_FILES['image']['name']);
        $file1=rand();
        $file_ext=$filearray["extension"];
        $filenew=$file1 .".".$file_ext;
        move_uploaded_file($_FILES['image']['tmp_name'],"../image/".$filenew);
    }
 
if($radio1=='male')
{
    $val='male';
}
else if($radio1=='female')
{
    $val='female';
}
$data=mysqli_query($con,"INSERT INTO `student`(`stu_name`, `stu_email`, `course`, `gender`, `dob`,`photo`,`status`) VALUES ('$username','$email','$course','$val','$dob','$filenew','pending')");
$reg_id=mysqli_insert_id($con);
$data=mysqli_query($con,"INSERT INTO `login`(`username`, `pwd`, `type`,`reg_id`) VALUES ('$username','$pwd','student','$reg_id')");
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