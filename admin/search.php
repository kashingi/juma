<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 	//require("cap.php"); // recaptcha check
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
					<h1 class="font-bold">Welcome to the world of designers</h1>
				</div>
				<div class="col-sm-2">
					<nav class="btn-group-vertical btn-group-sm" role="group" aria-label="button-group">
                    <button type="button" class="btn btn-secondary" onclick="location.href='logout.php'">Logout</button>
                        <button type="button" class="btn btn-secondary" onclick="location.href='search.php'">Erase Entries</button>
						<button type="button" class="btn btn-secondary" onclick="location.href='admin.php'">Cancel</button>
					</nav>
				</div>
			</header>
            <!-- Body Section -->
            <div class="row" style="padding-left: 0px;">
                <!-- Left-side Column Menu Section -->
                <!-- <nav class="col-sm-2">
                    <ul class="nav nav-pills flex-column">
						<?php 
                            include '../includes/navi.php';
                        ?>
                    </ul>
                </nav> -->
				<!-- Validate Input -->
				
				<div class="col-sm-12">
                <h2 class="h2 text-center">Search for a record</h2>
                    <h6 class="text-center">Both names are required items</h6>
                    <form action="view-found-record.php" method="POST">
                        <div class="form-group row">
                            <label for="Firstname" class="col-sm-4 col-form-label">Firstname:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="Firstname" name="Firstname" placeholder="First Name" maxlength="30" required value="<?php if (isset($_POST['Firstname'])) echo htmlspecialchars($_POST['Firstname'], ENT_QUOTES) ; ?>"> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Lastname" class="col-sm-4 col-form-label">Lastname:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="Lastnamee" name="Lastname" placeholder="First Name" maxlength="30" required value="<?php if (isset($_POST['Lastname'])) echo htmlspecialchars($_POST['Lastname'], ENT_QUOTES) ; ?>"> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="colo-sm-4 col-form-label"></label>
                            <div class="col-sm-8">
                                <input type="submit" id="submit" class="btn btn-primary" name="submit" value="Search">
                            </div>
                        </div>
                    </form>
                </div>
				<div class="col-sm-2">
					
					<!--Center column Content-->

					<!--Center Column content -->
					<!-- Right-side Column Content Section -->
					<!-- <aside class="float-left">
						<?php 
                            include '../includes/col.php';
                        ?>
					</aside> -->
				</div>
			</div>
			<!--The footer Content-->
			<!-- <footer class="jumbotron text-center row" style="padding-bottom:lpx; padding-top:8px;">
                <?php 
                	include '../includes/footer.php'; 
                ?>
            </footer> -->
        </div>
	</body>
</html>