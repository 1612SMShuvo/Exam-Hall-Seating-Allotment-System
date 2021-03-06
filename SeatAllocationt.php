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
        	<form action="SeatAllocationt.php" method="POST">
				<div class="row">
				    <div class="col">
				    	<label>Hall Name</label>
				    	<input type="text" class="form-control" name="hall_name" placeholder="Enter Hall Name" required="">
				    	<button type="submit" class="btn btn-primary" name="submit1">Search Now</button>
				    </div>
				</div>
			  	<br><br>
			</form>
            <div class="course_details_left">
            	<div class="content_wrapper">
            		<center>
                    <h1 class="title">Seat Allocation Information</h1>
                    </center>
                    <div class="content">
	                    <div class="review-top row pt-40">
	                        <div class="col-lg-12">
	                            <table class="table table-hover">
									<thead style="color: green;">
									    <tr>
									      <th scope="col">Course Name</th>
									      <th scope="col">Section Name</th>
									      <th scope="col">Campus Name</th>
									      <th scope="col">Hall Name</th>
									      <th scope="col">Building Name</th>
									      <th scope="col">Even Block</th>
									      <th scope="col">Total Seat For Even Block</th>
									      <th scope="col">Odd Block</th>
									      <th scope="col">Total Seat For Odd Block</th>
									      <th scope="col">Total Seat</th>
									      <th scope="col">Exam Date</th>
									      <th scope="col">Examiners Name</th>
									      <th scope="col">Option</th>
									    </tr>
									 </thead>
									 <tbody>
									 	<?php
			                            if(isset($_POST["submit1"])){
			                            	$hall_name=$_POST['hall_name'];
				                            $sql="SELECT * FROM seat_plan 
				                            WHERE hall_name='$hall_name'";
			                            }
			                            else{
				                            $sql="SELECT * FROM seat_plan";
			                            }
			                           
										$result = mysqli_query($con,$sql);
			        					while($row = mysqli_fetch_array($result)){
			                              # code...}
			                              // var_dump();
			                              echo "
			                              <tr>
			                              <td>".$row['course']."</td>
			                              <td>".$row['sec']."</td>
			                              <td>".$row['campus']."</td>
			                              <td>".$row['hall_name']."</td>
			                              <td>".$row['building']."</td>
			                              <td>".$row['evenblock']."</td>
			                              <td>".$row['t_seat_ev']."</td>
			                              <td>".$row['oddblock']."</td>
			                              <td>".$row['t_seat_od']."</td>
			                              <td>".$row['total']."</td>
			                              <td>".$row['exmdate']."</td>
			                              <td>".$row['examiner']."</td>
			                              <td><a href='UpdateSeatArrangement.php?id=".$row['id']."'><button class='btn btn-success'>Update Now</button></a></td> 
			                              <td>
			                              </tr>
			                              ";
			                            }
										?>
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