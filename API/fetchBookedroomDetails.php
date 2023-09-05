<?php
$con=mysqli_connect("localhost","root","","hosteldb");
$stuid=$_POST['stuId'];
$res=mysqli_query($con,"SELECT stu_name FROM `student` WHERE stu_id='$stuid'");
if(mysqli_num_rows($res)){
    $row=mysqli_fetch_assoc($res);
    $myarray['stuname']=$row['stu_name'];
}
$data=mysqli_query($con,"SELECT * FROM `book_room` WHERE stu_id='$stuid'");
$list=array();
if(mysqli_num_rows($data)>0){

    $row=mysqli_fetch_assoc($data);
    $myarray['roomno']=$row['roomno'];
    $myarray['type']=$row['type'];
    $myarray['rent']=$row['fee'];
    $myarray['date']=$row['date'];
    $myarray['message']='success';
    array_push($list,$myarray);
}
else
{
    $myarray['message']='failed'; 
    array_push($list,$myarray);  
}
echo json_encode($list);
?>