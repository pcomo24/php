<?php

$server = "localhost";
$username = "root";
$password = "root";
$db = "first_mysql";

//make connection
$conn = mysqli_connect( $server, $username, $password, $db );

//check connection
if (!$conn) {
  die( "connection failed: " . mysqli_connect_error() );
}

//echo "Connected successfully!";
 ?>
