<?php
// Initialize variable for database credentials
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'duality_data';

$first_name= $_POST["first_name"];
$last_name= $_POST["last_name"];
$username = $_POST["username"];
$dob = $_POST["dob"]; // FORMAT YYYY-MM-DD
$pwd = $_POST["pwd"];

// Create database connection
  $dblink = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection was successful
  if ($dblink->connect_error) {
     die("Connection failed: " . $dblink->connect_error);
  }
  echo "Connected successfully";
?>