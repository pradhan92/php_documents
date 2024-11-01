<?php
// Configure PHP to display errors
error_reporting(E_ALL); // Report all types of errors
ini_set('display_errors', 1); // Display errors on the web page

// Example code that will trigger different types of errors
echo "Starting script...<br>";

// Trigger a notice (undefined variable)
echo $undefinedVariable; // Notice: Undefined variable: undefinedVariable

// Trigger a warning (include a non-existent file)
include('nonexistent_file.php'); // Warning: include(nonexistent_file.php): failed to open stream

// Trigger a fatal error (call a non-existent function)
nonExistentFunction(); // Fatal error: Uncaught Error: Call to undefined function nonExistentFunction()

echo "This line will not be executed due to the fatal error.";
// Call the phpinfo() function to display PHP configuration
phpinfo();
?>
