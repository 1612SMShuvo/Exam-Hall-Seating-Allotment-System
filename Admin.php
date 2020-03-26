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

                <div class="course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="img/courses/course-details.jpg" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h1 class="title">Department Information</h1>
                        <div class="content">
                            <ul class="course_list">
                                <li class="justify-content-between d-flex">
                                    <p>Faculty Of Science & Information Technology(FSIT)</p><br>
                                    <a class="primary-btn text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between d-flex">
                                    <p>Faculty Of Business & Enterpreneurship(FBE)</p>
                                    <a class="primary-btn text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between d-flex">
                                    <p>Faculty Of Engineering(FE)</p>
                                    <a class="primary-btn text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between d-flex">
                                    <p>Faculty Of Allied Health Science(FAHS)</p>
                                    <a class="primary-btn text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between d-flex">
                                    <p>Faculty Of Humanities & Social Science(FHSS)</p>
                                    <a class="primary-btn text-uppercase" href="#">View Details</a>
                                </li>
                            </ul>
                        </div>


                <div>
                    <div class="content">
                        <div class="review-top row pt-40">
                            <div class="col-lg-12">
                				<h1 class="title">Department Wise Details</h1>
                                <table class="table table-hover">
								  <thead>
								    <tr>
								      <th scope="col">Department ID</th>
								      <th scope="col">Department Name</th>
								      <th scope="col">Faculty Initial</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <?php
								      $sql="SELECT * FROM departments";
                              //var_dump($sql);
			                           
										$result = mysqli_query($con,$sql);
			        					while($row = mysqli_fetch_array($result)){
			                              # code...}
			                              // var_dump();
			                              echo "
			                              <tr>
			                              <td>".$row['dept_id']."</td>
			                              <td>".$row['dept_name']."</td>
			                              <td>".$row['n_faculty']."</td>
			                              </tr>
			                              ";
			                            }
								      ?>
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
        </div>
    </section>
</body>
</html>