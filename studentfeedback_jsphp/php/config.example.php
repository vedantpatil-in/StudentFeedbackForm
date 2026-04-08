<?php
	ob_start(); //Turns on output buffering 

	$timezone = date_default_timezone_set("Europe/London");
	
	// Database Configuration
	// Update these credentials with your local database setup
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";  // Leave empty for default XAMPP setup, or enter your password
	$db_name = "feedback";
	
	$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>
