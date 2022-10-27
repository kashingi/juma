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
                        <h5><i><b> School Motto</b></i></h5>
						Code, train, code, do some practices and keep coding again and again to keep your knowledge and skills alive on daily basis. 
                    </ul>
                </nav>
                <!-- Center Column Content Section -->
                <div class="col-sm-8 text-center">
                    <h2>Welcome to our Alumnis Page</h2>
                    
                    <div>
                        <p>
                        The quality of our programs and their impact on learners is a direct reflection of who we are and our ability to consistently meet the objectives we set for our students.
                        </p>

                    </div>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <div class="card-group">
                                <div class="card">
                                    <img src="bootstrap/image/ph.jpg" class="card-img-top" alt="img-responsive">
                                    <div class="card-body">
                                        <div>
                                            <h5 class="card-title">Mbogo Phillip</h5>
                                            <span class="alumni-date" style="color: blue;">Senior Developer</span>
                                        </div>
                                        <div>
                                            <p class="card-text">
                                                He is currently employed by Gahizho software industry with an experience of ten years.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated <?php echo date("d.m.y.  h:i:s")?></small>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="bootstrap/image/ny.jpg" class="card-img-top" alt="img-resposive">
                                    <div class="card-body">
                                        <div>
                                            <h5 class="card-title">Nyoro Phillip</h5>
                                            <span class="alumni-date" style="color: blue;">Works with Google</span>
                                        </div>
                                    <div>
                                    <p class="card-text">He is currently employed by Google as data analyst. He has worked for the last five years.</p>
                                    </div>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated <?php echo date("d.m.y.  h:i:s")?></small>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="bootstrap/image/mi.jpg" class="card-img-top" alt="img-responsive">
                                    <div class="card-body">
                                        <div>
                                            <h5 class="card-title">Adenmosile Michelle</h5>
                                            <span class="alumni-date" style="color: blue;">Works with Andella KE</span>
                                        </div>
                                        <div>
                                            <p class="card-text">She works with Andella Kenya as a senior programmer with an experience of two years.</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated <?php echo date("d.m.y.  h:i:s")?></small>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-group">
                                    <div class="card">
                                        <img src="bootstrap/image/chris.jpg" class="card-img-top" alt="img-responsive">
                                        <div class="card-body">
                                            <h5 class="card-title">Chris La Muller</h5>
                                            <span class="alumni-date" style="color: blue;">Head of USSD AMREF</span>
                                            <p class="card-text">He is currently employed by AMREF as the head of USSD department to verify people's entry permission</p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated <?php echo date("d.m.y.  h:i:s")?></small>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="bootstrap/image/mor.jpg" class="card-img-top" alt="img-responsive">
                                        <div class="card-body">
                                            <h5 class="card-title">Idd Bin Musah</h5>
                                            <span class="alumni-date" style="color: blue;">Data Specialist</span>
                                            <p class="card-text">He is currently employed as data specialist at Equity center by Equity Group foundation and Holdings</p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated <?php echo date("d.m.y.  h:i:s")?></small>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="bootstrap/image/kin.jpeg" class="card-img-top" alt="img-responsive" height="300px">
                                        <div class="card-body">
                                            <h5 class="card-title">Kithizho Bin Nyundoh</h5>
                                            <span class="alumni-date" style="color: blue;">Data analyst</span>
                                            <p class="card-text">He is currently employed at Coastal EPZ as data analyst. He has worked for the last five yearsand has help the company to grow and expand.</p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated <?php echo date("d.m.y.  h:i:s")?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-group">
                                    <div class="card">
                                        <img src="bootstrap/image/rm.jpg" class="card-img-top" alt="img-responsive">
                                    <div class="card-body">
                                        <h5 class="card-title">All Bin Iddah</h5>
                                        <span class="alumni-date" style="color: blue;">USSD Specialists</span>
                                        <p class="card-text">He is currently employed by World Vision Africa as specialists in the USSD department to verify people's entry permission.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated <?php echo date("d.m.y.  h:i:s")?></small>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="bootstrap/image/sm.jpg" class="card-img-top" alt="img-responsive">
                                    <div class="card-body">
                                        <h5 class="card-title">Ole Kuyah</h5>
                                        <span class="alumni-date" style="color: blue;">Cyber security expert</span>
                                        <p class="card-text">He is currently employed by Airtel KE to protect their systems from Cyber and related threats attacks at the Airtel KE head office.</p>
                                    </div>
                                    <div class="card-footer">
                                    <small class="text-muted">Last updated <?php echo date("d.m.y.  h:i:s")?></small>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="bootstrap/image/sm.jpg" class="card-img-top" alt="img-responsive">
                                    <div class="card-body">
                                    <h5 class="card-title">Kahindi Bin Evans</h5>
                                    <span class="alumni-date" style="color: blue;">Cyber Security Expert</span>
                                    <p class="card-text">He is currently employed by Telkom KE to protect their systems from Cyber and related threats attacks at the Telkom KE head office.</p>
                                    </div>
                                    <div class="card-footer">
                                    <small class="text-muted">Last updated <?php echo date("d.m.y.  h:i:s")?></small>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div>
                       <p> Alumni can update details</p>
                       <button class="btn btn-primary">
                            <a href="admin/login.php" class="text-black">Update  Now</a>
                        </button>
                    </div>
                </div>
                <!-- Right-side Column Content Section -->
                <aside class="col-sm-2">
                    <?php 
                    include 'includes/col.php'; 

                    ?>
                    <h5><b><i>Tag Line</i></b></h5>
					We keep coding , trying everything we can in order to accommodate the higher rate of competetion in the field market based on the current season.
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
