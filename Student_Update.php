<?php
include('AdminMain.php');
$con=mysqli_connect("localhost","root","","exam_hall_seat_plan");
session_start();
if (!isset($_SESSION['admin_id'])) {
    echo 'signup first';
    header("Location:AdminLogin.php");
    exit;
}
if($_GET['id']) {
    $id = $_GET['id'];
 
    $sql="SELECT * FROM student
          WHERE s_id = '$id'";
    $result = mysqli_query($con,$sql);
 
    $data  = mysqli_fetch_assoc($result);
 

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Exam Hall Seating Allotment System</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="department_area section_gap">
		<div class="container">
			<center><h1>Add Student Here</h1></center>
			<form action="update_student.php" method="POST">
				 <div class="form-group">
				    <label for="exampleInputtext1">Student ID</label>
				    <input type="number" class="form-control" name="s_id" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Student ID" value="<?php echo $data['s_id'];  ?>" readonly="">
				 </div>
				 <div class="form-group">
				    <label for="exampleInputtext1">Department ID</label>
				    <input type="number" class="form-control" name="dept_id" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Department ID" value="<?php echo $data['dept_id'];  ?>">
				 </div>
				 <div class="form-group">
				    <label for="exampleInputEmail1">Registration NO.</label>
				    <input type="number" class="form-control" name="reg_no" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Registration NO." value="<?php echo $data['reg_no'];  ?>" readonly="">
				 </div>
				 <div class="form-group">
				    <label for="exampleInputEmail1">Student Name</label>
				    <input type="text" class="form-control" name="s_name" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Student Name" value="<?php echo $data['s_name'];  ?>">
				 </div>
				 <div class="form-group">
				    <label for="exampleInputtext1">Department Name</label>
				    <input type="text" class="form-control" name="dept_name" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Department Name" value="<?php echo $data['dept_name'];  ?>">
				 </div>
				 <div class="form-group">
				    <label for="exampleInputEmail1">Email Address</label>
				    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Address" value="<?php echo $data['email'];  ?>" >
				 </div>
				 <div class="form-group">
				 	<label for="exampleInputEmail1">Faculty Name & Initial</label>
						<select class="custom-select" name="n_faculty" value="<?php echo $data['n_faculty'];  ?>">
							<option selected>Open this select menu</option>
							<option value="FSIT">Faculty Of Science & Information Technology(FSIT)</option>
							<option value="FBE">Faculty Of Business & Enterpreneurship(FBE)</option>
							<option value="FE">Faculty Of Engineering(FE)</option>
							<option value="FAHS">Faculty Of Allied Health Science(FAHS)</option>
							<option value="FHSS">Faculty Of Humanities & Social Science(FHSS)</option>
						</select>
				</div>
				 <div class="form-group">
				    <label for="exampleInputEmail1">Campus Name(PC/MC)</label>
						<select class="custom-select" name="campus" value="<?php echo $data['campus'];  ?>">
							<option selected>Open this select menu</option>
							<option value="PC">Permanent Campus(PC)</option>
							<option value="MC">Main Campus(MC)</option>
						</select>
				 </div>
				 <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" value="<?php echo $data['password'];  ?>" readonly="">
				 </div>
				 <button type="submit" class="btn btn-primary">Update Student Account Now</button>
			</form>
		</div>
	</div>
</body>
</html>

<?php
}
?>