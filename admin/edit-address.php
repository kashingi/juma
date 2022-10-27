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
                      <button type="button" class="btn btn-secondary" onclick="location.href='edit-addres.php'">Erase Entries</button>
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
                <h2 class="text-center">Administration Edit Address</h2>

                    <?php
                        try {
                        // After clicking the Edit link in the found_record.php page. This code is executed
                        // The code looks for a valid user ID, either through GET or POST:
                        if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) {
                            $id = htmlspecialchars($_GET['id'], ENT_QUOTES);
                        } 
                        elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) {
                            // Form submission.
                            $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
                        } 
                        else { // No valid ID, kill the script.
                            echo '<p class="text-center">This page has been accessed in error.</p>';
                            include ('includes/footer.php');
                            exit();
                        }
                        require ('../includes/connection.php');
                        // Has the form been submitted?
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $errors = array();
                            // Look for the first name:
                            // Sanitize the first name
                            $Firstname = filter_var( $_POST['Firstname'], FILTER_SANITIZE_STRING);
                            if ((!empty($Firstname)) && (preg_match('/[a-z\s]/i',$Firstname)) && (strlen($Firstname) <= 30)) {
                                //Sanitize the trimmed first name
                                $Firstnametrim = $Firstname;
                            }
                            else{
                                $errors[] = 'First name missing or not alphabetic and space characters. Max 30';
                            }
                            
                            //Is the last name present? If it is, sanitize it
                            $Lastname = filter_var( $_POST['Lastname'], FILTER_SANITIZE_STRING);
                            if ((!empty($Lastname)) && (preg_match('/[a-z\-\s\']/i',$Lastname)) && (strlen($Lastname) <= 40)) {
                                //Sanitize the trimmed last name
                                $Lastnametrim = $Lastname;
                            }
                            else{
                                $errors[] = 'Last name missing or not alphabetic, dash, quote or space. Max 30.';
                            }
                            //Is the 1st address present? If it is, sanitize it
                            $Address = filter_var( $_POST['Address'], FILTER_SANITIZE_STRING);
                            if ((!empty($Address)) && (preg_match('/[a-z0-9\.\s\,\-]/i', $Address)) && (strlen($Address) <= 30)) {
                                //Sanitize the trimmed 1st address
                                $Addresstrim = $Address;
                            }
                            else{
                                $errors[] = 'Missing address. Numeric, alphabetic, period, comma, dash, space. Max 30.';
                            }
                            //If the 2nd address is present? If it is, sanitize it
                            //I have removed Address2
                            
                            //Is the city present? If it is, sanitize it
                            $City = filter_var( $_POST['City'], FILTER_SANITIZE_STRING);
                            if ((!empty($City)) && (preg_match('/[a-z\.\s]/i', $City)) && (strlen($City) <= 30)) {
                                //Sanitize the trimmed City
                                $Citytrim = $City;
                            }
                            else{
                                $errors[] = 'Missing city. Only alphabetic, period and space. Max 30.';
                            }
                            $Course = filter_var( $_POST['Course'], FILTER_SANITIZE_STRING);
                            if ((!empty($Course)) && (preg_match('/[a-z0-9\.\s\,\-]/i', $Course)) && (strlen($Course) <= 30)) {
                                //Sanitize the trimmed 1st Course
                                $Coursetrim = $Course;
                            }
                            else{
                                $errors[] = 'Missing Course. Numeric, alphabetic, period, comma, dash, space. Max 30.';
                            }
                            //Is the state or country present? If it is, sanitize it
                            $County = filter_var( $_POST['County'], FILTER_SANITIZE_STRING);
                            if ((!empty($County)) && (preg_match('/[a-z\.\s]/i', $County)) && (strlen($County) <= 30)) {
                                //Sanitize the trimmed state or country
                                $Countytrim = $County;
                            }
                            else{
                                $errors[] = 'Missing state/country. Only alphabetic, period and space. Max 30.';
                            }
                        
                            //Is the zip code or post code present? If it is, sanitize it
                            $Zip_code = filter_var( $_POST['Zip_code'], FILTER_SANITIZE_STRING);
                            $string_length = strlen($Zip_code);
                            if ((!empty($Zip_code)) && (preg_match('/[a-z0-9\s]/i', $Zip_code)) && ($string_length <= 30) && ($string_length >= 5)) {
                                //Sanitize the trimmed Zip_code
                                $Zip_codetrim = $Zip_code;
                            }
                            else{
                                $errors[] = 'Missing zip-post code. Alphabetic, numeric, space. Max 30 characters';
                            }
                            //Is the phone number present? If it is, sanitize it
                            $Phone = filter_var( $_POST['Phone'], FILTER_SANITIZE_STRING);
                            if ((!empty($Phone)) && (strlen($Phone) <= 30)) {
                                //Sanitize the trimmed Phone number
                                $Phonetrim = (filter_var($Phone, FILTER_SANITIZE_NUMBER_INT));
                                $Phonetrim = preg_replace('/[^0-9]/', ' ' , $Phonetrim);
                            }
                            else{
                                $Phonetrim = NULL;
                            }
                            if (empty($errors)) { // If everything's OK.
                                $query = 'UPDATE users SET Firstname=?, Lastname=?, Address=?, City=?, Course=?,';
                                $query .= 'County=?, Zip_code=?, Phone=? WHERE Userid=? LIMIT 1';
                                $q = mysqli_stmt_init($conn);
                                mysqli_stmt_prepare($q, $query);
                                // bind values to SQL Statement
                                mysqli_stmt_bind_param($q, 'sssssssss', $Firstnametrim, $Lastnametrim, $Addresstrim, 
                                 $Citytrim, $Coursetrim, $Countytrim, $Zip_codetrim, $Phonetrim, $id);
                                // execute query
                                mysqli_stmt_execute($q);
                                if (mysqli_stmt_affected_rows($q) == 1) { // Update OK
                                    // Echo a message if the edit was satisfactory:
                                    echo '<h3 class="text-center">The user has been edited.</h3>';
                                } 
                                else { // Echo a message if the query failed.
                                    echo '<p class="text-center">The user could not be edited due to a system error.';
                                    echo ' We apologize for any inconvenience.</p>'; // Public message.
                                    echo '<p>' . mysqli_error($conn) . '<br />Query: ' . $q . '</p>';
                                    
                                    // Debugging message.
                                    // Message above is only for debug and should not display sql in live mode
                                }
                            } 
                            else { // Display the errors.
                                echo '<p class="text-center">The following error(s) occurred:<br />';
                                    foreach ($errors as $msg) { // Echo each error.
                                        echo " - $msg<br />\n";
                                    }
                                echo '</p><p>Please try again.</p>';
                            } // End of if (empty($errors))section.
                        } // End of the conditionals
                        // Select the user's information to display in textboxes:
                        $q = mysqli_stmt_init($conn);
                        $query = "SELECT * FROM users WHERE Userid=?";
                        mysqli_stmt_prepare($q, $query);
                        // bind $id to SQL Statement
                        mysqli_stmt_bind_param($q, 'i', $id);
                        // execute query
                        mysqli_stmt_execute($q);
                        $result = mysqli_stmt_get_result($q);
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        if (mysqli_num_rows($result) == 1) {
                            // Valid user ID, display the form.
                            // Get the user's information:
                            // Create the form:
                            ?>
                            <h2 class="h2 text-center">Edit User</h2>
                            <h3 class="text-center">Items marked with an asterisk * are required</h3>
                            <form action="edit-address.php" method="post" name="editform" id="editform">
                                <div class="form-group row">
                                    <label for="Title" class="col-sm-4 col-form-label text-right">Title:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="Title" name="Title" placeholder="Title" maxlength="12" pattern='[a-zA-Z][a-zA-Z\s\.]*' Title="Alphabetic, period and space max 12 characters" value= "<?php if (isset($row['Title'])) echo htmlspecialchars($row['Title'], ENT_QUOTES); ?>" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Firstname" class="col-sm-4 col-form-label text-right">First Name*:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="Firstname" name="Firstname" pattern="[a-zA-Z][a-zA-Z\s]*" title="Alphabetic and space only max of 30 characters" placeholder="First Name" maxlength="30" required value= "<?php if (isset($row['Firstname']))  echo htmlspecialchars($row['Firstname'], ENT_QUOTES); ?>" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Lastname" class="col-sm-4 col-form-label text-right">Last Name*:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="Lastname" name="Lastname" pattern="[a-zA-Z][a-zA-Z\s\-\']*" title="Alphabetic, dash, quote and space only max of 40 characters" placeholder="Last Name" maxlength="40" required value= "<?php if (isset($row['Lastname']))
                                        echo htmlspecialchars($row['Lastname'], ENT_QUOTES); ?>" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Address" class="col-sm-4 col-form-label text-right">Address*:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="Address" name="Address" pattern="[a-zA-Z0-9][a-zA-Z0-9\s\.\,\-]*" title="Alphabetic, numbers, period, comma, dash and space only max of 30 characters" placeholder="Address" maxlength="30" required value= "<?php if (isset($row['Address'])) echo htmlspecialchars($row['Address'], ENT_QUOTES); ?>" >
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="City" class="col-sm-4 col-form-label text-right">City*:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="City" name="City" pattern="[a-zA-Z][a-zA-Z\s\.]*" title="Alphabetic, period and space only max of 30 characters" placeholder="City" maxlength="30" required value="<?php if (isset($row['City'])) echo htmlspecialchars($row['City'], ENT_QUOTES); ?>" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Course" class="col-sm-4 col-form-label text-right">Address:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="Course" name="Course" pattern="[a-zA-Z0-9][a-zA-Z0-9\s\.\,\-]*" title="Alphabetic, numbers, period, comma, dash and space only max of 30 characters" placeholder="Course" maxlength="30" value= "<?php if (isset($row['Course']))
                                        echo htmlspecialchars($row['Course'], ENT_QUOTES); ?>" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="County" class="col-sm-4 col-form-label text-right">Country/state*:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="County" name="County" pattern="[a-zA-Z][a-zA-Z\s\.]*" title="Alphabetic, period and space only max of 30 characters" placeholder="State or Country" maxlength="30" required value="<?php if (isset($row['County'])) echo htmlspecialchars($row['County'], ENT_QUOTES); ?>" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Zip_code" class="col-sm-4 col-form-label text-right">Zip/Postal Code*:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="Zip_code" name="Zip_code" pattern="[a-zA-Z0-9][a-zA-Z0-9\s]*" title="Alphabetic, period and space only max of 30 characters" placeholder="Zip or Postal Code" minlength="5" maxlength="30" required value="<?php if (isset($row['Zip_code'])) echo htmlspecialchars($row['Zip_code'], ENT_QUOTES); ?>" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Phone" class="col-sm-4 col-form-label text-right">Telephone:</label>
                                    <div class="col-sm-8">
                                        <input type="tel" class="form-control" id="Phone" name="Phone" placeholder="Phone Number" maxlength="30" value="<?php if (isset($row['Phone'])) echo htmlspecialchars($row['Phone'], ENT_QUOTES); ?>" >
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $id ?>" />
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"></label>
                                    <div class="col-sm-8">
                                        <div class="float-left g-recaptcha" data-sitekey="Yourdatakeygoeshere"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label"></label>
                                    <div class="col-sm-8">
                                        <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Edit User">
                                    </div>
                                </div>
                            </form>
                            <?php
                        } 
                        else { // The user could not be validated
                            echo '<p class="text-center">
                            This page has been accessed in error.</p>';
                            }
                            mysqli_stmt_free_result($q);
                            mysqli_close($conn);
                        }
                        catch(Exception $e)
                        {
                        print "The system is busy. Please try later";
                        print "An Exception occurred.Message: " . $e->getMessage();
                        }
                        catch(Error $e)
                        {
                        print "The system is currently busy. Please try again later";
                        print "An Error occurred. Message: " . $e->getMessage();
                        }
                    ?>

                </div>
				<!-- <div class="col-sm-2">
					
					<!--Center column Content-->

					<!--Center Column content -->
					<!-- Right-side Column Content Section 
					<aside class="float-left">
						<?php 
                            include '../includes/col.php';
                        ?>
					</aside>
				</div> -->
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