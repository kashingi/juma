<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 		require("cap.php"); // recaptcha check
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
			<header class="jumbotron text-center row" style="margin-bottom:2px; background:linear-gradient(white, #0073e6); padding:2Opx;">
				<div class="col-sm-2">
                    <img class="img-fluid float-left" src="../bootstrap/image/logo.png" alt="logo">
				</div>
				<div class="col-sm-8">
					<h1 class="font-bold">Welcome to the world of designers</h1>
				</div>
				<div class="col-sm-2">
					<nav class="btn-group-vertical btn-group-sm" role="group" aria-label="button-group">
			    		<button type="button" class="btn btn-secondary" onclick="location.href='register.php'">Erase Entries</button>
						<button type="button" class="btn btn-secondary" onclick="location.href='../index.php'">Cancel</button>
					</nav>
				</div>
			</header>
            <!-- Body Section -->
            <div class="row" style="padding-left: 0px;">
                <!-- Left-side Column Menu Section -->
                <nav class="col-sm-2">
                    <ul class="nav nav-pills flex-column">
                        <?php include '../includes/navi.php'; ?>
                    </ul>
                </nav>
				<!-- Validate Input -->
				<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					require('process-register.php');
				} // End of the main Submit conditional.
				?>
				<div class="col-sm-8">
					<h2 class="h2 text-center">Register</h2>
					<h3 class="text-center">Items marked with an asterisk * are required</h3>
					<?php
					try {
						require_once '../includes/connection.php';
						$query = "SELECT * FROM courses";
						$result = mysqli_query ($conn, $query); // Run the query.
						if ($result) { // If it ran OK, display the records.
							$row = mysqli_fetch_array($result, MYSQLI_NUM);
							$coursesarray = array(
							"HTML:", "Laravel:", "Python per Semester:", "Web Development:",
							"Cyber Security:", "Data Science:", "Digital Skills:", 
							"Oracle per Semester:", "USSD per Semester" );
							echo '<h6 class="text-center text-danger">Membership Courses:</h6>' ;
							echo '<h6 class="text-center text-danger small"> ';
							for ($j = 0, $i = 0; $j < 9; $j++, $i = $i + 1) {
								echo $coursesarray[$j] . " &pound; " . htmlspecialchars($row[$i], ENT_QUOTES) . " &dollar; " . htmlspecialchars($row[$i], ENT_QUOTES) . " ";
								if ($j != 4) {
									if ($j % 2 == 0) {
									echo "</h6><h6 class='text-center text-danger small'>"; 
									}
									else { 
										echo " , "; 
									}
								}
							}
							echo "</h6>";
						}
						?>
						<form action="process-register.php" method="post" onsubmit="return checked();" name="regform" id="regform">
							<div class="form-group row">
								<label for="Title" class="col-sm-4 col-form-label text-right">Title:</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="Title" name="Title"	placeholder="Title" maxlength="12" pattern='[a-zA-Z][a-zA-Z\s\.]*'	Title="Alphabetic, period and space max 15 characters"	value="<?php if (isset($_POST['Title'])) echo htmlspecialchars($_POST['Title'], ENT_QUOTES); ?>" >
								</div>
							</div>
							<div class="form-group row"> <!--#1-->
								<label for="Firstname" class="col-sm-4 col-form-label text-right">First Name*:</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="Firstname"	name="Firstname" pattern="[a-zA-Z][a-zA-Z\s]*"	title="Alphabetic and space only max of 30 characters"	placeholder="First Name" maxlength="30" required value=	"<?php if (isset($_POST['Firstname']))	echo htmlspecialchars($_POST['Firstname'], ENT_QUOTES); ?>" >
								</div>
							</div>
							<div class="form-group row">
								<label for="Lastname" class="col-sm-4 col-form-label text-right">	Last Name*:</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="Lastname" name="Lastname"	pattern="[a-zA-Z][a-zA-Z\s\-\']*"	title="Alphabetic, dash, quote and space only max of 40 characters"	placeholder="Last Name" maxlength="40" required	value=	"<?php if (isset($_POST['Lastname']))	echo htmlspecialchars($_POST['Lastname'], ENT_QUOTES); ?>" >
								</div>
							</div>
							<div class="form-group row">
								<label for="Email" class="col-sm-4 col-form-label text-right">E-mail*:</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" id="Email" name="Email" placeholder="E-mail" maxlength="60" required value= "<?php if (isset($_POST['Email']))	echo htmlspecialchars($_POST['Email'], ENT_QUOTES); ?>" >
								</div>
							</div>
							<div class="form-group row"> <!--#2-->
								<label for="password1" class="col-sm-4 col-form-label text-right">Password*:</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" id="password1"	name="password1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}" title="One number, one upper, one lower, one special, with 8 to 12	characters"	placeholder="Password" minlength="8" maxlength="12" required value=	"<?php if (isset($_POST['password1'])) echo htmlspecialchars($_POST['password1'], ENT_QUOTES); ?>" >
									<span id='message'>Between 8 and 12 characters.</span>
								</div>
							</div>
							<div class="form-group row">
								<label for="password2" class="col-sm-4 col-form-label text-right">Confirm Password*:</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" id="password2"	name="password2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}" title="One number, one uppercase, one lowercase letter, with 8 to 12 characters" placeholder="Confirm Password" minlength="8" maxlength="12" required	value="<?php if (isset($_POST['password2'])) echo htmlspecialchars($_POST['password2'], ENT_QUOTES); ?>" >
								</div>
							</div>
							<div class="form-group row">
								<label for="level" class="col-sm-4 col-form-label text-right">Course*</label>
								<div class="col-sm-8">
									<select id="level" name="level" class="form-control" required>
										<option value="0" >-Select-</option>
										<?php
										for ($j = 0, $i = 0; $j < 9; $j++, $i = $i + 1) {
											echo '<option value="' . htmlspecialchars($row[$i], ENT_QUOTES) . '" ';
											if ((isset($_POST['level'])) && ( $_POST['level'] == $row[$i]))	{
												?>
												selected
												<?php
											}
											echo ">" . $coursesarray[$j] . " " . htmlspecialchars($row[$i], ENT_QUOTES) .	" &pound; ". htmlspecialchars($row[$i], ENT_QUOTES) . "&dollar; </option>";
										}
										echo "here";
										?>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="Address" class="col-sm-4 col-form-label text-right">Address*:</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="Address" name="Address" pattern="[a-zA-Z0-9][a-zA-Z0-9\s\.\,\-]*"	title="Alphabetic, numbers, period, comma, dash and space only max of 30 characters" placeholder="Address" maxlength="30" required	value="<?php if (isset($_POST['Address']))	echo htmlspecialchars($_POST['Address'], ENT_QUOTES); ?>" >
								</div>
							</div>
							
							<div class="form-group row">
								<label for="City" class="col-sm-4 col-form-label text-right">City*:</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="City" name="City" pattern="[a-zA-Z][a-zA-Z\s\.]*" title="Alphabetic, period and space only max of 30 characters" placeholder="City" maxlength="30" required	value="<?php if (isset($_POST['City']))	echo htmlspecialchars($_POST['City'], ENT_QUOTES); ?>" >
								</div>
							</div>
							<div class="form-group row">
								<label for="County" class="col-sm-4 col-form-label text-right">	County*:</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="County"	name="County" pattern="[a-zA-Z][a-zA-Z\s\.]*" title="Alphabetic, period and space only max of 30 characters" placeholder="County" maxlength="30" required value="<?php if (isset($_POST['County'])) echo htmlspecialchars($_POST['County'], ENT_QUOTES); ?>" >
								</div>
							</div>
							<div class="form-group row">
								<label for="Zip_code" class="col-sm-4 col-form-label text-right">Zip Code*:</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="Zip_code" name="Zip_code"	pattern="[a-zA-Z0-9][a-zA-Z0-9\s]*"	title="Alphabetic, period and space only max of 30 characters"	placeholder="Zip or Postal Code" minlength="5" maxlength="30" required value="<?php if (isset($_POST['Zip_code'])) echo htmlspecialchars($_POST['Zip_code'], ENT_QUOTES); ?>" >
								</div>
							</div>
							<div class="form-group row">
								<label for="Phone" class="col-sm-4 col-form-label text-right">Telephone:</label>
								<div class="col-sm-8">
									<input type="tel" class="form-control" id="Phone" name="Phone"	placeholder="Phone Number" maxlength="30" value="<?php if (isset($_POST['Phone'])) echo htmlspecialchars($_POST['Phone'], ENT_QUOTES); ?>" >
								</div>
							</div>
							<div class="form-group row">
								<label for="question" class="col-sm-4 col-form-label text-right">Secret Question*:</label>
								<div class="col-sm-8">
									<select id="question" class="form-control">
										<option selected value="">- Select -</option>
										<option value="Maiden">Most valueble course</option>
										<option value="Pet">Favourite course</option>
										<option value="School">Favourite framework</option>
										<option value="fav">Coding school</option>
										<option value="Vacation">Favorite to work with</option>
									</select>
								</div>
								</div>
								<div class="form-group row"> <!--#3-->
									<label for="secret" class="col-sm-4 col-form-label text-right">Answer*:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="secret" name="secret" pattern="[a-zA-Z][a-zA-Z\s\.\,\-]*" title="Alphabetic, period, comma, dash and space only max of 30 characters"	placeholder="Secret Answer" maxlength="30" required value="<?php if (isset($_POST['secret']))
										echo htmlspecialchars($_POST['secret'], ENT_QUOTES); ?>" >
									</div>
								</div>
								<div class="form-group row"> <!--#4-->
									<label class="col-sm-4 col-form-label"></label>
									<div class="col-sm-8">
										<div class="float-left g-recaptcha"	data-sitekey="yourdatasitekeyhere"></div>
									</div>
								</div>
								<div class="form-group row">
									<label for="" class="col-sm-4 col-form-label"></label>
									<div class="col-sm-8 text-center">
										<input id="submit" class="btn btn-primary" type="submit" name="submit" value="Register">
									</div>
								</div>
							</form>
						</div>
						<!-- Right-side Column Content Section -->
						<?php
						if(!isset($errorstring)) {
							echo '<aside class="col-sm-2">';
							include '../includes/col.php';
							echo '</aside>';
							echo '</div>';
							echo '<footer class="jumbotron text-center row col-sm-14" style="padding-bottom:1px; padding-top:8px;">';
						}
						else {
							echo '<footer class="jumbotron text-center col-sm-12" style="padding-bottom:1px; padding-top:8px;">';
						}
						include '../includes/footer.php';
						echo "</footer>";
						echo "</div>";
					}
					catch(Exception $e) // We finally handle any problems here
					{
						print "An Exception occurred. Message: " . $e->getMessage();
						print "The system is busy please try later";
					}
					catch(Error $e)	{
						//print "An Error occurred. Message: " . $e->getMessage();
						print "The system is busy please try again later.";
					}
			?>
	</body>
</html>