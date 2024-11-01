<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
</head>
<body>

<h2>Submit Data</h2>

<!-- Form using GET method -->
<form action="process.php" method="get">
    <h3>GET Request</h3>
    <label for="name_get">Name:</label>
    <input type="text" id="name_get" name="name_get">
    <button type="submit">Submit GET</button>
</form>

<!-- Form using POST method -->
<form action="process.php" method="post">
    <h3>POST Request</h3>
    <label for="name_post">Name:</label>
    <input type="text" id="name_post" name="name_post">
    <button type="submit">Submit POST</button>
</form>

</body>
</html>
<?php
// Handling GET request
if (isset($_GET['name_get'])) {
    $name_get = htmlspecialchars($_GET['name_get']);
    echo "<h2>GET Request Received</h2>";
    echo "<p>Name: " . $name_get . "</p>";
}

// Handling POST request
if (isset($_POST['name_post'])) {
    $name_post = htmlspecialchars($_POST['name_post']);
    echo "<h2>POST Request Received</h2>";
    echo "<p>Name: " . $name_post . "</p>";
}
?>
