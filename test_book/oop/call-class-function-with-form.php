<?php
// call class function with form or form handling

// Define a class with a method to process form data
class FormProcessor {
    public function process($name, $email) {
        // Simple validation and processing logic
        if (empty($name) || empty($email)) {
            return "Name and email are required.";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email format.";
        }

        // Process the form data (e.g., save to a database, send an email)
        return "Form submitted successfully. Name: $name, Email: $email";
    }
}

// Check if the form is submitted
$resultMessage = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    // Create an instance of FormProcessor and call the process method
    $processor = new FormProcessor();
    $resultMessage = $processor->process($name, $email);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Processing Example</title>
</head>
<body>
    <h1>Form Submission</h1>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php if ($resultMessage): ?>
        <p><?php echo htmlspecialchars($resultMessage); ?></p>
    <?php endif; ?>
</body>
</html>
