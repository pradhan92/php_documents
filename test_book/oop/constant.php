<?php
//Constant
    // In PHP, a constant within a class is a property that, once defined, cannot be changed. 
    // Class constants are useful for defining values that should remain constant throughout the
    // execution of a script. These constants are defined using the const keyword and are typically
    // used to store fixed values like configuration settings, magic numbers, or default values.

//Characteristics of Class Constants:
    // 1. Immutability: Once a constant is defined, its value cannot be changed.
    // 2. Access: Class constants are accessed using the scope resolution operator '::'
    //         and are usually named in all uppercase letters, by convention.
    // 3. Visibility: By default, constants are public, but you can also explicitly declare them as public,
    //     　　　　　 protected, or private since PHP 7.1.


// Defining a class with constants
class MathConstants {
    // Public constant
    public const PI = 3.14159;

    // Protected constant
    protected const E = 2.71828;

    // Private constant
    private const GOLDEN_RATIO = 1.61803;

    // Method to access protected constant
    protected function getE() {
        return self::E; // Accessing protected constant within the class
    }

    // Method to access private constant
    private function getGoldenRatio() {
        return self::GOLDEN_RATIO; // Accessing private constant within the class
    }

    // Public method to demonstrate constant usage
    public function showConstants() {
        echo "PI: " . self::PI . "\n";              // Accessing public constant
        echo "E: " . $this->getE() . "\n";           // Accessing protected constant via method
        echo "Golden Ratio: " . $this->getGoldenRatio() . "\n"; // Accessing private constant via method
    }
}

// Creating an object of the MathConstants class
$math = new MathConstants();

// Accessing public constant directly
echo "Value of PI: " . MathConstants::PI . "\n"; // Output: Value of PI: 3.14159

// Accessing constants using a method
$math->showConstants();
// Output:
// PI: 3.14159
// E: 2.71828
// Golden Ratio: 1.61803

// Attempting to access protected and private constants directly will cause an error
// echo MathConstants::E; // Error: Cannot access protected constant
// echo MathConstants::GOLDEN_RATIO; // Error: Cannot access private constant

//Explanation:
// 1. Class MathConstants:
//     i. Public Constant PI: Can be accessed from outside the class directly using MathConstants::PI.
//     ii. Protected Constant' E': Can be accessed only within the class and its subclasses. It is accessed 
//         using a protected method getE().
//     iii. Private Constant GOLDEN_RATIO: Can be accessed only within the class itself. It is accessed using 
//         a private method getGoldenRatio().
// 2. Accessing Constants:
//     i. Public Constant: Directly accessed using the class name and the scope resolution operator 
//         (MathConstants::PI).
//     ii. Protected and Private Constants: Accessed indirectly through class methods.




// Constant with Access modifiers
    // In PHP, constants within a class can have different access modifiers (public, protected, or private),
    // similar to properties and methods. These modifiers control the visibility of the constants, 
    // determining whether they can be accessed from outside the class, only within the class, or within 
    // the class and its subclasses.

//Example of Constants with Access Modifiers in PHP
class Car {
    // Public constant - accessible from anywhere
    public const WHEELS = 4;

    // Protected constant - accessible only within this class and derived classes
    protected const ENGINE = 'V8';

    // Private constant - accessible only within this class
    private const FUEL = 'Diesel';

    // Public method to display constants
    public function displayConstants() {
        echo "Wheels: " . self::WHEELS . "\n";       // Accessing public constant
        echo "Engine: " . self::ENGINE . "\n";       // Accessing protected constant
        echo "Fuel: " . self::FUEL . "\n";           // Accessing private constant
    }
}

// Child class extending the Car class
class SportsCar extends Car {
    // Method to display constants in the child class
    public function showParentConstants() {
        echo "Wheels: " . self::WHEELS . "\n";       // Accessing public constant
        echo "Engine: " . self::ENGINE . "\n";       // Accessing protected constant
        // echo "Fuel: " . self::FUEL;               // Error: Cannot access private constant
    }
}

// Create an instance of the Car class
$car = new Car();
$car->displayConstants(); 
// Output:
// Wheels: 4
// Engine: V8
// Fuel: Diesel

// Accessing public constant directly from outside the class
echo "Number of wheels: " . Car::WHEELS . "\n"; // Output: Number of wheels: 4

// Create an instance of the SportsCar class
$sportsCar = new SportsCar();
$sportsCar->showParentConstants(); 
// Output:
// Wheels: 4
// Engine: V8

// Attempting to access protected and private constants directly will cause errors
// echo Car::ENGINE; // Error: Cannot access protected constant
// echo Car::FUEL;   // Error: Cannot access private constant



// Explanation:
    // 1. Class Car:
    //    a. Public Constant WHEELS: Can be accessed from anywhere, including outside the class.
    //    b. Protected Constant ENGINE: Can be accessed only within the Car class and its child classes 
    //                             (SportsCar in this example).
    //    c. Private Constant FUEL: Can only be accessed within the Car class itself.

    // 2. Child Class SportsCar:
    //    Inherits from Car and can access the public and protected constants (WHEELS and ENGINE),
    //    but not the private constant (FUEL).
    
    // 3. Accessing Constants:
    //    a.Direct Access: Car::WHEELS is accessed directly since it is public.
    //    b.Within Methods: displayConstants() in Car can access all constants (public, protected, private).
    //    showParentConstants() in SportsCar accesses public and protected constants from the parent class
    //    but cannot access private constants.
?>
