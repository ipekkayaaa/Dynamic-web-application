<?php
// Replace the values with your own database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ASRE_Management";

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>