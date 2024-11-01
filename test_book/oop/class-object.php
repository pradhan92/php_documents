<?php
// what is class
// class is blueprints for creating objects ?.
// template that defines the variables and methods for a specific type of object


// In PHP, a class is a blueprint or template for creating objects that encapsulates data and behavior. 
// It defines a set of properties (variables) and methods (functions) that represent the characteristics 
// and actions of the objects instantiated from the class. A class allows developers to group related data
// and functionality together, making it easier to create modular, reusable code. For example, a Car class 
// might include properties like color and model, and methods like drive() and brake(). By using classes, 
// PHP supports object-oriented programming, which helps in organizing code in a more structured and
// maintainable way.




// what is object
// an object is an instance/copy of a class
// we can create multiple objects


// An object in PHP is an instance of a class, which is a blueprint that defines the structure and behavior 
// of the objects created from it. Objects encapsulate data (properties) and behavior (methods) into a single 
// entity, allowing for the creation of complex data structures with specific attributes and functions.
// Each object can have its own unique values for its properties, which are defined in the class but
// instantiated when the object is created using the `new` keyword. Objects in PHP are used to represent 
// real-world entities or abstract concepts, making it easier to model, manipulate, and manage data and 
// behaviors in an organized and reusable manner.






// 1. Example

// Define the MathOperations class
class MathOperations {
    // Method to calculate the sum of two numbers
    function sum($a, $b) {
        echo $a + $b;
    }
}

// Create an object (instance) of the MathOperations class
$maths = new MathOperations();

// Call the sum method multiple times
$maths->sum(20, 30); // Output: 50
echo "<br/>";

$maths->sum(20, 30); // Output: 50
echo "<br/>";

// Create another object of the MathOperations class
$maths2 = new MathOperations();



// 2. Example 
// Define the Car class
class Car {
    // Properties
    public $make;
    public $model;
    public $year;

    // Constructor method to initialize properties
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Method to display car details
    public function displayDetails() {
        echo "Car: $this->make $this->model ($this->year)\n";
    }
}

// Create an object (instance) of the Car class
$myCar = new Car("Toyota", "Corolla", 2020);

// Call the displayDetails method on the object
$myCar->displayDetails(); // Output: Car: Toyota Corolla (2020)



// Explanation
// 1. Class Definition (Car): The Car class is defined with three properties: $make, $model, and $year. 
// These properties represent the characteristics of a car.

// 2. Constructor Method (__construct): This method is automatically called when an object is created. 
// It initializes the object's properties with values passed when the object is instantiated.

// 3. Method (displayDetails): This method prints out the car's details, using the object's properties.

// 4. Object Creation ($myCar): An object of the class Car is created using the new keyword. This object is 
// assigned to the variable $myCar.

// 5. Method Call (displayDetails): The method displayDetails is called on the $myCar object to display its details.
?>