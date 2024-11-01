<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the token and new password from POST data
    $token = $_POST['token'];
    $new_password = $_POST['new_password'];

    // Validate input
    if (empty($token) || empty($new_password)) {
        echo "Invalid request.";
        exit;
    }

    // Hash the new password
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Use prepared statements to prevent SQL injection
    if ($stmt = $conn->prepare("UPDATE users SET password = ?, reset_token = NULL WHERE reset_token = ?")) {
        $stmt->bind_param("ss", $hashed_password, $token);

        // Execute the query
        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                // Redirect to index.php after successful password update
                header('Location: index.php');
                exit;
            } else {
                echo "Invalid or expired token.";
            }
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
    <form action="reset_password.php" method="POST">
        <input type="hidden" name="token" value="<?php echo htmlspecialchars($_GET['token']); ?>">
        New Password: <input type="password" name="new_password" required><br>
        <button type="submit">Reset Password</button>
    </form>
</body>
</html>
