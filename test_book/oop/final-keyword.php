<?php
// Final Keyword
// In PHP, the final keyword is used to prevent class inheritance and method overriding.
// When applied to a class, the final keyword means that the class cannot be extended or
// inherited by other classes. When applied to a method, it means that the method cannot 
// be overridden by any subclasses.

//Example
// A final class that cannot be extended
final class Vehicle {
    // A final method that cannot be overridden
    public final function startEngine() {
        echo "Engine started";
    }

    public function stopEngine() {
        echo "Engine stopped";
    }
}

// Attempting to extend a final class will cause a fatal error
/*
class Car extends Vehicle {
    // Cannot override final methods in the parent class
    public function startEngine() {
        echo "Car engine started";
    }
}
*/

$vehicle = new Vehicle();
$vehicle->startEngine(); // Output: Engine started
$vehicle->stopEngine();  // Output: Engine stopped


//Explanation:
        // 1. final Class Vehicle:
        //    The Vehicle class is declared as final, meaning no other class can extend it.
        //    This ensures that the Vehicle class cannot be used as a base class, making it a standalone entity.

        // 2. final Method startEngine:
        //    Inside the Vehicle class, the startEngine method is declared as final, meaning it cannot be overridden by
        //    any subclass. If this class could be extended, attempting to override startEngine in a subclass would
        //    result in a fatal error.
        // 3. Non-final Method stopEngine:
        //    The stopEngine method is not declared as final, meaning it could be overridden if the Vehicle class
        //    were not final and could be extended.
        // 4. Attempt to Extend Final Class:
        //    a. Uncommenting the Car class code that attempts to extend Vehicle will cause a fatal error because
        //       Vehicle is a final class and cannot be extended.
        //    b. Also, trying to override the final method startEngine in the Car class would cause another
        //       fatal error if the extension of Vehicle were allowed.


//Key Takeaways:
    // 1. Final Class: Ensures the class cannot be subclassed, making it a complete and non-extensible unit.
    // 2. Final Method: Prevents the method from being overridden, maintaining consistent behavior in any
    // subclasses if the class were not final.
    // 3. The use of final can be beneficial for creating secure and predictable code by preventing unauthorized 
    // modifications or extensions of classes and methods.
?>