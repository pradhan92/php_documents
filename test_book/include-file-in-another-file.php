<?php

// In PHP, use include 'filename.php'; to insert the content 
// of one file into another for modular code management.
//create one area and use multiple are or multiple page like header and footer

// header.php
echo "<header>";
echo "<h1>Welcome to My Website</h1>";
echo "<nav><a href='index.php'>Home</a> | <a href='about.php'>About</a></nav>";
echo "</header>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>

<?php
// Include the header file
include 'header.php';
?>

<main>
    <h2>Home Page Content</h2>
    <p>This is the content of the home page.</p>
</main>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>About Page</title>
</head>
<body>

<?php
// Include the header file
include 'header.php';
?>

<main>
    <h2>About Us</h2>
    <p>This is the content of the about page.</p>
</main>

</body>
</html>
