<?php
include('AdminMain.php');

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

// $id = $_POST['id'];
 
    $sql = "UPDATE student SET s_id = '$s_id', dept_id = '$dept_id', reg_no = '$reg_no', s_name = '$s_name', dept_name = '$dept_name', email = '$email', n_faculty = '$n_faculty', campus = '$campus' WHERE s_id = '$s_id'";

$query=mysqli_query($con,$sql);

    if ($query==TRUE) {
	// # code...
    	echo "Updtaed............!!!"."<br><a href='StudentDetails.php'><button class=' btn-group btn-warning'> Go Back Now </button></a>";
    }
    else{
    	    echo "Error: " . $sql1 . "<br>" . $con->error;
    }

?>