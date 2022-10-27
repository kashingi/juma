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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".card-title").click(function(){
    				$(".card-text").slideToggle("slow");
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
                    Secure a career as a Programmer or a Cyber Security Specialist by enrolling at ST Morris' Mobile Technology Institute.
                    <!-- login does not yet work, nut will in the next chapter -->
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <div class="card-group">
                                    <div class="card">
                                        <img src="bootstrap/image/htm.png" class="card-img-top" alt="image" height="150px">
                                        <div class="card-body">
                                            <h5 class="card-title">HTML 5</h5>
                                            <p class="card-text">It is more secure, faster and more responsive also introduces a wide array of cutting-edge features that allow you to create some stunning interactions and animations on a range of devices in application development. Students will learn how to incorporate HTML5 features in web pages and applications.</p>
                                        </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary"><a href="admin/register.php" class="text-black">Register Now</a></button>
                                    </div>
                            </div>
                            <div class="card">
                                <img src="bootstrap/image/ra.jpg" class="card-img-top" alt="image" height="150px" width="150px">
                                <div class="card-body">
                                    <h5 class="card-title">Laravel</h5>
                                    <p class="card-text">This course is for PHP developers who wish to take their web development skills to the world stage. It teaches how to use the world standard Laravel PHP framework for building advanced and interesting web applications. Hundreds of thousands of web developers and teams around the world use Laravel.</p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">
                                        <a href="admin/register.php" class="text-black">Register Now</a>
                                    </button>
                                </div>
                            </div>
                            <div class="card">
                                <img src="bootstrap/image/python.png" class="card-img-top" alt="image" height="150px">
                                <div class="card-body">
                                    <h5 class="card-title">PYTHON</h5>
                                    <p class="card-text">Whether you have never programmed before, already know basic syntax, or want to learn about the advanced features of Python. In this course we will teach you both versions of Python can easily adapt your skills. You will build data analysis tools and learn frameworks like Flask and Django</p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">
                                        <a href="admin/register.php" class="text-black">Register Now</a>
                                    </button>
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                            <div class="card-group">
                            <div class="card">
                                <img src="bootstrap/image/web.jpg" class="card-img-top" alt="image" height="150px">
                                <div class="card-body">
                                    <h5 class="card-title">Full Stack Software Development</h5>
                                    <p class="card-text">This course trains students on various coding languages to understand how to create Websites that run on a Database. At the end of the training, students create a final project, which is presented to a panel of industry leaders. Technologies you will learn include JAVA , PHP & MySQL, HTML5  and Bootstrap framework.</p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">
                                        <a href="admin/register.php" class="text-black">Register Now</a>
                                    </button>
                                </div>
                            </div>
                            <div class="card">
                                <img src="bootstrap/image/cyber.jpg" class="card-img-top" alt="image" height="150px">
                                <div class="card-body">
                                    <h5 class="card-title">CYBER SECURITY</h5>
                                    <p class="card-text">Become a Cyber Security Specialist - Go from a beginner to advanced in this expert course. Covering all major platforms - Windows 7, Windows 8, Windows 10, MacOS and Linux.This course covers the fundamental building blocks of your required skill set - You will understand the threat and vulnerability to cyber attacks</p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">
                                        <a href="admin/register.php" class="text-black">Register Now</a>
                                    </button>
                                </div>
                            </div>
                            <div class="card">
                                <img src="bootstrap/image/da.jpg" class="card-img-top" alt="image" height="120px" width="100px">
                                <div class="card-body">
                                    <h5 class="card-title">Data Science</h5>
                                    <p class="card-text">Unlock your potential in data analytics. Build job-ready skills for a data analyst career. Gain job-ready skills for an entry-level data analyst role with this Data Analyst course.You analyse, create and improve your skills to sustain in the job market.Such skills will make you attractive and sustain you in the job market.Join us to gain these skills.</p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">
                                        <a href="admin/register.php" class="text-black">Register Now</a>
                                    </button>
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-group">
                                    <div class="card">
                                        <img src="bootstrap/image/digital.png" class="card-img-top" alt="image" height="150px">
                                        <div class="card-body">
                                            <h5 class="card-title">DIGITAL SKILLS</h5>
                                            <p class="card-text">Training Course From spacialists that aims to equip youth and small businesses with the digital skills to compete and succeed in the modern economy: Come and learn the digital skills you need to grow your business and career. Start Learning Here</p>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-primary">
                                                <a href="admin/register.php" class="text-black">Register Now</a>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="bootstrap/image/oracle.jpg" class="card-img-top" alt="image" height="150px" width="120px">
                                        <div class="card-body">
                                            <h5 class="card-title">ORACLE</h5>
                                            <p class="card-text">Learn to become an Oracle Database Administrator (DBA) in 6 weeks and.This course follows a step by step methodology in introducing concepts and Demo's to the students. If you want to become an Oracle Database Administrator, this course is right for you.</p>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-primary">
                                                <a href="admin/register.php" class="text-black">Register Now</a>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="bootstrap/image/usd.jpg" class="card-img-top" alt="image" height="120px">
                                        <div class="card-body">
                                            <h5 class="card-title">USSD</h5>
                                            <p class="card-text">This course offers participants with the skills to develop USSD based mobile applications that allow fast, secure communication between the user and the application without requiring an app that is downloaded. USSD is a cellular telephones to communicate with the service provider's computers</p>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-primary">
                                                <a href="admin/register.php" class="text-black">Register  Now</a>
                                            </button>
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
                    <p>Skilss change life and experience sustain you in the field market. </p>
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
