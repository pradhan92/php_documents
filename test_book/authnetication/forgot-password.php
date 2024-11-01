<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $token = bin2hex(random_bytes(50)); // Generate a reset token

    $sql = "UPDATE users SET reset_token = '$token' WHERE email = '$email'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Password reset link sent to your email. <a href='resetpassword.php?token=$token'>Reset Password</a>";
        // Normally, you'd send the reset link via email
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
</head>
<body>
    <h2>Forgot Password</h2>
    <form method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Send Reset Link</button>
    </form>
</body>
</html>
