<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "gasgurudb";
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname); 
if (mysqli_connect_errno()) {
	echo "Failed to connect to database:" . 
	mysqli_connect_error();
}


?>