<?php
$con=mysqli_connect("localhost","root","","hosteldb");
$data=mysqli_query($con,"SELECT `roomno`, `type`, `fee`, `stu_id`, `date` FROM `book_room` WHERE status='Approve'");
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