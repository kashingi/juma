<?php
	session_start();
    if (!isset($_SESSION['Userlevel']) || ($_SESSION['Userlevel'] != 1)) {
        # code...
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
                        <button type="button" class="btn btn-secondary" onclick="location.href='search.php'">Search</button>
                        <button type="button" class="btn btn-secondary" onclick="location.href='search-address.php'">Address</button>
				        <button type="button" class="btn btn-secondary" onclick="location.href='admin.php'">Cancel</button>
			        </nav>
				</div>
			</header>
            <!-- Body Section -->
            <div class="row" style="align-content:center; margin-left:100px">
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
                    <h5 class="text-center">These are the registered users</h5>
                    <p>
                        <?php
                            try {
                                // This script retrieves all the records from the users table.
                                require('../includes/connection.php'); // Connect to the database.
                                //set the number of rows per display page
                                $pagerows = 4;
                                // Has the total number of pages already been calculated?
                                if ((isset($_GET['p']) && is_numeric($_GET['p']))) {
                                    //already been calculated
                                    $pages = htmlspecialchars($_GET['p'], ENT_QUOTES);
                                    // make sure it is not executable XSS
                                }
                                else {//use the next block of code to calculate the number of pages
                                    //First, check for the total number of records
                                    $query = "SELECT COUNT(Userid) FROM users";
                                    $result = mysqli_query ($conn, $query);
                                    $row = mysqli_fetch_array ($result, MYSQLI_NUM);
                                    $records = htmlspecialchars($row[0], ENT_QUOTES);
                                    // make sure it is not executable XSS
                                    //Now calculate the number of pages

                                    if ($records > $pagerows){
                                        //if the number of records will fill more than one page
                                        //Calculate the number of pages and round the result up
                                        // to the nearest integer
                                        $pages = ceil ($records/$pagerows);
                                    }
                                    else {
                                        $pages = 1;
                                    }
                                }//page check finished
                                //Declare which record to start with
                                if ((isset($_GET['s'])) &&( is_numeric($_GET['s'])))  {
                                    $start = htmlspecialchars($_GET['s'], ENT_QUOTES);
                                    // make sure it is not executable XSS
                                }
                                else {
                                    $start = 0;
                                }
                                $query = "SELECT CONCAT(Lastname, '    ', Firstname) AS name, Email, DATE_FORMAT(registration_date, '%M %d, %Y') AS";
                                $query .=" regdat, Course, Paid, Userid FROM users ORDER BY registration_date DESC LIMIT ?, ?";
                                $q = mysqli_stmt_init($conn);
                                mysqli_stmt_prepare($q, $query);
                                // bind $id to SQL Statement
                                mysqli_stmt_bind_param($q, "ii", $start, $pagerows);
                                // execute query
                                mysqli_stmt_execute($q);
                                $result = mysqli_stmt_get_result($q);
                                if ($result) { // #2
                                    // If it ran OK (records were returned), display the records.
                                    // Table header
                                    echo '<table class="table table-striped">
                                    <tr>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Date Registered</th>
                                        <th scope="col">Couse</th>
                                        <th scope="col">Paid</th>
                                    </tr>';
                                    // Fetch and print all the records:
                                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                        // Remove special characters that might already be in table to
                                        // reduce the chance of XSS exploits #3
                                        $Userid = htmlspecialchars($row['Userid'], ENT_QUOTES);
                                        $Name = htmlspecialchars($row['name'], ENT_QUOTES);
                                        $Email = htmlspecialchars($row['Email'], ENT_QUOTES);
                                        $registration_date = htmlspecialchars($row['regdat'], ENT_QUOTES);
                                        $Course = htmlspecialchars($row['Course'], ENT_QUOTES);
                                        $Paid = htmlspecialchars($row['Paid'], ENT_QUOTES);
                                        echo '<tr>
                                                <td><a href="edit_user.php?id=' . $Userid . '">Edit</a></td>
                                                <td><a href="delete_user.php?id=' . $Userid . '">Delete</a></td>
                                                <td>' . $Name . '</td>
                                                <td>' . $Email . '</td>
                                                <td>' . $registration_date . '</td>
                                                <td>' . $Course . '</td>
                                                <td>' . $Paid . '</td>
                                            </tr>';
                                    }
                                    echo '</table>'; // Close the table.
                                    mysqli_free_result ($result); // Free up the resources.
                                }
                                else { // If it did not run OK.
                                    // Error message:
                                    echo '<p class="text-center">The current users could not be ';
                                    echo 'retrieved We apologize for any inconvenience.</p>';
                                    // Debug message:
                                    echo '<p>' . mysqli_error($conn) . '<br><br>Query: ' . $q . '</p>';
                                        exit;
                                } // End of else ($result)
                                // Now display the total number of records/members.
                                $q = "SELECT COUNT(Userid) FROM users";
                                $result = mysqli_query ($conn, $q);
                                $row = mysqli_fetch_array ($result, MYSQLI_NUM);
                                $members = htmlspecialchars($row[0], ENT_QUOTES);
                                mysqli_close($conn); // Close the database connection.
                                $echostring = "<p class='text-center'>Total membership: $members </p>";
                                $echostring .= "<p class='text-center' >";
                                if ($pages > 1){
                                    //What nuumber is the current  ?
                                    $current_page = ($start / $pagerows) + 1;
                                    //If the page is not the first page create a prevous link
                                    if ($current_page != 1) {
                                        $echostring .= '<a href="admin-view-users.php?s=' .($start - $pages). '&p=' .$pages. '" style="margin-right: 100px">Previous</a>    ';
                                    }
                                    //Create next link
                                    if ($current_page != $pages) {
                                        $echostring .= '<a href="admin-view-users.php?s=' .($start + $pages). '&p=' .$pages. '"style="margin-left: 45px">Next</a>';
                                    }
                                    $echostring .='</p>';
                                    echo $echostring;
                                } 
                            } //end of try
                            catch(Exception $e) // We finally handle any problems here
                            {
                                print "An Exception occurred. Message: " . $e->getMessage();
                                print "The system is busy please try later";
                            }
                            catch(Error $e) {
                                print "An Error occurred. Message: " . $e->getMessage();
                                print "The system is busy please try again later.";
                            }
                        ?>
                    </p>

                </div>
				
				<div class="col-sm-2">
					
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