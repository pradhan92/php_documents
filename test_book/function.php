<?php
//# simple function 

//declearation of function
 function test(){
    echo"test function work successfully";
 }

 //call the function
 test();

 //# nested function

// Define the dummy function
function dummy() {
    echo "<h2>User Detail</h2>";
}

// Define the function to display user details
function displayUserDetails(){
    dummy(); // Call the dummy function abvoe top
    echo "User name is Tara";
    echo "<br/>"; // Corrected line break syntax
    echo "User age: 32"; // Fixed missing space after colon
    echo "<br/>"; // Corrected line break syntax
    echo "Address: Ilam Nepal"; // Fixed the typo and added a space after the colon
    echo "<br/>"; // Corrected line break syntax
}

// Call the function to display user details
displayUserDetails();


//default parameter in php function(in this case we know only one parametor and one is unknown )
#example 1
// Function to greet a user with a default name
function greet($name = "Guest") {
    echo "Hello, $name!";
}
// Example usage(in this case we know the greet hello but do't know name)
greet("Alice"); // Outputs: Hello, Alice!
echo "<br>";
greet(); // Outputs: Hello, Guest!

#example 2
function fruits($name,$color="red"){
    echo"this is $name and its color is $color.";
}
fruits();

//#  Define a function with parameters and a return value
//example 3
function sum($a,$b){
    echo $a+$b;
    echo"<br/>";
}
sum(20,20);
sum(400,50);

//example 2
function userData($name,$color){
    echo"<h2 style='color:$color'>$name</h2>";
    echo"<br/>";
}
userData("tara","green");
userData("pradhan","red");


//nested function
//example 1
// function test(){
//     echo "this the test function<br/>";
//     function nestedTest(){
//         echo "This is the Nested function";
//             }
//         }
// test();
// nestedTest();


#echo` and `return differance
// In PHP, `echo` and `return` serve distinct purposes: `echo` is used to 
// output data directly to the browser or console, displaying text, variables,
//  or HTML content without affecting the flow of the program, while `return`
//   is employed within functions to send a value back to the caller, halting 
//   further execution of the function and allowing the returned value to be 
//   used in subsequent code. Essentially, `echo` is for presenting information,
//    whereas `return` is for providing results from functions.

//example 3
function userName(){
    return"tara";
}
echo"<h5>Hi this is Mr" .userName()."</h5>";

//example 4
function calculateRectangleArea($width, $height) {
    // Validate parameters
    if ($width <= 0 || $height <= 0) {
        // Return an error message if dimensions are invalid
        return "Width and height must be positive numbers.";
    }
    
    // Calculate the area
    $area = $width * $height;

    // Return the calculated area
    return $area;
}


//variable function 
// function test(){
//     echo "test function is called";
// }
// $testing = "test";
// $testing();


//callback function
#example 1
// function test(){
//     echo "test function is called";
// }
// $testing = test;
// function main( $passingParametor){
//     $passingParametor();
// }
// main($testing);

# example 2
// Define a function that processes an array with a callback
function processArray(array $array, callable $callback) {
    $result = [];
    foreach ($array as $item) {
        // Apply the callback function to each item
        $result[] = $callback($item);
    }
    return $result;
}

// Define a callback function to double the value
function doubleValue($value) {
    return $value * 2;
}

// Define a callback function to square the value
function squareValue($value) {
    return $value * $value;
}

// Sample array of numbers
$numbers = [1, 2, 3, 4, 5];

// Process the array with the 'doubleValue' callback
$doubledNumbers = processArray($numbers, 'doubleValue');
echo "Doubled Values: " . implode(", ", $doubledNumbers) . "<br/>"; // Output: Doubled Values: 2, 4, 6, 8, 10

// Process the array with the 'squareValue' callback
$squaredNumbers = processArray($numbers, 'squareValue');
echo "Squared Values: " . implode(", ", $squaredNumbers) . "<br/>"; // Output: Squared Values: 1, 4, 9, 16, 25



// Define a function that demonstrates variable scope
function demonstrateScope() {
    // Local variable
    $localVariable = "I'm local!";
    
    // Inner function
    function innerFunction() {
        // Use of the global keyword to access a global variable
        global $globalVariable;
        // Modify the global variable
        $globalVariable = "Modified in innerFunction!";
    }
    
    // Call inner function
    innerFunction();
    
    // Print the local variable
    echo $localVariable . "\n"; // Output: I'm local!
    
    // Print the global variable
    global $globalVariable;
    echo $globalVariable . "\n"; // Output: Modified in innerFunction!
}

// Define a function with default parameter values
function greetUser($name = "Guest") {
    // Greet the user
    return "Hello, " . $name . "!";
}

// Call the functions and display results
// Example of using the calculateRectangleArea function
$width = 10;
$height = 5;
$area = calculateRectangleArea($width, $height);
echo "The area of the rectangle is: " . $area . "\n"; // Output: The area of the rectangle is: 50

// Example of using the greetUser function with and without parameter
echo greetUser("Alice") . "\n"; // Output: Hello, Alice!
echo greetUser() . "\n"; // Output: Hello, Guest!

// Example of demonstrating variable scope
demonstrateScope();
?>
