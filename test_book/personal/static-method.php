<?php
//static methods and variables
    // In PHP, static methods and variables belong to the class itself, not to any specific instance
    // of that class. This means you can access them without creating an object of the class. Static 
    // methods are typically used for utility functions, and static variables hold values that are 
    // shared across all instances of a class.

// Defining a class with static variables and methods
class Calculator {
    // Static variable to keep track of the number of operations performed
    public static $operationCount = 0;

    // Static method to add two numbers
    public static function add($a, $b) {
        self::$operationCount++; // Accessing static variable using self::
        return $a + $b;
    }

    // Static method to subtract two numbers
    public static function subtract($a, $b) {
        self::$operationCount++;
        return $a - $b;
    }

    // Static method to multiply two numbers
    public static function multiply($a, $b) {
        self::$operationCount++;
        return $a * $b;
    }

    // Static method to get the total number of operations performed
    public static function getOperationCount() {
        return self::$operationCount;
    }
}

// Using the static methods without creating an instance of the class
echo "5 + 10 = " . Calculator::add(5, 10) . "\n";             // Outputs: 15
echo "20 - 5 = " . Calculator::subtract(20, 5) . "\n";         // Outputs: 15
echo "3 * 4 = " . Calculator::multiply(3, 4) . "\n";           // Outputs: 12

// Accessing the static variable through a static method
echo "Total operations performed: " . Calculator::getOperationCount() . "\n"; // Outputs: 3
?>
