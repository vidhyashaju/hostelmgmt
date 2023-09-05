<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$con=mysqli_connect("localhost","root","","hosteldb");
$username=$_POST['username'];
$data=mysqli_query($con,"SELECT `stu_id`FROM `parent` WHERE name='$username'");
if(mysqli_num_rows($data)>0){
   $row=mysqli_fetch_assoc($data);
   $myarray['stuid']=$row['stu_id'];
   $myarray['message']="success";
}
else{
   $myarray['messge']="failed";
}
echo json_encode($myarray);


/*$data=mysqli_query($con,"SELECT `stu_name` FROM `student` WHERE stu_id='$stuid'");
if(mysqli_num_rows($data)>0){
   $row=mysqli_fetch_assoc($data);
   
   $myarray=$row;
}*/
/*$data=mysqli_query($con,"SELECT `status`, `remark`, `date` FROM `attendance` WHERE stu_id='$stuid'");
if(mysqli_num_rows($data)>0){
$myarray=array();
   while($row=mysqli_fetch_assoc($data)){
   $myarray[]=$row;
  // $myarray['message']="success";
   }
}*/}
?>
