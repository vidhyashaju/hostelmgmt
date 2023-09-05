<?php
$con=mysqli_connect("localhost","root","","hosteldb");
$data=mysqli_query($con,"SELECT `day`,`breakfast`,`lunch`,`dinner` FROM `mealsadd`");
if(mysqli_num_rows($data)>0){
$myarray=array();
   while($row=mysqli_fetch_assoc($data)){
   $myarray[]=$row;
  // $myarray['message']="success";
   }
}
echo json_encode($myarray);
?>

