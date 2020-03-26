<?php
$con=mysqli_connect("localhost","root","","exam_hall_seat_plan");
session_start();
if (!isset($_SESSION['admin_id'])) {
    echo 'signup first';
    header("Location:AdminLogin.php");
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
            <div class="course_details_left">
            	<div class="content_wrapper">
                    <h1 class="title">My Seat Arrangement Information</h1>
                    <div class="content">
	                    <div class="review-top row pt-40">
	                        <div class="col-lg-12">
	                            <table class="table table-hover">
									<thead>
									    <tr>
									      <th scope="col">Course Name</th>
									      <th scope="col">Section Name</th>
									      <th scope="col">Campus Name</th>
									      <th scope="col">Building Name</th>
									      <th scope="col">Semester</th>
									      <th scope="col">Hall Name</th>
									      <th scope="col">Blocks/Column Name</th>
									      <th scope="col">Total Student</th>
									    </tr>
									 </thead>
									 <tbody>
									    <tr>
									      <td>(SWE-423)Advanced Database With Lab</td>
									      <td>B</td>
									      <td>MC</td>
									      <td>AB</td>
									      <td>FAll 2019</td>
									      <td>502</td>
									      <td>1,3,5</td>
									      <td>18</td>
									    </tr>
									</tbody>
								</table><br><br>
								<hr>
							</div>
						</div>
                	</div>
            	</div>
        	</div>
        </div>
    </section>
</body>
</html>