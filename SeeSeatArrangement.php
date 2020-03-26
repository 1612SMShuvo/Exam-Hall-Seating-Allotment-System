<?php
$con=mysqli_connect("localhost","root","","exam_hall_seat_plan");
session_start();
if (!isset($_SESSION['reg_no'])) {
    echo 'signup first';
    header("Location:StudentLogin.php");
    exit;
}
include('StudentMain.php');
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
        	<form action="SearchSeatArrangement.php" method="POST">
				    <div class="form-group">
				    	<label>Course Name</label>
				    	<input type="text" class="form-control" name="course" placeholder="Course Name" required="">
				    </div>
				    <div class="form-group">
				    	<label>Section Name</label>
				    	<input type="text" class="form-control" name="sec" placeholder="Section Name" required="">
				    </div>
			  	<br><br>
 			  	<button type="submit" class="btn btn-primary">Search Now</button>
			</form>
			<a href="SearchResult.php">
			</a>
		</div>
	</section>
</body>
</html>