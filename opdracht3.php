<?php
// Database connection settings
$db_host = 'localhost';
$db_username = 'SchoolWerk';
$db_password = '123';
$db_name = 'Winkel';

// Createting a connection to the database
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Echo a success message to screen
echo "Connected to database ($db_name).";

// Otherwise close the connection
$conn->close();
?>
