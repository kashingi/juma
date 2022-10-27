<?php


?>
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
        <!--Font Link-->
        <script src="https://use.fontawesome.com/your-embed-code.js"></script> 
        <!--Font Link-->
        <link rel="stylesheet" href="bootstrap/css/font-awesom.css">
        <!--jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("input").focus(function(){
                    $(this).css("background-color", "skyblue");
                });
                $("input").blur(function(){
                    $(this).css("background-color", "blueviolet");
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
                    <h4>Thank you for your feedback</h4>
                    We value your presence and we shall ensure we serve your with maximum attention. <br>
                    Welcome member
                    <!-- login does not yet work, nut will in the next chapter -->
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>Contact Us</h4>
                            <p class="contact-agile2">Thanks for conacting us, we shall sort you immediately</p>
                            <form  method="post" name="sentMessage" id="contactForm" >
                                <div class="control-group form-group">
                                    <label class="Firstname">Firstname Name:</label>
                                    <input type="text" class="form-control" name="Firstname" id="Firstname" pattern="[a-zA-Z][a-zA-Z\s]*" title="Alphabetic and space only max of 30 characters" required value="<?php if (isset($_POST['Firstname']))	echo htmlspecialchars($_POST['Firstname'], ENT_QUOTES); ?>">
                                    <p class="help-block"></p>
                                </div>	
                                <div class="control-group form-group">
                                    <label class="Lastname">Lastname Name:</label>
                                    <input type="text" class="form-control" name="Lastname" id="Lastname" pattern="[a-zA-Z][a-zA-Z\s]*" title="Alphabetic and space only max of 30 characters" required value="<?php if (isset($_POST['Lastname']))	echo htmlspecialchars($_POST['Lastname'], ENT_QUOTES); ?>">
                                    <p class="help-block"></p>
                                </div>	
                                <div class="control-group form-group">
                                    <label class="Phone">Phone Number:</label>
                                    <input type="tel" class="form-control" name="Phone" id="Phone" maxlength="15" required value="<?php if (isset($_POST['Phone'])) echo htmlspecialchars($_POST['Phone'], ENT_QUOTES); ?>">
                                    <p class="help-block"></p>
                                </div>
                                <div class="control-group form-group">
                                    <label class="Email">Email Address:</label>
                                    <input type="email" class="form-control" name="Email" id="Email" maxlength="60" required  value="<?php if (isset($_POST['Email']))	echo htmlspecialchars($_POST['Email'], ENT_QUOTES); ?>">
                                    <p class="help-block"></p>
                                </div>
                                <div class="control-group form-group">
                                    <label class="Message">Feed Back:</label>
                                    <textarea name="Message" id="Message" cols="45" rows="2">

                                    </textarea>
                                    <p class="help-block"></p>
                                </div>
                                <input type="submit" name="sub" value="Send Now" class="btn btn-primary">	
                            </form> 
                            <?php
                                if(isset($_POST['sub']))
                                {
                                    require 'includes/connection.php';

                                    $errors = array(); // Initialize an error array.
                                    // Check for a first name:
                                    $Firstname = filter_var( $_POST['Firstname'], FILTER_SANITIZE_STRING);
                                    if (empty($Firstname)) {
                                        $errors[] = 'You forgot to enter your first name.';
                                    }
                                    
                                    // Check for a Last name:
                                    $Lastname = filter_var( $_POST['Lastname'], FILTER_SANITIZE_STRING);
                                    if (empty($Lastname)) {
                                        $errors[] = 'You forgot to enter your first name.';
                                    }
                                    
                                    $errors = array(); // Initialize an error array.
                                    // Check for a Phone Number:
                                    $Phone = filter_var( $_POST['Phone'], FILTER_SANITIZE_STRING);
                                    if (empty($Phone)) {
                                        $errors[] = 'You forgot to enter your first name.';
                                    }
                                    
                                    // Check for an Email:
                                    $Email = filter_var( $_POST['Email'], FILTER_SANITIZE_STRING);
                                    if (empty($Email)) {
                                        $errors[] = 'You forgot to enter your first name.';
                                    }
                                    
                                    $Message = filter_var( $_POST['Message'], FILTER_SANITIZE_STRING);
                                    if (empty($Message)) {
                                        $errors[] = 'You forgot to type your feedback text.';
                                    }

                                    $query = "INSERT INTO contact ( Firstname, Lastname, Phone, Email,Message, registration_date) 
                                    VALUES ('$Firstname', '$Lastname', '$Phone', '$Email', '$Message', now() )" ;
                            
                            
                                    if(mysqli_query($conn,$query)){
                                    
                            
                                    }
                                }
						    ?>
                        </div>
                        <div class="col-sm-6">
                            <h4>Connect With Us</h4>
                            <p class="contact-agile1"><strong>Phone :</strong>+25 (79)048-75-04</p>
                            <p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">st.moris@gmail.com</a></p>
                            <p class="contact-agile1">
                                <strong>Address :</strong> Mombasa - Mariakani, Kilifi kenya</p>
                            <div class="frame">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31845.927259194505!2d39.45632459662286!3d-3.865667455009547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x183f8610becc2a27%3A0xe1dee91dbee6bd85!2sMariakani!5e0!3m2!1sen!2ske!4v1652267474773!5m2!1sen!2ske" width="340" height="170" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
