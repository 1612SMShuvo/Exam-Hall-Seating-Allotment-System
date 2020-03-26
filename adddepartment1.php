<?php 
$con=mysqli_connect("localhost","root","","exam_hall_seat_plan");
session_start();
if (!isset($_SESSION['admin_id'])) {
    echo 'signup first';
    header("Location:AdminLogin.php");
    exit;
}

$dept_id=$_POST['dept_id'];
$dept_name=$_POST['dept_name'];
$n_faculty=$_POST['n_faculty'];

$sql="INSERT INTO departments(dept_id, dept_name, n_faculty) VALUES ('$dept_id','$dept_name','$n_faculty')";

    if (mysqli_query($con,$sql)==true) {
	# code...
   header('location: AddDepartment.php');
    }
    else{
    	    echo "Error: " . $sql . "<br>" . $con->error;
    }
?>