<?php
// Defining the Car class
class Car {

    // Property to store the car name
    public $name;

    // Constructor method to initialize the 'name' property
    public function __construct($car_name) { 
        $this->name = $car_name; // Assign the passed parameter to the 'name' property
    }

    // Method to get the car's name
    public function getCarName() {
        return $this->name;  // Return the current value of the 'name' property
    }

}

// Creating a new instance of the Car class
$bmw = new Car("Toyota Aqua");

?>
