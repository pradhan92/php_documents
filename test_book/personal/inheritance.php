

<?php
// Define the Car class
class Car {
    public $name;

    // Constructor method to initialize the car name
    function __construct($str) {
        $this->name = $str;
    }

    // Method to get the car name
    function getName() {
        return $this->name;
    }
}

// Define the Bike class which extends the Car class
class Bike extends Car {
    // Constructor method for the Bike class
    function __construct($str) {
        echo "This is Bike of: ";
        // Call the parent constructor to initialize the car name
        parent::__construct($str);
    }
}

// Create an object of the Bike class, passing "Honda" as the bike name
$obj = new Bike("Honda");

// Output the name using the inherited getName method
echo $obj->getName();

?>

