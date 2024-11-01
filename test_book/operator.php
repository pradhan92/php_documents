<?php
// Arithmetic Operators
$number1 = 15;
$number2 = 4;

// Addition
$sum = $number1 + $number2;
echo "Addition: $number1 + $number2 = $sum<br>"; // Outputs: Addition: 15 + 4 = 19

// Subtraction
$difference = $number1 - $number2;
echo "Subtraction: $number1 - $number2 = $difference<br>"; // Outputs: Subtraction: 15 - 4 = 11

// Multiplication
$product = $number1 * $number2;
echo "Multiplication: $number1 * $number2 = $product<br>"; // Outputs: Multiplication: 15 * 4 = 60

// Division
$quotient = $number1 / $number2;
echo "Division: $number1 / $number2 = $quotient<br>"; // Outputs: Division: 15 / 4 = 3.75

// Modulus
$remainder = $number1 % $number2;
echo "Modulus: $number1 % $number2 = $remainder<br>"; // Outputs: Modulus: 15 % 4 = 3

// Assignment Operators
$counter = 10;
$counter += 5; // Equivalent to $counter = $counter + 5
echo "Assignment (Add): $counter<br>"; // Outputs: Assignment (Add): 15

$counter -= 3; // Equivalent to $counter = $counter - 3
echo "Assignment (Subtract): $counter<br>"; // Outputs: Assignment (Subtract): 12

$counter *= 2; // Equivalent to $counter = $counter * 2
echo "Assignment (Multiply): $counter<br>"; // Outputs: Assignment (Multiply): 24

$counter /= 4; // Equivalent to $counter = $counter / 4
echo "Assignment (Divide): $counter<br>"; // Outputs: Assignment (Divide): 6

$counter %= 3; // Equivalent to $counter = $counter % 3
echo "Assignment (Modulus): $counter<br>"; // Outputs: Assignment (Modulus): 0

// Comparison Operators
$a = 10;
$b = 20;

echo "Comparison Operators:<br>";

echo "$a == $b: " . ($a == $b ? "true" : "false") . "<br>"; // Outputs: 10 == 20: false
echo "$a != $b: " . ($a != $b ? "true" : "false") . "<br>"; // Outputs: 10 != 20: true
echo "$a > $b: " . ($a > $b ? "true" : "false") . "<br>"; // Outputs: 10 > 20: false
echo "$a < $b: " . ($a < $b ? "true" : "false") . "<br>"; // Outputs: 10 < 20: true
echo "$a >= $b: " . ($a >= $b ? "true" : "false") . "<br>"; // Outputs: 10 >= 20: false
echo "$a <= $b: " . ($a <= $b ? "true" : "false") . "<br>"; // Outputs: 10 <= 20: true

// Logical Operators
$x = true;
$y = false;

echo "Logical Operators:<br>";

echo "x && y: " . ($x && $y ? "true" : "false") . "<br>"; // Outputs: x && y: false
echo "x || y: " . ($x || $y ? "true" : "false") . "<br>"; // Outputs: x || y: true
echo "!x: " . (!$x ? "true" : "false") . "<br>"; // Outputs: !x: false

// Concatenation Operator or string Operator
$firstName = "John";
$lastName = "Doe";
$fullName = $firstName . " " . $lastName;
echo "Full Name: " . $fullName . "<br>"; // Outputs: Full Name: John Doe

// Increment and Decrement Operators
$count = 1;
echo "Initial count: $count<br>"; // Outputs: Initial count: 1

$count++; // Post-increment
echo "After post-increment: $count<br>"; // Outputs: After post-increment: 2

$count--; // Post-decrement
echo "After post-decrement: $count<br>"; // Outputs: After post-decrement: 1

echo "Pre-increment: " . ++$count . "<br>"; // Outputs: Pre-increment: 2
echo "Pre-decrement: " . --$count . "<br>"; // Outputs: Pre-decrement: 1

?>
