<?php
// db.php - Database connection file
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'cars';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}
?> 