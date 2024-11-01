<?php
// Connect to MySQL database
$conn = new mysqli(SERVER_NAME, USERNAME, PASSWORD, DATABASE);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
