<?php
// A session is a way to store information (in variables) to be used across multiple pages.
// Unlike cookies, which are stored on the client's browser, session data is stored on the server.
// Each session is assigned a unique session ID, which is sent back and forth between the client and server.
// This ID helps the server recognize returning clients and retrieve the associated session data.

// Start the session
session_start();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Dummy user data for example purposes
    $username = 'admin';
    $password = 'password123';

    // Check if the username and password are correct
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        // Store the username in the session
        $_SESSION['username'] = $username;
        // Redirect to the welcome page
        header('Location: welcome.php');
        exit();
    } else {
        echo 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post" action="">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
