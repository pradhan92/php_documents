<?php
// Global variable
$globalVar = "I am a global variable";

function demonstrateVariableScope() {
    // Local variable
    $localVar = "I am a local variable";
    
    // Accessing the global variable within the function
    global $globalVar; // Declare global variable
    echo "Inside function:<br>";
    echo "Global Variable: " . $globalVar . "<br>";
    echo "Local Variable: " . $localVar . "<br>";
}

// Call the function
demonstrateVariableScope();

// Access global variable outside the function
echo "<br>Outside function:<br>";
echo "Global Variable: " . $globalVar . "<br>";

// Trying to access the local variable outside the function (will cause an error)
// echo "Local Variable: " . $localVar . "<br>"; // Uncommenting this line will cause an error


//
$name ="tara";

function test(){
    $name ="kumar";
    echo $name;

    function innerTest(){
        //global $name;
        $name ="kumar";
        echo $name;
    
    }
}
test();
echo"<br/";
innerTest();
echo"<br/";
echo $name;

?>
