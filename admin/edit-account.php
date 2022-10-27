<?php
    /*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require("cap.php");
    }
    session_start();
    // #1
    if (isset($_SESSION['Userid']) && ($_SESSION['Userlevel'] == 0)){
        $id = filter_var( $_SESSION['Userid'], FILTER_SANITIZE_STRING);
        define('ERROR_LOG',"errors.log");
    } 
    else {
        //header("Location: login.php");
        //exit();
    }*/
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Your Account Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS File -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity=
        "sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script src="verify.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        
    </head>
    <body>
        <div class="container" style="margin-top:30px">
            <!-- Header Section -->
            <header class="jumbotron text-center row" style="margin-bottom: 2px; background: linear-gradient(white, #0073e6); padding: 5px;">
                <div class="col-sm-2">
                    <img class="img-fluid float-left" src="../bootstrap/image/logo.png" alt="logo">
                </div>  
                <div class="col-sm-8">
                    <h1 class="blue-text mb-4 font-bold">Welcome Administrator</h1>
                </div>
                <nav class="col-sm-2">
                    <div class="btn-group-vertical btn-group-sm" role="group" aria-label="Button group">
                        <button type="button" class="btn btn-secondary" onclick="location.href='logout.php'">Logout</button>
                        <button type="button" class="btn btn-secondary" onclick="location.href = 'users.php'">Erase Entries</button>
                        <button type="button" class="btn btn-secondary" onclick="location.href='password.php'">New password</button>
                    </div>
                </nav>
            </header>
        <!-- Body Section -->
        <div class="row" style="padding-left: 0px;">
            <!-- Left-side Column Menu Section -->
            <nav class="col-sm-2">
                <ul class="nav nav-pills flex-column">
                    <?php include('../includes/navi.php'); ?>
                </ul>
            </nav>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    # code...
                    require 'edit-process-account.php';
                }//End of the amain submit conditional
            ?>
            <!--The middle Column Content Section -->
            <div class="col-sm-8">
            <h2 class="h2 text-center">Edit Your Account Details</h2>
                <h3 class="text-center">For your own security, please remember to log out!</h3>
                <form action="edit-account.php" method="post" name="editform" id="editform">
                    <div class="form-group row">
                        <label for="Title" class="col-sm-4 col-form-label text-right">Title:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Title" name="Title" placeholder="Title" maxlength="12" pattern='[a-zA-Z][a-zA-Z\s\.]*' title="Alphabetic, period and space max 12 characters" value="<?php if (isset($row['Title'])) echo htmlspecialchars($row['Title'], ENT_QUOTES); ?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Firstname" class="col-sm-4 col-form-label text-right">First Name*:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Firstname" name="Firstname" pattern="[a-zA-Z][a-zA-Z\s]*" title="Alphabetic and space only max of 30 characters" placeholder="First Name" maxlength="30" required value="<?php if (isset($row['Firstname'])) echo htmlspecialchars($row['Firstname'], ENT_QUOTES); ?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Lastname" class="col-sm-4 col-form-label text-right">Last Name*:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Lastname" name="Lastname" pattern="[a-zA-Z][a-zA-Z\s\-\']*" title="Alphabetic, dash, quote and space only max of 40 characters" placeholder="Last Name" maxlength="40" required value="<?php if (isset($row['Lastname'])) echo htmlspecialchars($row['Lastname'], ENT_QUOTES); ?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Email" class="col-sm-4 col-form-label text-right">E-mail*:</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="Email" name="Email" placeholder="E-mail" maxlength="60" required value="<?php if (isset($row['Email'])) echo htmlspecialchars($row['Email'], ENT_QUOTES); ?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Address" class="col-sm-4 col-form-label text-right">Address*:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Address" name="Address" pattern="[a-zA-Z0-9][a-zA-Z0-9\s\.\,\-]*" title="Alphabetic, numbers, period, comma, dash and space only max of 30 characters" placeholder="Address" maxlength="30" required value="<?php if (isset($row['Address']))
                            echo htmlspecialchars($row['Address'], ENT_QUOTES); ?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="City" class="col-sm-4 col-form-label text-right">City*:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="City" name="City" pattern="[a-zA-Z][a-zA-Z\s\.]*" title="Alphabetic, period and space only max of 30 characters" placeholder="City" maxlength="30" required value= "<?php if (isset($row['City']))
                            echo htmlspecialchars($row['City'], ENT_QUOTES); ?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="County" class="col-sm-4 col-form-label text-right">County*:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="County" name="County" pattern="[a-zA-Z][a-zA-Z\s\.]*" title="Alphabetic, period and space only max of 30 characters" placeholder="State or Country" maxlength="30" required value="<?php if (isset($row['County'])) echo htmlspecialchars($row['County'], ENT_QUOTES); ?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Zip_code" class="col-sm-4 col-form-label text-right">Zip Code*:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Zip_code" name="Zip_code" pattern="[a-zA-Z0-9][a-zA-Z0-9\s]*" title="Alphabetic, period and space only max of 30 characters" placeholder="Zip Code" minlength="5" maxlength="30" required value="<?php if (isset($row['Zip_code']))
                            echo htmlspecialchars($row['Zip_code'], ENT_QUOTES); ?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Phone" class="col-sm-4 col-form-label text-right">Telephone:</label>
                        <div class="col-sm-8">
                            <input type="tel" class="form-control" id="Phone" name="Phone" placeholder="Phone Number" maxlength="30" value="<?php if (isset($row['Phone'])) echo htmlspecialchars($row['Phone'], ENT_QUOTES); ?>" >
                        </div>
                    </div>
                    <input type="hidden" name="id" value="' . $id . '">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <div class="float-left g-recaptcha" style="padding-left: 80px;" data-sitekey="6LcrQ1wUAAAAAPxlrAkLuPdpY5qwS9rXF1j46fhq"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8 text-center">
                            <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Edit Your Record">
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
    </body>
</html>