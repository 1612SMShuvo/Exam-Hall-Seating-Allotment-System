<?php
$con=mysqli_connect("localhost","root","","exam_hall_seat_plan");

	$admin_id=$_POST['admin_id'];
	$password=$_POST['password'];

	$sql="SELECT * FROM admin_acc WHERE admin_id='$admin_id'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
	
		if ($row['admin_id']==$admin_id && $row['password']==$password) {
			# code...
			if($admin_id){
	        session_start();
	        $_SESSION['admin_id'] = $row['admin_id'];
	        echo 'Logged in';
			header('location:Admin.php');
			}
		}
		else{
			echo "Error.....!!!";
		}
	
?>