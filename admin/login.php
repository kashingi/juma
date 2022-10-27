<!DOCTYPE html>
<html lang="en">
	<head>
 		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=l, shrink-to-fit=no">
		<meta name="author" content="Website and system designer. Kashing74 KE">
		<title>Class Practicals</title>

		<!-- Bootstrap CSS File -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity= "sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<!--Script-->
		<script src="verify.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body>
		<div class="container" style="margin-top:30px">
			<!-- Header Section -->
			<header class="jumbotron text-center row" style="margin-bottom:2px; background:linear-gradient(white, #0073e6); padding:2Opx;">
				<div class="col-sm-2">
                    <img class="img-fluid float-left" src="../bootstrap/image/logo.png" alt="logo">
				</div>
				<div class="col-sm-8">
					<h1 class="font-bold">Welcome to the world of designers</h1>
				</div>
				<div class="col-sm-2">
					<nav class="btn-group-vertical btn-group-sm" role="group" aria-label="button-group">
			    		<button type="button" class="btn btn-secondary" onclick="location.href='login.php'">Erase Entries</button>
						<button type="button" class="btn btn-secondary" onclick="location.href='../index.php'">Cancel</button>
					</nav>
				</div>
			</header>
            <!-- Body Section -->
            <div class="row" style="padding-left: 0px;">
                <!-- Left-side Column Menu Section -->
                <nav class="col-sm-2">
                    <ul class="nav nav-pills flex-column">
						<h5>we produce valid and efficient systems</h5>
						<p>Learn, Create, and innovate. <br> Take your idea from a paper to a business</p>
                    </ul>
                </nav>
				<!-- Validate Input -->
				<?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        # code...
                        require 'process-login.php';

                    }//End of the amain submit conditional
                ?>
				<div class="col-sm-8">
                    <h2 class="h2 text-center">Login</h2>
                    <form action="login.php" method="POST" name="loginform" id="loginform">
                        <div class="form-group row">
                            <label for="Email" class="col-sm-4 col-form-label">Email Address</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="Email" name="Email" placeholder="E-Mail" value="<?php if(isset($_POST['Email'])) echo $_POST['Email']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Password" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="Password" name="Password" placeholder="Password" value="<?php if(isset($_POST['Password'])) echo $_POST['Password']; ?>">
                                <span id="message">Between 8 and 12 characters.</span>
                            </div>
                        </div>
                        <div class="form-group row">
							<div class="col-sm-12">
								<input id="submit" class="btn btn-primary" type="submit" name="submit" value="Login">
							</div>
						</div>
                    </form>
                </div>
				<div class="col-sm-2">
					
					<!--Center column Content-->

					<!--Center Column content -->
					<!-- Right-side Column Content Section -->
					<aside class="float-left">
						<h4 class="text-info left">The designers</h4>
						<p>Web designed by <br><b>Kashingi Morris</b> and <br> <b>Morris Jumah </b></p>
						<p>Gain knowledge on how to handle information systems security</p>
					</aside>
				</div>
			</div>
			<!--The footer Content-->
			<footer class="jumbotron text-center row" style="padding-bottom:lpx; padding-top:8px;">
                <?php 
                include '../includes/footer.php'; 
                ?>
            </footer>
        </div>
	</body>
</html>