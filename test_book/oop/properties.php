<?php
// Properties:-
//In PHP, properties are variables that belong to a class and represent the characteristics or 
// attributes of the objects created from that class. Properties define the state of an object and 
// are declared inside a class. They can be assigned default values or left uninitialized, and their 
// access level can be controlled using visibility keywords like public, protected, or private.


// 1.Example(very details with Explanation)

class Car {
    // Properties
    public $make;    // Public property, can be accessed from outside the class
    public $model;
    private $year;   // Private property, can only be accessed within the class
    protected $color; // Protected property, can be accessed within the class and by derived classes

    // Constructor to initialize properties
    public function __construct($make, $model, $year, $color) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }

    // Method to display car details
    public function displayDetails() {
        echo "Car: $this->make $this->model ($this->year) in $this->color color\n";
    }

    // Method to get the value of the private property $year
    public function getYear() {
        return $this->year;
    }

    // Method to set a new value to the private property $year
    public function setYear($year) {
        $this->year = $year;
    }
}

// Create an object of the Car class
$myCar = new Car("Toyota", "Corolla", 2020, "red");

// Accessing public properties
echo $myCar->make; // Output: Toyota

// Using methods to get details
$myCar->displayDetails(); // Output: Car: Toyota Corolla (2020) in red color

// Accessing private property via getter method
echo $myCar->getYear(); // Output: 2020

// Attempting to access private property directly will result in an error
// echo $myCar->year; // Error: Cannot access private property Car::$year


//Explanation

// 1. Public Properties ($make, $model):
//    These properties are accessible from outside the class and can be modified directly using the object.

// 2. Private Property ($year):
//    This property can only be accessed within the class itself. It is not accessible from outside the 
//    class directly. To access or modify it, we use public methods (getYear and setYear).

// 3. Protected Property ($color):
//    This property is accessible within the class and by classes derived from it. It cannot be accessed directly
//    from outside the class.

// 4. Constructor (__construct):
//    The constructor method is used to initialize properties when an object is created. It sets up the initial
//    state of the object based on the parameters provided during instantiation.




// 2.Example(eassy)
class Properties {
    // Declare a public property with a default value
    public $name = "tara";

    // Method to display the current name
    function updateName() {
        echo $this->name; // Access the property using $this keyword
    }

    // Method to set a new name
    function setName($name) {
        $this->name = $name; // Assign the passed parameter to the name property
    }
}

// Create an instance of the Properties class
$p1 = new Properties();

// Display the initial name (default value)
$p1->updateName(); // Output: tara

echo "\n"; // Just to add a newline for better readability

// Set a new name using the setName method
$p1->setName("John");

// Display the updated name
$p1->updateName(); // Output: John
?>
