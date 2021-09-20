<?php
	//Connection
	$servername = "localhost";
	$username = "roid17618898_root";
	$password = "b|f\>Q47A+kJr^Ku";
	$dbname = "id17618898_spark";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>