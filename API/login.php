<?php
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$con=mysqli_connect("localhost","root","","hosteldb");
$data=mysqli_query($con,"SELECT login.username,login.pwd,login.type,parent.status,student.status,login.reg_id FROM `login`INNER JOIN student ON login.reg_id= student.stu_id 
INNER JOIN parent ON login.reg_id=parent.parent_id WHERE student.status='approve'AND parent.status='approve' AND username='$username' AND pwd='$pwd'");
$user=array();
if (mysqli_num_rows($data) > 0) {
   // $data1=mysqli_query($con,"SELECT `stu_id` FROM `student` WHERE stu_name='$username'");
    $row =mysqli_fetch_assoc($data) ;
   // $row1=mysqli_fetch_assoc($data1);
   // $myarray['stu_id']=$row1['stu_id'];
    $myarray['type']= $row['type'];
    $myarray['username']=$row['username'];
    $myarray['stu_id']=$row['reg_id'];
    $myarray['message']= "success";
       // $user=$row;
       // $status=$row['status']
}  

else{
    $myarray['message']= "failed";
    
}
echo json_encode($myarray);




?>
 