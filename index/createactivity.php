<?php
    include("connectioonasre.php")
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
	<link rel="stylesheet" type="text/css" href="createactivitystyle.css">

</head>

<body>

	<!-- Project Logo and Header Menu -->
	<header>
		<img src="symbol.jpg" class="logo">
		<nav class="navigation">
			<a href="#">About Program</a>
			<a href="#">Department</a>
			<a href="#">Events</a>
			<a href="#">Contact Us</a>
			<button class="btnLogin-popup">Login</button>
		</nav>
	</header>
	<h1>Co-curricular National Activity</h1>

	<!-- Creating Activity Form -->
	<form name="form" action="postcreateactivity.php" method="POST">
		<fieldset>
			<legend>Activity Information:</legend>
			<label for="activity_name">Activity Name:</label>
			<input type= "activity_name" required>
			<label for="start_date">Start Date:</label>
			<input type="start_date"  required>
			<label for="end_date">End Date:</label>
			<input type="end_date"  required>
			<label for="time">Time:</label>
			<input type="time" required>
			<label for="place">Place:</label>
			<input type="place" required>
			<label for="activity_type">Activity Type:</label>
			<select name="activity_type" required>
				<option value="select_type">Select activity type</option>
				<option value="international">International</option>
				<option value="state">State</option>
				<option value="regional">Regional</option>
				<option value="national">National</option>
			</select>
			<label for="activity_definition">Activity Definition:</label>
			<textarea name="activity_definition" rows="10" cols="30" required></textarea>
			<label for="contact_name">Contact Name:</label>
			<input type="contact_name" required>
			<label for="contact_email">Contact Email:</label>
			<input type="contact_email" required>
			<label for="contact_phone">Contact Phone Number:</label>
			<input type="contact_phone" required>
			<input type="submit" value="Create Activity">
		</fieldset>
	</form>
</body>

</html>