<?php
$servername = "localhost";
$username = "root"; // Default for XAMPP
$password = "";     // Default is empty
$dbname = "foodnest"; // Make sure you have created this DB in phpMyAdmin

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
