<?php
// Defining the Car class
class Car {

    // Property to hold the name of the car
    public $name;

    // Constructor to optionally set the car's name during object creation
    public function __construct($car_name = null) {
        if ($car_name) {
            $this->name = $car_name;  // Set the name if passed
        }
    }

    // Method to get the car's name
    public function getCarName() {
        return $this->name;  // Return the current value of the 'name' property
    }

    // Method to set a new name for the car
    public function setCarName($car_name) {
        $this->name = $car_name;  // Set the 'name' property with the provided value
    }

    // Destructor method, called when the object is destroyed or script ends
    public function __destruct() {
        echo "The car '{$this->name}' object is being destroyed.\n";  // Clean-up message
    }
}

// Creating and setting names for two Car objects
$bmw = new Car("Toyota Aqua");  // Using constructor to set the name
echo $bmw->getCarName() . "\n";  // Display the name

$prado = new Car();  // No name set in the constructor
$prado->setCarName("Toyota Prado Land Cruiser");  // Setting the name later
echo $prado->getCarName() . "\n";  // Display the name

// Destructors will be called automatically at the end of the script
?>
