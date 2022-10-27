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
        <!--Link to jQuery-->
        <link rel="stylesheet" href="bootstrap/js/bootstrap.js">
		<link rel="stylesheet" href="main.css">
		
    </head>
    <body>
        <div class="in" style="margin-top:30px">
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
                    <h2>Welcome to ST Morris' Mobile training Institute</h2>
                    Our students have varous Testimonials in terms of experiences and employement in the field market.
                    <!-- login does not yet work, nut will in the next chapter -->

                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active" data-bs-interval="10000">
								<div class="card-group">
									<div class="card">
										<img src="bootstrap/image/chris.jpg" class="card-img-top" alt="img-responsive" height="250px">
										<div class="card-body">
											<div>
												<h5 class="card-title">Samson Chris</h5>
												<span class="testimonial-date">Community Manager at Google</span>
											</div>
											<div>
												<p class="card-text">
												“ As a UoN Med student I opted to find medical solutions through tech which led me to eMobilis after a friend recommended them. My training in Python and Data Science has enabled me to develop Panacea: a system that diagnoses Pneumonia. ”
												</p>
											</div>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("d.m.y.  h:i:s")?></small>
										</div>
									</div>
									<div class="card">
										<img src="bootstrap/image/ny.jpg" class="card-img-top" alt="img-responsive" height="250px">
										<div class="card-body">
											<div>
												<h5 class="card-title">Phillip Nyoro</h5>
												<span class="testimonial-date">Developer</span>
											</div>
											<p class="card-text">“ As a Moi tech student I opted to find modern solutions through tech which led me to ST Morris. My training in Python and Data Science has enabled me to develop Digital: a system that enable comrades to search for accommadation country wide ”</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("d.m.y.  h:i:s")?></small>
										</div>
									</div>
									<div class="card">
										<img src="bootstrap/image/mi.jpg" class="card-img-top" alt="img-responsive" height="250px">
										<div class="card-body">
											<div>
											<h5 class="card-title">Faith Michelle</h5>
											<span class="testimonial-date">Community Manager at Google</span>
											</div>
											<div>
											<p class="card-text"> “ I was able to get equiped with skills and resources that would later on aid me in my career as a Software Engineer, and winning the Innovate Counties Challenge Mombasa county back in 2017. ”</p>
											</div>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("d.m.y.  h:i:s")?></small>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item" data-bs-interval="2000">
								<div class="card-group">
									<div class="card">
										<img src="bootstrap/image/sm.jpg" class="card-img-top" alt="img-responsive" height="250px">
										<div class="card-body">
											<div>
												<h5 class="card-title">Simon Ole Kuya</h5>
												<span class="testimonial-date">Developer at Facebook</span>
											</div>
											<div>
												<p class="card-text"> “ My passion in technology saw me earn a partial scholarship at ST Morris' straight after Kenya High School. I put in the work and learned to Code well within knowledgeable lectures there. I am now living my dream as a senior software developer at Vitu
                                            Mob and Lead for the Facebook Developer Circles program in Kenya. ”</p>
											</div>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("d.m.y.  h:i:s")?></small>
										</div>
									</div>
									<div class="card">
										<img src="bootstrap/image/mo.jpg" class="card-img-top" alt="img-responsive" height="250px">
										<div class="card-body">
											<div>
												<h5 class="card-title">Kashingi Bin Jumah</h5>
												<span class="testimonial-date">Developer</span>
											</div>
											<div>
												<p class="card-text">
													“ I am a trained Accountant from University of Nairobi and I choose to train at ST Morris' Mobile Training Institute on Software Development and this has helped me create a software for the company I work for. This software has enabled the company to grow and also to icrease its daily productivity.”
												</p>
											</div>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("d.m.y.  h:i:s")?></small>
										</div>
									</div>
									<div class="card">
										<img src="bootstrap/image/st.jpg" class="card-img-top" alt="img-responsive" height="250px">
										<div class="card-body">
											<div>
												<h5 class="card-title">Makupe Stiphen</h5>
												<span class="testimonial-date">Developer</span>
											</div>
											<div>
												<p class="card-text">
												“ Through the help of ST Morris' Mobile Training Institute Administration, I got my first job at Mobitech a week after I completed my course where i worked for eight months before i got promoted to a senior web developer and more experiences thereafter.”
												</p>
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
										<img src="bootstrap/image/ph.jpg" class="card-img-top" alt="img-responsive" height="250px">
										<div class="card-body">
											<h5 class="card-title">Mbogo Philip</h5>
											<span class="testimonial-date">Community Manager at Google</span>
											<p class="card-text">“ I am a trained Accountant from University of Nairobi and I choose to train at St Morris' Mobile Training Institute on Software Development and this has helped me create a software for the company I work for. ”</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("d.m.y.  h:i:s")?></small>
										</div>
									</div>
									<div class="card">
										<img src="bootstrap/image//kin.jpeg" class="card-img-top" alt="img-responsive" height="250px">
										<div class="card-body">
											<h5 class="card-title">Amerson Kingi Katana</h5>
											<span class="testimonial-date">Community Manager at Google</span>
											<p class="card-text">“ As a Moi Comp student I opted to find modern solutions through tech which led me to ST Morris'. My training enabled me to develop Campus Exam: a system that anables students to download past papers and other research materials. ”</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("d.m.y.  h:i:s")?></small>
										</div>
									</div>
									<div class="card">
									<img src="bootstrap/image/kithz.jpg" class="card-img-top" alt="img-responsive" height="250px">
										<div class="card-body">
											<h5 class="card-title">Karisah Thoyah</h5>
											<p class="card-text">“ I am a trained Teacher from Jomo Kenyatta University of Agriculture and Technology and I choose to train at ST Morris' Mobile Training Institute on Software Development and this has helped me create a software for the company I work for to help it grow and expand. ”</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("d.m.y.  h:i:s")?></small>
										</div>
									</div>
								</div>
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
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
