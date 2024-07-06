<?php
$conn = new mysqli('localhost', 'your_username', 'your_password', 'your_database');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>