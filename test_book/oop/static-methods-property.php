
<?php
//Static Methods and property

// In PHP, static methods and properties belong to the class itself rather than to any specific 
// instance of the class. This means they can be accessed without creating an instance of the class. 
// Static methods and properties are useful when you need functionality that is not tied to a specific
// object but rather is related to the class as a whole.

// Static Properties

// A static property is shared among all instances of a class. It belongs to the class itself,
// not to any individual object created from the class. You access static properties using the :: operator.

// Static Methods

// A static method can be called directly on the class without needing an instance. Static methods 
// are often used for utility functions that perform actions that don't require data from an instance
// of the class.

// Example
class MathHelper {
    // Static property
    public static $pi = 3.14159;

    // Static method
    public static function calculateCircleArea($radius) {
        return self::$pi * $radius * $radius;
    }

    // Non-static method
    public function getPiValue() {
        return self::$pi;
    }
}

// Accessing static property without creating an instance
echo MathHelper::$pi; // Output: 3.14159

// Calling static method without creating an instance
echo MathHelper::calculateCircleArea(5); // Output: 78.53975

// Creating an instance to access a non-static method
$mathHelper = new MathHelper();
echo $mathHelper->getPiValue(); // Output: 3.14159




// Explanation
// 1. Static Property $pi:
//     public static $pi = 3.14159; is a static property.
//     It can be accessed using the class name and the :: operator (MathHelper::$pi), without needing to 
//     create an instance of the class.
// 2. Static Method calculateCircleArea():
//     a. public static function calculateCircleArea($radius) {...} is a static method.
//     b. It can be called using the class name and the :: operator (MathHelper::calculateCircleArea(5)), 
//     and it uses the static property $pi to calculate the area of a circle.
//     c. Inside a static method, you use self:: to access static properties or other static methods 
//     within the same class.
// 3. Non-Static Method getPiValue():
//     public function getPiValue() {...} is a non-static method.
//     You need to create an instance of the class (new MathHelper()) to call this method.
//     It accesses the static property $pi using self::$pi within the class context.



// Key Points
    // 1. Static properties are shared across all instances of a class and are accessed using the class name
    //    with the :: operator.
    // 2. Static methods are called on the class itself, not on instances, and are also accessed using 
    //    the :: operator.
    // 3. Static members are useful for defining utility functions or properties that should be shared 
    //    across all instances or that don’t depend on object-specific data.
    // 4. Limitations: Static methods cannot access instance properties or methods ($this) because they
    //    are not tied to a specific object instance.
?>
