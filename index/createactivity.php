<?php
include("dbconnection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Website With Login & Registration</title>

	<!--custom css file link-->
	<link rel="stylesheet" type="text/css" href="createactivitystyle.css">

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
	<h1>Co-curricular National Activity</h1>

	<!-- Creating Activity Form -->
	<form name="form" action="postcreateactivity.php" method="POST">
		<fieldset>
			<legend>Activity Information:</legend>
			<label for="activity_name">Activity Name:</label>
			<input type="text" name="activity_name" id="activity_name" required>
			<label for="start_date">Start Date:</label>
			<input type="date" name="start_date" id="start_date" required>
			<label for="end_date">End Date:</label>
			<input type="date" name="end_date" id="end_date" required>
			<label for="time">Time:</label>
			<input type="time" name="time" id="activity_time" required>
			<label for="place">Place:</label>
			<input type="text" name="activity_place" id="actiivty_place" required>
			<label for="activity_type">Activity Type:</label>
			<select name="activity_type" id="activity_type" required>
				<option value="select_type">Select activity type</option>
				<option value="international">International</option>
				<option value="state">State</option>
				<option value="regional">Regional</option>
				<option value="national">National</option>
			</select>
			<label for="activity_desc">Activity Definition:</label>
			<textarea name="activity_desc" id="activity_desc" rows="10" cols="30" required></textarea>
			<label for="contact_name">Contact Name:</label>
			<input type="text" name="contact_name" id="contact_name" required>
			<label for="contact_email">Contact Email:</label>
			<input type="email" name="contact_email" id="contact_email" required>
			<label for="contact_phone">Contact Phone Number:</label>
			<input type="tel" name="contact_phone" id="contact_phone" required>
			<input type="submit" class="submit" name="submit" value="Create Activity">
		</fieldset>
	</form>
</body>

</html>