<?php
include('AdminMain.php');
$con=mysqli_connect("localhost","root","","exam_hall_seat_plan");

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
                  <label>Search By Student ID:</label>
                  <input class="form-control mr-sm-2" type="text" name="s_id" placeholder="Search By Student ID" aria-label="Search" >
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
								<th scope="col">Student ID</th>
								<th scope="col">Department No.</th>
								<th scope="col">Registration No.</th>
								<th scope="col">Student Name</th>
								<th scope="col">Department Name</th>
								<th scope="col">Email Address</th>
								<th scope="col">Faculty Name</th>
								<th scope="col">Campus Name</th>
								<th scope="col">Option</th>
							</tr>
						</thead>
						<tbody>
							<?php
                            if(isset($_POST["submit1"])){
                            	$s_id=$_POST['s_id'];
	                            $sql="SELECT * FROM student 
	                            WHERE s_id='$s_id'";
                            }
                            
	                            $sql="SELECT * FROM student";
                            // $sql="SELECT order_info.id as OID,order_info.*, knitting_info.*,dyeing_info.*,cutting_info.*,inspection.*,packing_info.*,printing_info.*,sewing_info.*,trims_plan.*  FROM order_info
                            // left outer JOIN knitting_info ON order_info.id = knitting_info.order_id 
                            // left outer JOIN dyeing_info ON order_info.id = dyeing_info.order_id 
                            // left outer JOIN cutting_info ON order_info.id = cutting_info.order_id  
                            // left outer JOIN inspection  ON order_info.id = inspection.order_id  
                            // left outer JOIN packing_info  ON order_info.id = packing_info.order_id 
                            // left outer JOIN printing_info ON order_info.id = printing_info.order_id 
                            // left outer JOIN sewing_info ON order_info.id = sewing_info.order_id 
                            // left outer JOIN trims_plan ON order_info.id = trims_plan.order_id ";
                              //var_dump($sql);
                           
							$result = mysqli_query($con,$sql);
        					while($row = mysqli_fetch_array($result)){
                              # code...}
                              // var_dump();
                              echo "
                              <tr>
                              <td>".$row['s_id']."</td>
                              <td>".$row['dept_id']."</td>
                              <td>".$row['reg_no']."</td>
                              <td>".$row['s_name']."</td>
                              <td>".$row['dept_name']."</td>
                              <td>".$row['email']."</td>
                              <td>".$row['n_faculty']."</td>
                              <td>".$row['campus']."</td>
                              <td><a href='Student_Update.php?id=".$row['s_id']."'><button class='btn btn-success'>Update Now</button></a></td> 
                              <td>
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