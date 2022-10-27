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
					<h1 class="font-bold">Welcome Administrator</h1>
				</div>
				<div class="col-sm-2">
					<nav class="btn-group-vertical btn-group-sm" role="group" aria-label="button-group">
                        <button type="button" class="btn btn-secondary" onclick="location.href='search.php'">Erase Entries</button>
                        <button type="button" class="btn btn-secondary" onclick="location.href='admin-view-users.php'">Cancel</button>
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
                        # code...
                       // require 'process-login.php';

                    }//End of the amain submit conditional
                ?>
				<div class="col-sm-8">
                    <h2 class="text-center">Welcome to Admin Address Search </h2>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        try
                            {
                            // This script retrieves records from the users table.
                            require ('../includes/connection.php'); // Connect to the db.
                            echo '<p class="text-center">If no record is shown, this is because you had an incorrect  or ';
                            echo 'missing entry in the search form.<br>Click the back button on the browser and try again</p>';
                            $Firstname = htmlspecialchars($_POST['Firstname'], ENT_QUOTES);
                            $Lastname = htmlspecialchars($_POST['Lastname'], ENT_QUOTES);
                            // Since it's a prepared statement below this sanitizing is not needed
                            // However, to consistently retrieve than sanitize is a good habit
                            $query = "SELECT Userid, Lastname, Firstname, Address, City, County, Course, ";
                            $query .= "Zip_code, Phone FROM users WHERE Lastname=? AND Firstname=?";
                            $q = mysqli_stmt_init($conn);
                            mysqli_stmt_prepare($q, $query);
                            // bind values to SQL Statement
                        
                            mysqli_stmt_bind_param($q, 'ss', $Lastname, $Firstname);
                            // execute query
                            mysqli_stmt_execute($q);
                            $result = mysqli_stmt_get_result($q);
                            if ($result) { // If it ran, display the records.
                                // Table header. #1
                                echo '<table class="table table-striped table-sm">
                                    <tr>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                        <th scope="col">Lastname</th>
                                        <th scope="col">Firstname</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">City</th>
                                        <th scope="col">County</th>
                                        <th scope="col">Zip Code</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Course</th>
                                    </tr>';
                                // Fetch and display the records:
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    // Remove special characters that might already be in table to
                                    // reduce the chance of XSS exploits
                                    $Userid = htmlspecialchars($row['Userid'], ENT_QUOTES);
                                    $Lastname = htmlspecialchars($row['Lastname'], ENT_QUOTES);
                                    $Firstname = htmlspecialchars($row['Firstname'], ENT_QUOTES);
                                    $Address = htmlspecialchars($row['Address'], ENT_QUOTES);
                                    $City = htmlspecialchars($row['City'], ENT_QUOTES);
                                    $County = htmlspecialchars($row['County'], ENT_QUOTES);
                                    $Course = htmlspecialchars($row['Course'], ENT_QUOTES);
                                    $Zip_code = htmlspecialchars($row['Zip_code'], ENT_QUOTES);
                                    $Phone = htmlspecialchars($row['Phone'], ENT_QUOTES);
                                    // #2
                                    echo '<tr>
                                            <td scope="row"><a href="edit_user.php?id=' . $Userid . '">Edit</a></td>
                                            <td scope="row"><a href="delete_user.php?id=' . $Userid . '">Delete</a></td>
                                            <td scope="row">' . $Firstname . '</td>
                                            <td scope="row">' . $Lastname . '</td>
                                            <td scope="row">' . $Address . '</td>
                                            <td scope="row">' . $City . '</td>
                                            <td scope="row">' . $County . '</td>
                                            <td scope="row">' . $Zip_code . '</td>
                                            <td scope="row">' . $Phone . '</td>
                                            <td scope="row">' . $Course . '</td>
                                        </tr>';
                                }
                                echo '</table>'; // Close the table.
                                //
                                mysqli_free_result ($result); // Free up the resources.
                            } 
                            else { // If it did not run OK.
                                // Public message:
                                echo '<p class="center-text">The current users could not be retrieved.';
                                echo 'We apologize for any inconvenience.</p>';
                                // Debugging message:
                                echo '<p>' . mysqli_error($conn) . '<br><br>Query: ' . $q . '</p>';
                                //Show $q is debug mode only
                            } // End of if ($result). Now display the total number of records/members.
                            mysqli_close($conn); // Close the database connection.
                        }
                        catch(Exception $e)
                        {
                            print "The system is currently busy. Please try later.";
                            print "An Exception occurred.Message: " . $e->getMessage();
                        }
                        catch(Error $e)
                        {
                            print "The system us busy. Please try later.";
                            print "An Error occurred. Message: " . $e->getMessage();
                        }
                    }

                    ?>
                </div>
				<div class="col-sm-2">
					
					<!--Center column Content-->

					<!--Center Column content -->
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