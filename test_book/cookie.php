<?php
// Cookies in PHP are a way to store data on the client's browser to track or maintain information
//  about the user's session or preferences across multiple pages. Here is a comprehensive example
//  to demonstrate the use of cookies in PHP, including setting, retrieving, updating, and deleting cookies.

// Cookie name
$cookie_name = "user";
$cookie_value = "John Doe";
$expiry_time = time() + (86400 * 30); // 30 days from now
$cookie_path = "/";

// Check if the 'action' parameter is set to 'delete'
if (isset($_GET['action']) && $_GET['action'] === 'delete') {
    // Delete the cookie by setting its expiry time to a past time
    setcookie($cookie_name, "", time() - 3600, $cookie_path);
    echo "<p>Cookie '{$cookie_name}' has been deleted.</p>";
} else {
    // Set the cookie if it's not already set
    if (!isset($_COOKIE[$cookie_name])) {
        setcookie($cookie_name, $cookie_value, $expiry_time, $cookie_path);
        echo "<p>Cookie '{$cookie_name}' has been set.</p>";
    } else {
        // Display the current value of the cookie
        echo "<p>Cookie '{$cookie_name}' is set. Value: " . htmlspecialchars($_COOKIE[$cookie_name]) . "</p>";
    }
}

// Links to manage the cookie
echo '<p><a href="?">Refresh Page</a> | <a href="?action=delete">Delete Cookie</a></p>';
?>
