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
	<div class="department_area section_gap">
		<div class="container">
			<center><h1>Add Exam Hall Here</h1></center>
			<form action="addexamhall1.php" method="POST">
				 <div class="form-group">
				    <label for="exampleInputtext1">Building Name</label>
				    <input type="text" class="form-control" name="building_name" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Building Name">
				 </div>
				 <div class="form-group">
				    <label for="exampleInputtext1">Hall Name</label>
				    <input type="text" class="form-control" name="hall_name" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Hall Name">
				 </div>
				 <div class="row">
				 	<div class="col">
						<div class="form-group">
						    <label for="exampleInputtext1">1st Block Name</label>
						    <select class="custom-select" name="block_a">
								<option selected>Open this select menu</option>
								<option value="1">Column 1</option>
								<option value="2">Column 2</option>
								<option value="3">Column 3</option>
								<option value="4">Column 4</option>
								<option value="5">Column 5</option>
								<option value="6">Column 6</option>
							</select>
						</div>
					</div>
					<div class="col">
						<div class="form-group">
						    <label for="exampleInputEmail1">Seating Capacity of 1st Block</label>
						    <input type="text" class="form-control" name="capacity_a" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Seating Capacity">
						</div>
					</div>
				</div>
				<div class="row">
				 	<div class="col">
						<div class="form-group">
						    <label for="exampleInputtext1">2nd Block Name</label>
						    <select class="custom-select" name="block_b">
								<option selected>Open this select menu</option>
								<option value="2">Column 2</option>
								<option value="3">Column 3</option>
								<option value="4">Column 4</option>
								<option value="5">Column 5</option>
								<option value="6">Column 6</option>
							</select>
						</div>
					</div>
					<div class="col">
						<div class="form-group">
						    <label for="exampleInputEmail1">Seating Capacity of 2nd Block</label>
						    <input type="text" class="form-control" name="capacity_b" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Seating Capacity">
						</div>
					</div>
				</div>
				<div class="row">
				 	<div class="col">
						<div class="form-group">
						    <label for="exampleInputtext1">3rd Block Name</label>
						    <select class="custom-select" name="block_c">
								<option selected>Open this select menu</option>
								<option value="3">Column 3</option>
								<option value="4">Column 4</option>
								<option value="5">Column 5</option>
								<option value="6">Column 6</option>
							</select>
						</div>
					</div>
					<div class="col">
						<div class="form-group">
						    <label for="exampleInputEmail1">Seating Capacity of 3rd Block</label>
						    <input type="text" class="form-control" name="capacity_c" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Seating Capacity">
						</div>
					</div>
				</div>
				<div class="row">
				 	<div class="col">
						<div class="form-group">
						    <label for="exampleInputtext1">4th Block Name</label>
						    <select class="custom-select" name="block_d">
								<option selected>Open this select menu</option>
								<option value="4">Column 4</option>
								<option value="5">Column 5</option>
								<option value="6">Column 6</option>
							</select>
						</div>
					</div>
					<div class="col">
						<div class="form-group">
						    <label for="exampleInputEmail1">Seating Capacity of 4th Block</label>
						    <input type="text" class="form-control" name="capacity_d" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Seating Capacity">
						</div>
					</div>
				</div>
				<div class="row">
				 	<div class="col">
						<div class="form-group">
						    <label for="exampleInputtext1">5th Block Name</label>
						    <select class="custom-select" name="block_e">
								<option selected>Open this select menu</option>
								<option value="5">Column 5</option>
								<option value="6">Column 6</option>
							</select>
						</div>
					</div>
					<div class="col">
						<div class="form-group">
						    <label for="exampleInputEmail1">Seating Capacity of 5th Block</label>
						    <input type="text" class="form-control" name="capacity_e" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Seating Capacity">
						</div>
					</div>
				</div>
				<div class="row">
				 	<div class="col">
						<div class="form-group">
						    <label for="exampleInputtext1">6th Block Name</label>
						    <select class="custom-select" name="block_f">
								<option selected>Open this select menu</option>
								<option value="6">Column 6</option>
							</select>
						</div>
					</div>
					<div class="col">
						<div class="form-group">
						    <label for="exampleInputEmail1">Seating Capacity of 6th Block</label>
						    <input type="text" class="form-control" name="capacity_f" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Seating Capacity">
						</div>
					</div>
				</div>
						<div class="form-group">
						    <label for="exampleInputEmail1">Total Seating Capacity of The Hall</label>
						    <input type="text" class="form-control" name="total" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Total Seating Capacity Will Be Auto Calculated" readonly="">
						</div>
				 <div class="form-group">
				    <label for="exampleInputEmail1">Campus Name(PC/MC)</label>
						<select class="custom-select" name="campus">
							<option selected>Open this select menu</option>
							<option value="PC">Permanent Campus(PC)</option>
							<option value="MC">Main Campus(MC)</option>
						</select>
				 </div>
				 <button type="submit" class="btn btn-primary">Add Exam Hall Now</button>
			</form>
		</div>
	</div>
</body>
</html>