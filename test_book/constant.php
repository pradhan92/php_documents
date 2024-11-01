<?php
// Define a global constant
define('SITE_NAME', 'My Awesome Website');
define('PI', 3.14159);

// Class with constants
class MathConstants {
    const E = 2.71828;
    const PHI = 1.61803;
}

// Function to display site information
function displaySiteInfo() {
    echo "<h1>Welcome to " . SITE_NAME . "!</h1>";
    echo "<p>We use the constant value of PI as " . PI . " for our calculations.</p>";
}

// Function to calculate the circumference of a circle
function calculateCircumference($radius) {
    return 2 * PI * $radius;
}

// Function to calculate the area of a circle
function calculateArea($radius) {
    return PI * $radius * $radius;
}

// Function to display mathematical constants from the class
function displayMathConstants() {
    echo "<h2>Mathematical Constants:</h2>";
    echo "<p>Euler's number (E): " . MathConstants::E . "</p>";
    echo "<p>Golden Ratio (PHI): " . MathConstants::PHI . "</p>";
}

// Display site information
displaySiteInfo();

// Calculate and display circle properties
$radius = 5;
echo "<p>The circumference of a circle with radius $radius is " . calculateCircumference($radius) . ".</p>";
echo "<p>The area of a circle with radius $radius is " . calculateArea($radius) . ".</p>";

// Display mathematical constants
displayMathConstants();
?>
