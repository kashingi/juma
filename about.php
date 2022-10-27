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
        <!--jQuery Link-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
			$(document).ready(function(){
				$(".card-title").click(function(){
    				$(".card-text").slideToggle("slow");
 				});
                 $(".card-text").mouseenter(function(){
                     $(this).css("font-size", "1.1em");
                     $(this).css("font-weight", "400");
                 }); 
                 $(".card-text").mouseleave(function(){
                     $(this).css("font-size", "1em");
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
                    <h2>Welcome to ST Morris' Mobile training Institute</h2>
                    On the Home Page, you will now be able to login and add new quotes to the message board.
                    <!-- login does not yet work, nut will in the next chapter -->
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Mission</h5>
                                    <Our class="card-text"> The mission of ST Morris' Mobile training Institute is to create opportunities for Kenyan youth by training them on digital, software and other technologies that prepare them for the future of work by equipping them with marketable,industry driven skills.Our goal is to ensure that our talented youth are available and trained in order to meet the growing opportunities and needs of the ICT Industry in Kenya.We also envision an explosion of technology innovation and the creation of successful tech ventures by local developers from across the country with a zeal for changing the world through harnessing the power of their technology training for social good.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Our Vision</h5>
                                    <Given class="card-text">Our vision is to empower local youth to tap into the myriad opportunities that the mobile, technology and software development industry offers so that they can innovate, create and improve their situation in life through use of digital tools.Given predictions that the digital economy will continue to grow exponentially throughout Kenya, we are a catalyst to enable Kenyans from all walks of life to benefit from this social/economic revolution—not just in greater access of information, but also in leading design and content development.  We hope our efforts will stimulate economic growth and empower African youth.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right-side Column Content Section -->
                <aside class="col-sm-2">
                    <?php 
                    include 'includes/col.php'; 
                    ?>
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
