<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Use your actual InfinityFree database credentials
$host = "sql204.infinityfree.com";  
$user = "if0_38477563";  // Your actual database username
$password = "SANDYWEDSANJU";  // Found in MySQL Details
$database = "if0_38477563_timetable";  // Your actual database name

// Connect to MySQL
$con = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$con) {
    die("Database Connection Failed: " . mysqli_connect_error());
} else {
    echo "✅ Database Connected Successfully!";
}
?>
