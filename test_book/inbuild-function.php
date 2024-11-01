<?php
// Example of inbuild functions

//[Original string (length)] 
$text = "Hello, World!";
echo strlen($text); // 13

// Get the length of the string
$length = strlen($text); // 13


//[data type]
$var = 10;
var_dump($var); //int(10)

// if data type is string yes or no .if yes show 1 otherwise nothings will show
$var = "tara";
echo is_string($var);
echo is_int($var);

//sub string
$str=" code step by tara";
echo substr($str,10);   //by tara

//[date & time , timezone]
//https://www.php.net/manual/en/    (see in website)

// Print the current date and time
echo "Current date and time: " . date('Y-m-d H:i:s') . "<br/>";
// Print the current date in YYYY-MM-DD format
echo "Current date: " . date('Y-m-d') . "<br/>";
// Print the current time in 24-hour format
echo "Current time: " . date('H:i:s') . "<br/>";
// Print the current date and time in a more readable format
echo "Current date and time: " . date('l, F j, Y \a\t g:i A') . "<br/>";
// Print the current time in 12-hour format with AM/PM
echo "Current time: " . date('g:i A') . "<br/>";
// Print the current date and time with timezone information
echo "Current date and time with timezone: " . date('Y-m-d H:i:s T') . "<br/>";
// Set the default timezone to New York
date_default_timezone_set('America/New_York');
// Print the current date and time in the set timezone
echo "Current date and time in New York: " . date('Y-m-d H:i:s') . "<br/>";


// [php version details]
echo phpinfo();



// Convert the string to uppercase
$uppercaseText = strtoupper($text); // "HELLO, WORLD!"

// Convert the string to lowercase
$lowercaseText = strtolower($text); // "hello, world!"

// Get a substring of the string (starting from index 7, length 6)
$substring = substr($text, 7, 6); // "World!"

// Output results of string functions
echo "Original text: $text<br/>";
echo "Length of the text: $length<br/>";
echo "Uppercase text: $uppercaseText<br/>";
echo "Lowercase text: $lowercaseText<br/>";
echo "Substring: $substring<br/>";

// Example of array functions

// Create an array
$numbers = [5, 2, 9, 1, 5, 6];

// Add a new element to the end of the array
array_push($numbers, 10); // [5, 2, 9, 1, 5, 6, 10]

// Count the number of elements in the array
$numberOfElements = count($numbers); // 7

// Sort the array in ascending order
sort($numbers); // [1, 2, 5, 5, 6, 9, 10]

// Output results of array functions
echo "Array after adding a new element: ";
print_r($numbers); // Outputs: Array ( [0] => 1 [1] => 2 [2] => 5 [3] => 5 [4] => 6 [5] => 9 [6] => 10 )
echo "<br/>";
echo "Number of elements in the array: $numberOfElements<br/>";
?>
