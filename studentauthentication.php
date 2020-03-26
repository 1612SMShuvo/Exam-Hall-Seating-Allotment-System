<?php
$con=mysqli_connect("localhost","root","","exam_hall_seat_plan");

	$reg_no=$_POST['reg_no'];
	$password=$_POST['password'];

	$sql="SELECT * FROM student WHERE reg_no='$reg_no'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
		if ($row['reg_no']==$reg_no && $row['password']==$password) {
			code...
			if($reg_no){
	        session_start();
	        $_SESSION['reg_no'] = '$reg_no';
	        echo 'Logged in';
			header('location:StudentMain.php');
		}
		else{
			echo "Invalid Registration Number Or Password.....!!!";
		}
	

?>