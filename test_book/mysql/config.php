<?php
$servername = "localhost"; // Change if using a different host
$username = "root";        // Your MySQL username
$password = "";            // Your MySQL password

// Create a PDO connection(table name is college)
$conn = new PDO("mysql:host=$servername;dbname=college", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

// Create a mysqli connection(table name is college) //see correct inform this is no correct yet
//$conn = new mysqli("mysql:host=$servername;dbname=college", $username, $password);
//$conn->setAttribute(mysqli::ATTR_ERRMODE,mysqli::ERRMODE_EXCEPTION);

?>