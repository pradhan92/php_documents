<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form Handling</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>

<?php
// Initialize variables to store the form data and errors
$name = $email = "";
$nameError = $emailError = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate name
    if (empty($_POST["name"])) {
        $nameError = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // Check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameError = "Only letters and white space allowed";
        }
    }

    // Validate email
    if (empty($_POST["email"])) {
        $emailError = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format";
        }
    }

    // If no errors, process the form
    if (empty($nameError) && empty($emailError)) {
        echo "<h2>Your Input:</h2>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email;
    }
}

// Function to sanitize input data
function test_input($data) {
    $data = trim($data); // Remove extra spaces, tabs, and newlines
    $data = stripslashes($data); // Remove backslashes (\)
    $data = htmlspecialchars($data); // Convert special characters to HTML entities
    return $data;
}

?>

<h2>PHP Form Handling</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $name;?>" required>
    <span class="error">* <?php echo $nameError;?></span>
    <br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $email;?>" required>
    <span class="error">* <?php echo $emailError;?></span>
    <br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
