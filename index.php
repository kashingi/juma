<I DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	    <meta name="author" content="Kashingi Web disigner">
	    <title>Class Practicals</title>

        <!-- Bootstrap CSS File -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1•O/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFph3iwGPXrljddIh0egiulFw05qRGvFX0dJZ4" crossorigin="anonymous">
		<!--Main CSS link -->
		<link rel="stylesheet" href="main.css">
		<!--Jquery Link-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
			
		<script>
			$(document).ready(function(){
				$(".card-title").click(function(){
    				$(".card-text").slideToggle("slow");
 				}); 
				 $("button").click(function(){
    				$("h6").slideToggle();
 				}); 
			});
		</script>
    </head>
    <body>
        <div class="container" style="margin-top:30px">
            <!-- Header Section -->
            <header class="jumbotron text-center row" style="margin-bottom:2px; background:linear-gradient(white, #0073e6); padding:20px;">
                <div class="col-sm-2">
					<img class="img-fluid float-left" src="bootstrap/image/logo.png" alt="logo">
		        </div>
		        <div class="col-sm-8">
			        <h1 class="font-bold">Welcome to the world of designers</h1>
					<div>
            		<ul class="nav nav-tabs bg-info">
                		<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                		<li class="nav-item" style="margin-left: 30px;">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                		<li class="nav-item" style="margin-left: 30px;">
                            <a class="nav-link" href="course.php">Courses</a>
                        </li>
                		<li class="nav-item dropdown" style="margin-left: 30px;">
							<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="testimonial.php">Testimonials</a></li>
								<li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
								<li><a class="dropdown-item" href="Alumni.php">Alumni</a></li>
							</ul>
                		</li>
						<li class="nav-item" style="margin-left: 30px;">
                            <a class="nav-link" href="admin/login.php">Admin</a>
                        </li>
            		</ul>
        		</div>
		    </div>
            </header>
            <!-- Body Section -->
            <div class="row" style="padding-left: Opx;">
                <!-- Left-side Column Menu Section -->
                <nav class="col-sm-2">
                    <ul class="nav nav-pills flex-column">
                        <?php 
                        include 'includes/navi.php'; 
                        ?>
                    </ul>
                </nav>
                <!-- Center Column Content Section -->
                <div class="col-sm-8 text-center">
                    <h2>Welcome to ST Morris' Mobile Training Instute</h2>
                    <p>We aim at equiping young people acrros Africa with the right skills in the field of IT. We welcome you to come and enjoy coding with us.</p>
                    <!-- login does not yet work, nut will in the next chapter -->
					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
						</div>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="card-group">
									<div class="card">
										<img src="bootstrap/image/code0.jpg" class="card-img-top" alt="image">
										<div class="card-body">
											<h5 class="card-title">Introduction to coding</h5>
											<p class="card-text">You will be introduced to the best programming methods and languages to enable you acquire the best skills.</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated<?php echo date("  d.m.Y. h:i:s "); ?> </small>
										</div>
									</div>
									<div class="card">
										<img src="bootstrap/image/code.jpg" class="card-img-top" alt="image">
										<div class="card-body">
											<h5 class="card-title">Learn programming</h5>
											<p class="card-text intro">You will be taught the best programming methods and languages to enable you acquire the best skills</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("  d.m.Y.  h:i:s "); ?></small>
										</div>
									</div>
									<div class="card">
										<img src="bootstrap/image/co1.jpg" class="card-img-top" alt="image">
										<!--<img src="bootstrap/image/comp1.jpg" class="card-img-top" alt="image">-->
										<div class="card-body">
											<h5 class="card-title">Maximum Teaching</h5>
											<p class="card-text intro">We have well experienced lecturers who give maximum teaching and give the besk skills.</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("  d.m.Y.  h:i:s "); ?></small>
										</div>
									</div>
								</div> 
							</div>
							<div class="carousel-item">
							<div class="card-group">
									<div class="card">
										<img src="bootstrap/image/comp1.jpg" class="card-img-top" alt="image">
										<div class="card-body">
											<h5 class="card-title">Maximum Supervision</h5>
											<p class="card-text intro">Students are put into groups and asigned their supervisor who ensures all the group members understand the class work and are able to the daily and weekly assignments.</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("  d.m.Y.  h:i:s "); ?></small>
										</div>
									</div>
									<div class="card">
										<img src="bootstrap/image/comp2.jpg" class="card-img-top" alt="image">
										<div class="card-body">
											<h5 class="card-title">Series Presentations</h5>
											<p class="card-text intro">Students have weekly group projects which are presented at the end of the week, monthly group projects to be presented end month and termly projects at end term.</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("  d.m.Y.  h:i:s "); ?></small>
										</div>
									</div>
									<div class="card">
										<img src="bootstrap/image/comp3.jpg" class="card-img-top" alt="image">
										<div class="card-body">
											<h5 class="card-title">Series Emaminations</h5>
											<p class="card-text intro">The school has three exams per term.Opening exam at the end of the first month and mid-term exam end of the second month and end of term exams at the end of the term.</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("  d.m.Y.  h:i:s "); ?></small>
										</div>
									</div>
								</div> 
							</div>
							<div class="carousel-item">
							<div class="card-group">
									<div class="card">
										<img src="bootstrap/image/code1.jpg" class="card-img-top" alt="image">
										<div class="card-body">
											<h5 class="card-title intro">Internal attachment</h5>
											<p class="card-text">We give internal attachment to all students after the exams to enable them practice what they have learnt in class and relate to real life application skills.</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("  d.m.Y.  h:i:s "); ?></small>
										</div>
									</div>
									<div class="card">
										<img src="bootstrap/image/co2.jpg" class="card-img-top" alt="image">
										<div class="card-body">
											<h5 class="card-title">External attachment</h5>
											<p class="card-text intro">We give top performing students paid internship at our organization for a period of six months then have an option to extend the period.</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("  d.m.Y.  h:i:s "); ?></small>
										</div>
									</div>
									<div class="card">
										<img src="bootstrap/image/com.jpg" class="card-img-top" alt="image">

										<div class="card-body">
											<h5 class="card-title">Improve your skills</h5>
											<p class="card-text intro">Take your skills to the next level and build something awesome and present them to the real world as a proof of acquired skills.</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("  d.m.Y.  h:i:s "); ?></small>
										</div>
									</div>
								</div> 
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
						</div>
					
                </div>
                <!-- Right-side Column Content Section -->
                <aside class="col-sm-2">
                    <?php 
                    include 'includes/col.php'; 
                    ?>
					<div>
						<button style="color: black; background:none; border:none">Hi Admin</button>
						<h6><a href="admin/login.php">Login</a></h6>
					</div>
                </aside>
            </div>
            <!-- Footer Content Section -->
            <footer class="jumbotron text-center row" style="padding-bottom:lpx; padding-top:8px;">
                <?php 
                include 'includes/footer.php'; 
                ?>
            </footer>
        </div>
		<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.js">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
