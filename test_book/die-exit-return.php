<?php
// 1. die and exit
  // Both die and exit are essentially the same in PHP. They are used to terminate script execution.
  // You can use them interchangeably.
     // a.die(): Outputs a message (if provided) and terminates the current script.
     // b.exit(): Does the same as die(), making them functionally identical.

// 2. return:-return is used to return a value from a function or to stop the execution of a function 
//without returning a value. Unlike die and exit,return does not terminate the script but 
//exits the function or file it is used in

function checkUserStatus($status) {
    if ($status == "inactive") {
        return "User is inactive.";
    }

    echo "User is active.<br>";
}

// Using return in a function
echo checkUserStatus("inactive") . "<br>"; // This will return a message and stop execution within the function
echo checkUserStatus("active") . "<br>";   // This will continue execution

// Using die
echo "Checking database connection...<br>";
$connected = false; // Simulating a failed connection
if (!$connected) {
    die("Error: Unable to connect to the database.<br>"); // Terminating script if not connected
}
echo "This line will not be executed because die() was called above.<br>";

// Using exit
echo "Processing user data...<br>";
$processing = false; // Simulating a failed process
if (!$processing) {
    exit("Error: Failed to process user data.<br>"); // Terminating script if processing failed
}
echo "This line will not be executed because exit() was called above.<br>";

?>
