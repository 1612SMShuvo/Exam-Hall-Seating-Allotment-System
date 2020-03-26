<?php
$con=mysqli_connect("localhost","root","","exam_hall_seat_plan");
session_start();
if (!isset($_SESSION['admin_id'])) {
    echo 'signup first';
    header("Location:AdminLogin.php");
    exit;
}
include('AdminMain.php');
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
					<center><h1>Add Seat Arrangemnt Here</h1></center>
					<form action="AddSeatArrangement.php" method="POST">
						 <div class="form-group">
						    <label for="exampleInputEmail1">Course Name</label>
						    <input type="text" class="form-control" name="course" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Course Name">
						 </div>
						 <div class="form-group">
						    <label for="exampleInputtext1">Section Name</label>
							    <select class="custom-select" name="sec">
									<option selected>Open this select menu</option>
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="E">E</option>
									<option value="F">F</option>
								</select>
						 </div>
						 <div class="form-group">
						    <label for="exampleInputEmail1">Campus Name(PC/MC)</label>
								<select class="custom-select" name="campus">
									<option selected>Open this select menu</option>
									<option value="PC">Permanent Campus(PC)</option>
									<option value="MC">Main Campus(MC)</option>
								</select>
						 </div>
						 <div class="form-group">
						    <label for="exampleInputtext1">Hall Id</label>
						    <input type="number" class="form-control" name="hall_id" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Hall ID">
						 </div>
						 
						 <div class="form-group">
						    <label for="exampleInputtext1">Hall Name</label>
						    <input type="text" class="form-control" name="hall_name" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Hall ID">
						 </div>
						 <div class="form-group">
						    <label for="exampleInputtext1">Bulding Name</label>
						    <input type="text" class="form-control" name="building" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Bulding ID">
						 </div>
				 <div class="row">
				 	<div class="col">
						<div class="form-group">
						    <label for="exampleInputtext1">Even Blocks Name</label>
						    <select class="custom-select" name="evenblock">
								<option selected value="0">Open this select menu</option>
								<option value="2">Column 2</option>
								<option value="4">Column 4</option>
								<option value="6">Column 6</option>
								<option value="2,4,6">Column 2,4,6</option>
							</select>
						</div>
					</div>
					<div class="col">
						<div class="form-group">
						    <label for="exampleInputEmail1">Seating Plan of Even Block</label>
						    <input type="text" class="form-control" name="t_seat_ev" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Seating Capacity">
						</div>
					</div>
				</div>
				<div class="row">
				 	<div class="col">
						<div class="form-group">
						    <label for="exampleInputtext1">Odd Block Name</label>
						    <select class="custom-select" name="oddblock">
								<option selected value="0">Open this select menu</option>
								<option value="1">Column 1</option>
								<option value="3">Column 3</option>
								<option value="5">Column 5</option>
								<option value="1,3,5">Column 1,3,5</option>
							</select>
						</div>
					</div>
					<div class="col">
						<div class="form-group">
						    <label for="exampleInputEmail1">Seating Plan of Odd Block</label>
						    <input type="text" class="form-control" name="t_seat_od" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Seating Capacity">
						</div>
					</div>
				</div>
						 <div class="form-group">
						    <label for="exampleInputEmail1">Total Seating Capacity</label>
						    <input type="text" class="form-control" name="total" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Seating Capacity" readonly="">
						 </div>
						 <div class="form-group">
						    <label for="exampleInputEmail1">Exam Date</label>
						    <input type="Date" class="form-control" name="exmdate" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Exam Date">
						 </div>
						 <div class="form-group">
						    <label for="exampleInputEmail1">Examiners name</label>
						    <input type="text" class="form-control" name="examiner" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Examiners name">
						 </div>
						 <button type="submit" class="btn btn-primary">Add Now</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>