<?php
// Define a variable with a numerical value
$age = 20;

// Check if the person is eligible to vote
if ($age >= 18) {
    // This block executes if the condition is true
    echo "You are eligible to vote.<br>";
} else {
    // This block executes if the condition is false
    echo "You are not eligible to vote.<br>";
}

// Define another variable for the current time (24-hour format)
$currentHour = date('H');

// Check if it is morning, afternoon, or evening
if ($currentHour >= 5 && $currentHour < 12) {
    // This block executes if the condition is true (Morning)
    echo "Good morning!<br>";
} elseif ($currentHour >= 12 && $currentHour < 18) {
    // This block executes if the first condition is false and this condition is true (Afternoon)
    echo "Good afternoon!<br>";
} else {
    // This block executes if none of the above conditions are true (Evening)
    echo "Good evening!<br>";
}

// Define a variable for the day of the week
$dayOfWeek = date('l'); // 'l' (lowercase L) returns the full textual representation of the day of the week

// Check if it's a weekend or a weekday
if ($dayOfWeek == "Saturday" || $dayOfWeek == "Sunday") {
    // This block executes if today is Saturday or Sunday
    echo "It's the weekend! Enjoy your time off.<br>";
} else {
    // This block executes if today is not Saturday or Sunday
    echo "It's a weekday. Time to work!<br>";
}
?>
