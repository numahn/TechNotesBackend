<?php
// Initialize variable for database credentials
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'duality_data';

// Create database connection
$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection was successful
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
echo "Connected successfully";
?>