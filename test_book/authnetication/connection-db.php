<?php
// this is the database connection file name is db.php
// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "user_management";

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
