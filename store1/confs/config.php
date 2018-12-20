<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "1234";
	$dbname = "store";

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	mysqli_select_db($conn, $dbname);
?>