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
			<header class="jumbotron text-center row" style="margin-bottom:2px; background:linear-gradient(white, #0073e6); padding:10px;">
				<div class="col-sm-2">
                    <img class="img-fluid float-left" src="../bootstrap/image/logo.png" alt="logo">
				</div>
				<div class="col-sm-8">
					<h1 class="font-bold">Welcome to the world of designers</h1>
				</div>
				<div class="col-sm-2">
					<nav class="btn-group-vertical btn-group-sm" role="group" aria-label="button-group">
                    <button type="button" class="btn btn-secondary" onclick="location.href='logout.php'">Logout</button>
                        <button type="button" class="btn btn-secondary" onclick="location.href='search-address.php'">Erase Entries</button>
                        <button type="button" class="btn btn-secondary" onclick="location.href='admin.php'">Cancel</button>
					</nav>
				</div>
			</header>
            <!-- Body Section -->
            <div class="row" style="padding-left: 0px;">
                <!-- Left-side Column Menu Section -->
                <nav class="col-sm-2">
                    <ul class="nav nav-pills flex-column">
						<?php 
                            include '../includes/navi.php';
                        ?>
                    </ul>
                </nav>
				<!-- Validate Input -->
				<?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        require('view-found-addresses.php');
                    } // End of the main Submit conditional.
                ?>
				<div class="col-sm-8">
                    <div class="h2 text-center">
                        <h5>Search for an Address or Phone Number</h5>
                        <h5 style="color: red;">Both Names are required items</h5>
                    </div>
                    <form action="view-found-address.php" method="post" name="searchform" id="searchform">
                        <div class="form-group row">
                            <label for="Firstname" class="col-sm-4 col-form-label text-right">First Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="Firstname" name="Firstname" placeholder="First Name" maxlength="30" required value="<?php if (isset($_POST['Firstname'])) echo htmlspecialchars($_POST['Firstname'], ENT_QUOTES); ?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Lastname" class="col-sm-4 col-form-label text-right">Last Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="Lastname" name="Lastname" placeholder="Last Name" maxlength="40" required value="<?php if (isset($_POST['Lastname'])) echo htmlspecialchars($_POST['Lastname'], ENT_QUOTES); ?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="l" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8">
                                <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Search">
                            </div>
                        </div>
                    </form>
                </div>
				<div class="col-sm-2">
					<!-- Right-side Column Content Section -->
					<aside class="float-left">
						<?php 
                            include '../includes/col.php';
                        ?>
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