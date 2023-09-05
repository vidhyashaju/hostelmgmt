<?php
$con=mysqli_connect("localhost","root","","hosteldb");
$data=mysqli_query($con,"SELECT * FROM `hostel_details`");
$list=array();
if(mysqli_num_rows($data)>0){

    $row=mysqli_fetch_assoc($data);
    $myarray['hostelname']=$row['hostel_name'];
    $myarray['address']=$row['address'];
    $myarray['phone']=$row['phone'];
    $myarray['email']=$row['email'];
    $myarray['wardenname']=$row['wname'];
    $myarray['wardenphone']=$row['wphone'];
    $myarray['emergencyno']=$row['em_phone'];
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