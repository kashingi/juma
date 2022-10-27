<?php
        try {
            require ('../includes/connection.php');
            // Has the form been submitted?
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $errors = array();
                //Is the title present? If it is, sanitize it
                $Title = filter_var( $_POST['Title'], FILTER_SANITIZE_STRING);
                if ((!empty($Title)) && (preg_match('/[a-z\.\s]/i',$Title)) && (strlen($Title) <= 12)) {
                    //Sanitize the trimmed Title
                    $Titletrim = $Title;
                }
                else{
                    $Titletrim = NULL; // Title is optional
                }
            
                // Trim the first name
                $Firstname = filter_var( $_POST['Firstname'], FILTER_SANITIZE_STRING);
                if ((!empty($Firstname)) && (preg_match('/[a-z\s]/i',$Firstname)) && (strlen($Firstname) <= 30)) {
                    //Sanitize the trimmed first name
                    $Firstnametrim = $Firstname;
                }
                else{
                    $errors[] ='First name missing or not alphabetic and space characters. Max 30';
                }
                //Is the last name present? If it is, sanitize it
                $Lastname = filter_var( $_POST['Lastname'], FILTER_SANITIZE_STRING);
                if ((!empty($Lastname)) && (preg_match('/[a-z\-\s\']/i',$Lastname)) && (strlen($Lastname) <= 40)) {
                    //Sanitize the trimmed last name
                    $Lastnametrim = $Lastname;
                }
                else{
                    $errors[] ='Last name missing or not alphabetic, dash, quote or space. Max 30.';
                }
                // Check that an email address has been entered
                $Emailtrim = filter_var( $_POST['Email'], FILTER_SANITIZE_EMAIL);
                if ((empty($Emailtrim)) || (!filter_var($Emailtrim, FILTER_VALIDATE_EMAIL)) ) {
                    $errors[] = 'You forgot to enter your email address';
                    $errors[] = ' or the e-mail format is incorrect.';
                }
                //Is the 1st address present? If it is, sanitize it
                $Address = filter_var( $_POST['Address'], FILTER_SANITIZE_STRING);
                if ((!empty($Address)) && (preg_match('/[a-z0-9\.\s\,\-]/i', $Address)) && (strlen($Address) <= 30)) {
                    //Sanitize the trimmed 1st address
                    $Addresstrim = $Address;
                }
                else{
                    $errors[] ='Missing address. Numeric, alphabetic, period, comma, dash, space. Max 30.';
                }
                
                //Is the city present? If it is, sanitize it
                $City = filter_var( $_POST['City'], FILTER_SANITIZE_STRING);
                if ((!empty($City)) && (preg_match('/[a-z\.\s]/i', $City)) && (strlen($City) <= 30)) {
                    //Sanitize the trimmed City
                    $Citytrim = $City;
                }
                else{
                    $errors[] ='Missing city. Only alphabetic, period and space. Max 30.';
                }
                //Is the state or country present? If it is, sanitize it
                $County = filter_var( $_POST['County'], FILTER_SANITIZE_STRING);
                if ((!empty($County)) && (preg_match('/[a-z\.\s]/i', $County)) && (strlen($County) <= 30)) {
                    //Sanitize the trimmed state or country
                    $Countytrim = $County;
                }
                else{
                    $errors[] ='Missing state/country. Only alphabetic, period and space. Max 30.';
                }
                //Is the zip code or post code present? If it is, sanitize it
                $Zip_code = filter_var( $_POST['Zip_code'], FILTER_SANITIZE_STRING);
                $string_length = strlen($Zip_code);
                if ((!empty($Zip_code)) && (preg_match('/[a-z0-9\s]/i', $Zip_code)) && ($string_length <= 30) && ($string_length >= 5)) {
                    //Sanitize the trimmed Zip_code
                    $Zip_codetrim = $Zip_code;
                }
                else{
                    $errors[] ='Missing zip code or post code. Alphabetic, numeric, space only max 30 chars';
                }
                //Is the phone number present? If it is, sanitize it
                $Phone = filter_var( $_POST['Phone'], FILTER_SANITIZE_STRING);
                if ((!empty($Phone)) && (strlen($Phone) <= 30)) {
                    //Sanitize the trimmed Phone number
                    $Phonetrim = (filter_var($Phone, FILTER_SANITIZE_NUMBER_INT));
                    $Phonetrim = preg_replace('/[^0-9]/', '', $Phonetrim);
                }
                else{
                    $Phonetrim = NULL;
                }
                if (empty($errors)) { // If everything's OK.
                    // make the query
                    $q = mysqli_stmt_init($conn);
                    $query ='SELECT Userid FROM users WHERE Email=? AND Userid !=?';
                    mysqli_stmt_prepare($q, $query);
                    // bind $id to SQL Statement
                    mysqli_stmt_bind_param($q, 'si', $Emailtrim, $id);
                    // execute query
                    mysqli_stmt_execute($q);
                    $result = mysqli_stmt_get_result($q);
                    if (mysqli_num_rows($result) == 0) {
                        // e-mail does not exist in another record
                        // Make the update query:
                        $query ='UPDATE users SET Firstname=?, Lastname=?, Email=?, ';
                        $query .='Address=?, City=?, County=?, Zip_code=?, Phone=? WHERE Userid=?';
                        $q = mysqli_stmt_init($conn);
                        mysqli_stmt_prepare($q, $query);
                        // bind values to SQL Statement
                        mysqli_stmt_bind_param($q, 'ssssssssi', $Firstnametrim, $Lastnametrim, $Emailtrim, $Addresstrim, 
                        $Citytrim, $Countytrim, $Zip_codetrim, $Phonetrim, $id);
                        // execute query
                        mysqli_stmt_execute($q);
                        if (mysqli_stmt_execute($q)) {
                            # code...
                            echo "Kashingi Morris Jumah.";
                        }
                        if (mysqli_stmt_affected_rows($q) == 1) { // Update OK
                            // Echo a message if the edit was satisfactory:
                            $errorstring = 'The user has been edited.';
                            echo "<p class=' text-center col-sm-2' style='color:green'>$errorstring</p>";
                            echo "Kashingi Morris Jumah today.";
                        } 
                        else { // Echo a message if the query failed.
                            $errorstring ='The user could not be edited. Did you change anything?';
                            $errorstring .=' We apologize for any inconvenience.'; // Public message.
                            echo "<p class=' text-center col-sm-2' style='color:red'>$errorstring</p>";
                            echo '<p>' . mysqli_error($conn) . '<br />Query: ' . $q . '</p>';
                            // Debugging message.
                            // Message above is only for debug and should not display sql
                        }
                    }
                } 
                else { // Display the errors.
                    // ---------------Process User Errors---------------
                    // Display the users entry errors
                    $errorstring = 'Error! The following error(s) occurred: ';
                    foreach ($errors as $msg) { // Print each error.
                        $errorstring .= " - $msg<br>\n";
                    }
                    $errorstring .= 'Please try again.';
                    echo "<p class=' text-center col-sm-2' style='color:red'>$errorstring</p>";
                }// End of if (empty($errors)) IF.
            } // End of the conditionals
            // Select the user's information:
            $query = "SELECT Firstname, Lastname, Email, Address, City, County, Zip_code, Phone ";
            $query .=" FROM users WHERE Userid=?";
            // id was retrieved from database prepared not needed
            $q = mysqli_stmt_init($conn);
            mysqli_stmt_prepare($q, $query);
           
            // bind $id to SQL Statement
            mysqli_stmt_bind_param($q, 'i', $id);
            // execute query
            mysqli_stmt_execute($q);
            $result = mysqli_stmt_get_result($q);
            if (mysqli_num_rows($result) == 1) { // Valid user ID, display the form.
                // Get the user's information:
                $row = mysqli_fetch_array ($result, MYSQLI_ASSOC);
                // Create the form:
            ?>
            <?php
            }
                if(!isset($errorstring)) {
                    echo '<aside class="col-sm-2">';
                        include('../includes/col.php');
                    echo '</aside>';
                    echo '</div>';
                    echo '<footer class="jumbotron text-center row col-sm-14" style="padding-bottom:1px; padding-top:8px;">';
                }
                else {
                    echo '<footer class="jumbotron text-center col-sm-12" style="padding-bottom:1px; padding-top:8px;">';
                }
                include('../includes/footer.php');
                echo "</footer>";
                echo "</div>";
            }
            catch(Exception $e) // We finally handle any problems here
            {
                print "An Exception occurred. Message: " . $e->getMessage();
                print "The system is busy please try later";
                $date = date('m.d.y h:i:s');
                $errormessage = $e->getMessage();
                //$eMessage = $date . " | Exception Error | '' , $errormessage . |\n";
                //error_log($eMessage,3,ERROR_LOG);
                // e-mail support person to alert there is a problem
                //error_log("Date/Time: $date - Exception Error, Check error log for, "Subject: Exception Error \nFrom: Error Log <errorlog  @helpme.com>" . "\r\n");
            }
            catch(Error $e)
            {
                print "An Error occurred. Message: " . $e->getMessage();
                print "The system is busy please try later";
                $date = date('m.d.y h:i:s');
                $errormessage = $e->getMessage();
                $eMessage = $date . " | Error | '' , $errormessage . |\n";
                // error_log($eMessage,3,ERROR_LOG);
                // e-mail support person to alert there is a problem
                // error_log("Date/Time: $date – Error, Check error log for
            //details", 1, noone@helpme.com, "Subject: Error \nFrom: Error Log <errorlog@helpme.com>"."\r\n");
            }
        ?>