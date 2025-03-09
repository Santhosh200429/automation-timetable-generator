<?php 
error_reporting(E_ALL); // Show all errors
ini_set('display_errors', 1); // Display errors on screen

// Define database credentials
$host = "127.0.0.1"; // Try "127.0.0.1" instead of "localhost"
$user = "root";
$password = "";
$database = "timetable";

// Create connection
$con = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$con) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>
