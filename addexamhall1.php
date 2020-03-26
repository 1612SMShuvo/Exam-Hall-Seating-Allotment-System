<?php 
$con=mysqli_connect("localhost","root","","exam_hall_seat_plan");
session_start();
if (!isset($_SESSION['admin_id'])) {
    echo 'signup first';
    header("Location:AdminLogin.php");
    exit;
}
$building_name=$_POST['building_name'];
$hall_name=$_POST['hall_name'];
$block_a=$_POST['block_a'];
$capacity_a=$_POST['capacity_a'];
$block_b=$_POST['block_b'];
$capacity_b=$_POST['capacity_b'];
$block_c=$_POST['block_c'];
$capacity_c=$_POST['capacity_c'];
$block_d=$_POST['block_d'];
$capacity_d=$_POST['capacity_d'];
$block_e=$_POST['block_e'];
$capacity_e=$_POST['capacity_e'];
$block_f=$_POST['block_f'];
$capacity_f=$_POST['capacity_f'];
$total=$capacity_a+$capacity_b+$capacity_c+$capacity_d+$capacity_e+$capacity_f;
$campus=$_POST['campus'];

$sql="INSERT INTO exm_hall(building_name, hall_name, 1block, 1capacity, 2block, 2capacity, 3block, 3capacity, 4block, 4capacity, 5block, 5capacity, 6block, 6capacity, total, campus) VALUES ('$building_name','$hall_name','$block_a','$capacity_a','$block_b','$capacity_b','$block_c','$capacity_c','$block_d','$capacity_d','$block_e','$capacity_e','$block_f','$capacity_f','$total','$campus')";

// mysqli_query($con,$sql);

    if (mysqli_query($con,$sql)==true) {
	# code...
   header('location: ExamHallDetails.php');
    }
    else{
    	    echo "Error: " . $sql . "<br>" . $con->error;
    }
?>