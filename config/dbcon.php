<?php
// Database connection settings (Replace with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sulaimanwebdev";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close the database connection
$conn->close();
?>
