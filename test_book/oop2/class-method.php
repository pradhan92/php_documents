<?php
// Defining the Car class
class Car {

    // Property to hold the name of the car (default value is set)
    public $name = "Car name for property";

    // Method to get the car's name
    public function getCarName() {
        return $this->name;  // Return the current value of the 'name' property
    }

    // Method to set a new name for the car
    public function setCarName($car_name) {
        $this->name = $car_name;  // Set the 'name' property with the provided value
    }
}

// Creating the first object $bmw of the Car class
$bmw = new Car();
$bmw->name = "Toyota Aqua";  // Directly setting the 'name' property of the $bmw object
// echo $bmw->name;  // Uncomment this line to print the name directly
// echo $bmw->getCarName();  // Uncomment this line to print the name using the getCarName method

// Creating the second object $prado of the Car class
$prado = new Car();
$prado->setCarName("Toyota Prado Land Cruiser");  // Using the setCarName method to set the name
echo $prado->getCarName();  // Printing the name of the $prado object using the getCarName method
?>
