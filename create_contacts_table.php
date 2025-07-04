<?php
// Database connection
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'cars';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo '<h3>Table <b>contacts</b> created successfully or already exists.</h3>';
} else {
    echo '<h3>Error creating table: ' . $conn->error . '</h3>';
}

$conn->close();
?> 