<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Website and system designer. Kashing74 KE">

        <title>Register Thanks</title>

        <!-- Bootstrap CSS File -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity= "sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
         crossorigin="anonymous">
    </head>
    <body>
    <div class="container" style="margin-top:30px">
        <!-- Header Section -->
        <header class="jumbotron text-center row" style="margin-bottom:2px; background:linear-gradient(white, #0073e6); padding:10px;">
				<div class="col-sm-2">
                <img class="img-fluid float-left" src="../bootstrap/image/logo.png" alt="logo">
				</div>
				<div class="col-sm-8">
					<h1 class="font-bold">Welcome to our Payment Method</h1>
				</div>
				<div class="col-sm-2">
					<nav class="btn-group-vertical btn-group-sm" role="group" aria-label="button-group">
						<button type="button" class="btn btn-secondary" onclick="location.href='../index.php'">Home Page</button>
					</nav>
				</div>
			</header>
            <!-- Body Section -->
            <div class="row" style="padding-left: 0px;">
                <!-- Left-side Column Menu Section -->
                <nav class="col-sm-2">
                    <ul class="nav nav-pills flex-column">
                        <?php include('../includes/col.php'); ?>
                    </ul>
                </nav>
                <!-- Center Column Content Section -->
                <div class="col-sm-8">
                    <h3 class="h2 text-center" >Thank you for registering</h2>
                    <h6 class="text-center">
                        To confirm your registration please verify the course you want to enroll and pay at least half the course fee now.You can use Mpesa or a credit/debit card. When you have completed your registration you will be able to   login to the students' only pages.</h6>
                    <?php
                        try {
                        require ("../includes/connection.php");
                        $query = "SELECT * FROM courses";
                        $result = mysqli_query ($conn, $query); // Run the query.
                        if ($result) { // If it ran OK, display the records.
                            $row = mysqli_fetch_array($result, MYSQLI_NUM);
                            $coursesarray = array(
                                "HTML:", "Laravel:", "Python:",
                                "Web Development:", "Cyber Security:", "Data Science:", "Digital Skills:",
                                 "Oracle per semester:", "USSD per semester:");
                            echo '<h6 class="text-center text-danger">Courses Fee:</h6>' ;
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
                    <p></p>
                    <form action="../bootstrap/image/paypalpng" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="XXXXXXXXXXXXX">
                        <div class="form-group row">
                            <label for="level" class="col-sm-4 col-form-label">*Course</label>
                            <div class="col-sm-8">
                                <select id="level" name="level" class="form-control" required>
                                    <option value="0" >-Select-</option>
                                    <?php //#1
                                        $Course = htmlspecialchars($_GET['class'], ENT_QUOTES);
                                        for ($j = 0, $i = 0; $j < 9; $j++, $i = $i + 1) {
                                            echo '<option value="' . htmlspecialchars($row[$i], ENT_QUOTES) . '" ';
                                            if ((isset($Course)) && ( $Course == $row[$i])) {
                                                echo ' selected ';
                                            }
                                            echo ">" . $coursesarray[$j] . " " . htmlspecialchars($row[$i], ENT_QUOTES) . " &pound;  " . htmlspecialchars($row[$i], ENT_QUOTES) . "&dollar;</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-4">
                                <!-- #2-->
                                <!-- Replace the code below with code provided by PayPal once you obtain a Merchant ID -->

                                <input type="hidden" name="currency_code" value="GBP">
                                <input type="image" src="../bootstrap/image/mpesa.png" name="submit" alt="." style="width:150px; height:150px">

                                    <!-- Replace code above with PayPal provided code -->
                            </div>
                            <div class="col-sm-4">
                                  <p>Mpesa, The safer, easier way to pay from your account to ST Morris' Mobile Training Institute Account and you will receive a verification message.</p>
                            </div>
                        </div>
                    </form>
                    <p>The ST Morris' Mobile Training Institute Administrator will contact you and confirm to you that payment has been made and inform you on the reporting date as per the school curriculumn.</p>
                </div>
                <!-- Right-side Column Content Section -->
                <aside class="col-sm-2">
                    <?php include('../includes/col.php'); ?>
                </aside>
            </div>
            <!-- Footer Content Section -->
            <footer class="jumbotron text-center row" style="padding-bottom:1px; padding-top:8px;">
                <?php include('../includes/footer.php'); ?>
            </footer>
            <?php
            } // end try
            catch(Exception $e)  {
                // We finally handle any problems here
                print "An Exception occurred. Message: " . $e->getMessage();
                print "The system is busy please try later";
            }
            catch(Error $e) {
                print "An Error occurred. Message: " . $e->getMessage();
                print "The system is busy please try again later.";
            }
        ?>
    </body>
</html>