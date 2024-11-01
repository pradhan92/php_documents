<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and HTML Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Welcome to My Website</h1>

    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $message = "Hello, " . $name . "! Welcome to our website.";
    } else {
        $message = "Hello, Guest! Please enter your name below.";
    }
    
    // Get the current date and time
    $currentDateTime = date('l, F j, Y g:i A');
    ?>

    <p><?php echo $message; ?></p>
    <p>Current Date and Time: <?php echo $currentDateTime; ?></p>

    <form method="post" action="">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
