<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Click Example</title>
</head>
<body>

<h2>PHP Button Click Example</h2>

<form method="post" action="index.php">
    <label for="inputField">Enter something:</label>
    <input type="text" id="inputField" name="inputField">
    <button type="submit" name="submitButton">Submit</button>
</form>

<?php
// Check if the button has been clicked
if (isset($_POST['submitButton'])) {
    // Retrieve the input value
    $inputValue = htmlspecialchars($_POST['inputField']);
    
    // Display a message
    echo "<p>You entered: " . $inputValue . "</p>";
}
?>

</body>
</html>
