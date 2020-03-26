<?php
include('AdminMain.php');
$con=mysqli_connect("localhost","root","","exam_hall_seat_plan");
session_start();
if (!isset($_SESSION['admin_id'])) {
    echo 'signup first';
    header("Location:AdminLogin.php");
    exit;
}
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

    <section class="course_details_area section_gap">
        <div class="container">
        	<div class="department_area section_gap">
				<div class="container">
					<center><h1>Add Department Here</h1></center>
					<form action="adddepartment1.php" method="POST">
						 <div class="form-group">
						    <label for="exampleInputEmail1">Department ID</label>
						    <input type="number" class="form-control" name="dept_id" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Department ID">
						 </div>
						 <div class="form-group">
						    <label for="exampleInputEmail1">Department Name</label>
						    <input type="text" class="form-control" name="dept_name" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Department Name">
						 </div>
						 <div class="form-group">
						    <label for="exampleInputEmail1">Faculty Name & Initial</label>
						    <select class="custom-select" name="n_faculty">
							  <option selected>Open this select menu</option>
							  <option value="FSIT">Faculty Of Science & Information Technology(FSIT)</option>
							  <option value="FBE">Faculty Of Business & Enterpreneurship(FBE)</option>
							  <option value="FE">Faculty Of Engineering(FE)</option>
							  <option value="FAHS">Faculty Of Allied Health Science(FAHS)</option>
							  <option value="FHSS">Faculty Of Humanities & Social Science(FHSS)</option>
							</select>
						 </div>
						 <button type="submit" class="btn btn-primary">Add Now</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>