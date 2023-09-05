<?php
$con=mysqli_connect("localhost","root","","hosteldb");
$stuid=$_POST['stuId'];
$data=mysqli_query($con,"SELECT * FROM `notification` WHERE stu_id='$stuid'");
$list=array();
if(mysqli_num_rows($data)>0){

   while( $row=mysqli_fetch_assoc($data)){
    $myarray['notification']=$row['notification'];
    $myarray['date']=$row['date'];
    array_push($list,$myarray);
}
}
else
{
    $myarray['message']='failed'; 
    array_push($list,$myarray);  
}
echo json_encode($list);

?>
