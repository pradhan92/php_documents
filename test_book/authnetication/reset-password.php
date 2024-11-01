<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST['token'];
    $new_password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "UPDATE users SET password = '$new_password', reset_token = NULL WHERE reset_token = '$token'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Password reset successful. <a href='login.php'>Login here</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<?php if (isset($_GET['token'])): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
</head>
<body>
    <h2>Reset Password</h2>
    <form method="post">
        <input type="hidden" name="token" value="<?= $_GET['token'] ?>">
        <label for="password">New Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Reset Password</button>
    </form>
</body>
</html>
<?php else: ?>
    <p>Invalid token.</p>
<?php endif; ?>
