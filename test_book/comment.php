<?php
// Single-line comment using double slashes

// Define a variable for the website name
$siteName = "My Awesome Website"; // This variable holds the name of the site

# Another single-line comment using the hash symbol
# This comment style is also used for single-line comments

/*
 Multi-line comment:
 This block of comments can span multiple lines.
 It is useful for providing detailed explanations or
 commenting out large sections of code.
*/

// Define a function to display site information
function displaySiteInfo() {
    global $siteName; // Access the global variable $siteName within this function

    echo "<h1>Welcome to " . $siteName . "!</h1>";

    /*
     * You can also use multi-line comments within a function.
     * Here we are using echo to display the site name
     * on the web page.
     */
}

// Define a function to calculate the area of a rectangle
function calculateRectangleArea($width, $height) {
    // Calculate the area of the rectangle
    $area = $width * $height;
    
    return $area; // Return the calculated area
}

// Example usage
displaySiteInfo(); // Call the function to display site info

// Define dimensions
$width = 10; // Width of the rectangle
$height = 5; // Height of the rectangle

// Calculate and display the area
$area = calculateRectangleArea($width, $height);
echo "<p>The area of a rectangle with width $width and height $height is $area.</p>";

/*
 * This script demonstrates the use of different types of comments
 * in PHP. Comments help to document and explain the code,
 * making it easier to maintain and understand.
 */

?>
