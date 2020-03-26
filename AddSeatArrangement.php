<?php 
$con=mysqli_connect("localhost","root","","exam_hall_seat_plan");
session_start();
if (!isset($_SESSION['admin_id'])) {
    echo 'signup first';
    header("Location:AdminLogin.php");
    exit;
}

$course=$_POST['course'];
$sec=$_POST['sec'];
$campus=$_POST['campus'];
$hall_id=$_POST['hall_id'];
$hall_name=$_POST['hall_name'];
$building=$_POST['building'];
$evenblock=$_POST['evenblock'];
$t_seat_ev=$_POST['t_seat_ev'];
$oddblock=$_POST['oddblock'];
$t_seat_od=$_POST['t_seat_od'];
$total=$t_seat_od + $t_seat_ev;
$exmdate=$_POST['exmdate'];
$examiner=$_POST['examiner'];

$sql="INSERT INTO seat_plan(course, sec, campus, hall_id, hall_name, building, evenblock, t_seat_ev, oddblock, t_seat_od, total, exmdate, examiner) VALUES ('$course', '$sec', '$campus', '$hall_id', '$hall_name', '$building', '$evenblock', '$t_seat_ev', '$oddblock', '$t_seat_od', '$total', '$exmdate', '$examiner')";

// mysqli_query($con,$sql);

    if (mysqli_query($con,$sql)==true) {
	# code...
   header('location: SeatAllocationt.php');
    }
    else{
    	    echo "Error: " . $sql1 . "<br>" . $con->error;
    }
?>