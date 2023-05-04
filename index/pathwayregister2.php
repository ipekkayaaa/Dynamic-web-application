<?php

include("dbconnection.php");

// check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // get the form data
    $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // insert the data into the database
    $sql = "INSERT INTO Users (fullname, email, password) VALUES ('$fullname', '$email', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta chharset="UTF-8">
        <meta http-equive="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,
        initial-scale=1.0">
        <title>Website With Login & Registration</title>

    <!--custom css file link-->
        <link rel="stylesheet" type="text/css" href="pathwayregister.css">

    </head>
    <body>

         <!-- Project Logo and Header Menu -->
        <header>
            <img src="symbol.jpg" class="logo">
            <nav class="navigation">
                <a href="aboutpathway.php">About Program</a>
                <a href="department.php">Department</a>
                <a href="activities.php">Activities</a>
                <a href="#">Contact Us</a>
                <a href="login.php">
                 <button class="btnLogin-popup">Login</button>
                </a>
            </nav>
        </header>
        <h1>School of Architecture and Design</h1>  
	    <h2>&nbsp;&nbsp;Distinction Pathway Activities</h2>

    <!-- Activity1 countainer -->
    	<div class="register-pathway">
          <button>Register for Pathway</button>
        </div>
	    <div class="container">
		    <div class="activity">
			 <div class="activity-name">Activity 1</div>
		    </div>
		<!-- Activity2 countainer -->
		    <div class="activity">
		     	<div class="activity-name">Activity 2</div>
	    	</div>
		<!-- Activity3 countainer -->
		    <div class="activity">
	    		<div class="activity-name">Activity 3</div>
	    	</div>
		<!-- Activity4 countainer -->
	    	<div class="activity">
	    		<div class="activity-name">Activity 4</div>
	    	</div>
		<!-- Activity5 countainer -->
		    <div class="activity">
	    		<div class="activity-name">Activity 5</div>
	    	</div>
	    </div>
    </body>
</html>
