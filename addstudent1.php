<?php 
$con=mysqli_connect("localhost","root","","exam_hall_seat_plan");
session_start();
if (!isset($_SESSION['admin_id'])) {
    echo 'signup first';
    header("Location:AdminLogin.php");
    exit;
}
$s_id=$_POST['s_id'];
$dept_id=$_POST['dept_id'];
$reg_no=$_POST['reg_no'];
$s_name=$_POST['s_name'];
$dept_name=$_POST['dept_name'];
$email=$_POST['email'];
$n_faculty=$_POST['n_faculty'];
$campus=$_POST['campus'];
$password=$_POST['password'];

$sql="INSERT INTO student(s_id, dept_id, reg_no, s_name, dept_name, email, n_faculty, campus, password) VALUES ('$s_id','$dept_id','$reg_no','s_name','$dept_name','$email','$n_faculty','$campus','$password')";

// mysqli_query($con,$sql);

    if (mysqli_query($con,$sql)==true) {
	# code...
   header('location: StudentDetails.php');
    }
    else{
    	    echo "Error: " . $sql1 . "<br>" . $con->error;
    }
?>