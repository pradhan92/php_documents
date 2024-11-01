<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $token = bin2hex(random_bytes(50));

    $sql = "UPDATE users SET reset_token='$token' WHERE email='$email'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Password reset link has been sent to your email.";
        // Send email with link containing the token (not included in this example)
        // Example: https://yourwebsite.com/reset_password.php?token=YOUR_TOKEN
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<body>
    <form action="forgot_password.php" method="POST">
        Email: <input type="email" name="email" required><br>
        <button type="submit">Send Reset Link</button>
    </form>
</body>
</html>
