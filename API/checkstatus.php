<?php
$con=mysqli_connect("localhost","root","","hosteldb");
$roomno=$_POST['roomNo'];
$data=mysqli_query($con,"SELECT `status` FROM `book_room` WHERE roomno='$roomno'");
if(mysqli_num_rows($data)> 0)
{   
    $row=mysqli_fetch_assoc($data);
    $myarray['message']="success";
    $myarray['status']=$row['status'];
}
else
{
    $myarray['message']="failed";
}
echo json_encode($myarray);

?>