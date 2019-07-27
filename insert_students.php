<?php
include "conn.php";
$name = $_POST['ssssssname'];
$email = $_POST['email'];
$address = $_POST['address'];
$branch = $_POST['branch'];
$query = "INSERT INTO `students`(`student_name`, `student_email`, `student_address`, `student_branch`) values('$name', '$email', '$address','$branch')";
$result = mysqli_query($con, $query);

if($result){
	echo "Successfully inserted";
}
else{
	echo "Failed to insert";
}
?>