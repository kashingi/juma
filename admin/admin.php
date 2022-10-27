<?php
	session_start();                                                            //#1
	if(!isset($_SESSION['Userlevel']) or ($_SESSION['Userlevel'] !=1)){
		header("Location: login.php");
		exit();
	}
?>
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
			<header class="jumbotron text-center row" style="margin-bottom:2px; background:linear-gradient(white, #0073e6); padding:5px;">
				<div class="col-sm-2">
                    <img class="img-fluid float-left" src="../bootstrap/image/logo.png" alt="logo">
				</div>
				<div class="col-sm-8">
					<h1 class="font-bold">Welcome Administrator</h1>
				</div>
				<div class="col-sm-2">
					<nav class="btn-group-vertical btn-group-sm" role="group" aria-label="button-group">
			    		<button type="button" class="btn btn-secondary" onclick="location.href='logout.php'">Logout</button>
						<button type="button" class="btn btn-secondary" onclick="location.href='admin-view-users.php'">Members</button>
						<button type="button" class="btn btn-secondary" onclick="location.href='feedback.php'">Feedback</button>
						<button type="button" class="btn btn-secondary" onclick="location.href='edit-feedback.php'">Edit Feedback</button>
                        <button type="button" class="btn btn-secondary" onclick="location.href='password.php'">New password</button>
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
				<!--Center Column Content Section-->
                <div class="col-sm-8">
                    <h2 class="text-center">Welcome to Administration </h2>
                    <h3>You have permission to:</h3>
                        <p>Edit and Delet a record</p>
                        <p>Use the View Members button to page through all members</p>
                        <p>Use the Search button to locate a aparticular member</p>
                        <p>Use the New Password button to change your password.</p>
                </div>
				<div class="col-sm-2 float-left">
					
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