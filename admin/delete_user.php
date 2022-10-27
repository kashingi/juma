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
					<h1 class="font-bold">Welcome to the world of designers</h1>
				</div>
				<div class="col-sm-2">
					<nav class="btn-group-vertical btn-group-sm" role="group" aria-label="button-group">
                    <button type="button" class="btn btn-secondary" onclick="location.href='logout.php'">Logout</button>
                        <button type="button" class="btn btn-secondary" onclick="location.href='admin-view-users.php'">Cancel</button>
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
				
				<div class="col-sm-8">
                    <h2 class="text-center">Administration Delete </h2>
                    
                    <?php
                    try {
                        // Check for a valid user ID, through GET or POST: #1
                        if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) {
                            // From view_users.php
                            $id = htmlspecialchars($_GET['id'], ENT_QUOTES);
                        } 
                        elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) {
                            // Form submission.
                            $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
                        } 
                        else { // No valid ID, kill the script.
                            // return to login page
                            header("Location: login.php");
                            exit();
                        }
                        require '../includes/connection.php';
                        // Check if the form has been submitted: #2
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $sure = htmlspecialchars($_POST['sure'], ENT_QUOTES);
                            if ($sure == 'Yes') { // Delete the record.
                                // Make the query:
                                // Use prepare statement to remove security problems
                                $q = mysqli_stmt_init($conn);
                                mysqli_stmt_prepare($q, 'DELETE FROM users WHERE Userid=? LIMIT 1');
                                // bind $id to SQL Statement
                                mysqli_stmt_bind_param($q, "s", $id);
                                // execute query
                                mysqli_stmt_execute($q);
                                if (mysqli_stmt_affected_rows($q) == 1) { // It ran OK
                                    // Print a message:
                                    echo '<h3 class="text-center">The record has been deleted.</h3>';
                                } 
                                else { // If the query did not run OK display public message
                                    echo '<p class="text-center">The record could not be deleted.';
                                    echo '<br>Either it does not exist or due to a system error.</p>';
                                    echo '<p>' . mysqli_error($conn ) . '<br />Query: ' . $q . '</p>';
                                    // Debugging message. When live comment out because this displays SQL
                                }
                            } 
                            else { // User did not confirm deletion.
                                echo '<h3 class="text-center">The user has NOT been deleted as ';
                                echo 'you requested</h3>';
                            }
                        } 
                        else { // Show the form. #3
                            $q = mysqli_stmt_init($conn);
                            $query = "SELECT CONCAT(Firstname, ' ', Lastname) FROM users WHERE Userid=?";
                            mysqli_stmt_prepare($q, $query);
                            // bind $id to SQL Statement
                            mysqli_stmt_bind_param($q, "s", $id);
                            // execute query
                            mysqli_stmt_execute($q);
                            $result = mysqli_stmt_get_result($q);
                            $row = mysqli_fetch_array($result, MYSQLI_NUM); // get user info
                            if (mysqli_num_rows($result) == 1) {
                                // Valid user ID, display the form.
                                // Display the record being deleted: #4
                                $user = htmlspecialchars($row[0], ENT_QUOTES);
                                ?>

                                <h2 class="h2 text-center">Are you sure you want to permanently delete <?php echo $user; ?>?</h2>
                                <form action="delete_user.php" method="post" name="deleteform" id="deleteform">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 col-form-label"></label>
                                        <div class="col-sm-8" style="padding-left: 70px;">
                                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                            <input id="submit-yes" class="btn btn-primary" type="submit" name="sure" value="Yes"> -
                                            <input id="submit-no" class="btn btn-primary" type="submit" name="sure" value="No">
                                        </div>
                                    </div>
                                </form>
                                <?php
                            } 
                            else { // Not a valid user ID.
                                echo '<p class="text-center">This page has been accessed in error.</p>';
                            }
                        } // End of the main submission conditional.
                        mysqli_stmt_close($q);
                        mysqli_close($conn);
                    }
                    catch(Exception $e) {
                        print "The system is busy. Please try again.";
                        print "An Exception occurred. Message: " . $e->getMessage();
                    }
                    catch(Error $e) {
                        print "The system is currently busy. Please try again soon.";
                        print "An Error occurred. Message: " . $e->getMessage();
                    }
                    ?>
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