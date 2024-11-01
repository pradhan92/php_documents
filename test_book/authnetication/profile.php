<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = $user_id";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>
    <h1>Welcome, <?= $user['name'] ?></h1>
    <p>Email: <?= $user['email'] ?></p>
    <a href="editprofile.php">Edit Profile</a> | 
    <a href="logout.php">Logout</a>
</body>
</html>
