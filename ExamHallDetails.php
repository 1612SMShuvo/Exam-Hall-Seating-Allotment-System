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
        <div class="content">
        	<div>
              <nav class="navbar navbar-light bg-light">
                <form class="form-inline" action="" method="POST">
                  <label>Search By Exam Hall by Hall Name:</label>
                  <input class="form-control mr-sm-2" type="text" name="hall_name" placeholder="Search By Student ID" aria-label="Search" >
                  <input type="submit" class="btn btn-outline-success " type="submit" name="submit1" value="Search"/>
                </form>
              </nav>
            </div>
            <div class="review-top row pt-40">
                <div class="col-lg-12">
                	<h1 class="title">Student Details</h1>
                    <table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">Exam Hall Id/th>
								<th scope="col">Bulding Name</th>
								<th scope="col">Hall Name</th>
								<th scope="col">1st Block</th>
								<th scope="col">1st Block Capacity</th>
								<th scope="col">2nd Block</th>
								<th scope="col">2nd Block Capacity</th>
								<th scope="col">3rd Block</th>
								<th scope="col">3rd Block Capacity</th>
								<th scope="col">4th Block</th>
								<th scope="col">4th Block Capacity</th>
								<th scope="col">5th Block</th>
								<th scope="col">5th Block Capacity</th>
								<th scope="col">6th Block</th>
								<th scope="col">6th Block Capacity</th>
								<th scope="col">Total</th>
								<th scope="col">Campus Name</th>
							</tr>
						</thead>
						<tbody>
							<?php
                            if(isset($_POST["submit1"])){
                            	$hall_name=$_POST['hall_name'];
	                            $sql="SELECT * FROM exm_hall 
	                            WHERE hall_name='$hall_name'";
                            }
                            
	                            $sql="SELECT * FROM exm_hall";
                           
							$result = mysqli_query($con,$sql);
        					while($row = mysqli_fetch_array($result)){
                              # code...}
                              // var_dump();
                              echo "
                              <tr>
                              <td>".$row['hall_id']."</td>
                              <td>".$row['building_name']."</td>
                              <td>".$row['hall_name']."</td>
                              <td>".$row['1block']."</td>
                              <td>".$row['1capacity']."</td>
                              
                              <td>".$row['2block']."</td>
                              <td>".$row['2capacity']."</td>
                              <td>".$row['3block']."</td>
                              <td>".$row['3capacity']."</td>
                              <td>".$row['4block']."</td>
                              <td>".$row['4capacity']."</td>
                              <td>".$row['5block']."</td>
                              <td>".$row['5capacity']."</td>
                              <td>".$row['6block']."</td>
                              <td>".$row['6capacity']."</td>
                              <td>".$row['total']."</td>
                              <td>".$row['campus']."</td>
                              </tr>
                              ";
                            }
							?>
						</tbody>
					</table>
					<br><br>
					<hr>
				</div>
			</div>
		</div>
     </div>
    </section>
</body>
</html>