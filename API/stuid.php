<?php
$con=mysqli_connect("localhost","root","","hosteldb");
$data=mysqli_query($con,"SELECT `stu_id`, `stu_name` FROM `student`");
$studentName=array();
if (mysqli_num_rows($data) > 0) {
    while ($row =mysqli_fetch_assoc($data)) {
        $studentName[] = $row;
    }
    echo json_encode($studentName);
}
?>