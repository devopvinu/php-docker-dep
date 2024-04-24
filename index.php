<?php
// MySQL connection details
$host = 'mysql';
$user = 'root';
$password = 'root';
$database = 'test_db';

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
} else {
    echo "Database connection successful!";
}

// Close connection
$conn->close();

?>
