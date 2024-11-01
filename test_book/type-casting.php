<?php
// Typecasting in PHP is the process of converting a variable from one data type to another.
// PHP provides several ways to cast variables, including using explicit casting operators 
// or built-in functions.

// Initial variables of different types
$integerValue = 42;        // Integer
$floatValue = 3.14;        // Float
$stringValue = "123";      // String

// Display initial types
echo "Original Types:<br>";
echo "Integer: " . gettype($integerValue) . "<br>";
echo "Float: " . gettype($floatValue) . "<br>";
echo "String: " . gettype($stringValue) . "<br>";

// Type Casting

// Casting float to integer
$castedInteger = (int) $floatValue;

// Casting string to integer
$castedStringToInt = (int) $stringValue;

// Casting string to float
$castedStringToFloat = (float) $stringValue;

// Display the results and their types after casting
echo "<br>After Type Casting:<br>";
echo "Float casted to Integer: " . $castedInteger . " (Type: " . gettype($castedInteger) . ")<br>";
echo "String casted to Integer: " . $castedStringToInt . " (Type: " . gettype($castedStringToInt) . ")<br>";
echo "String casted to Float: " . $castedStringToFloat . " (Type: " . gettype($castedStringToFloat) . ")<br>";



//eassy example
// Initial integer variable
$a = 10;

// Casting integer to string
$a = (string) $a;

// Output the result
echo "The value of \$a after casting to string is: " . $a;

?>
