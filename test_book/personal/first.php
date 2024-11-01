<?php
// this code is re-callable or reuse able

// Create a class named Car
class Car {
    // Declare a public property to hold the car's brand
    public $brand;

    // Method to set the brand of the car
    function set_name($brandName) {
        $this->brand = $brandName;
    }

    // Method to get the brand of the car
    function get_name() {
        return $this->brand;
    }
}

// Create an instance of the Car class
$model = new Car();

// Set the brand name using the set_name method
$model->set_name("Toyota Hilux");

// Get the brand name and store it in a variable
$model_print = $model->get_name(); // Call the method on the $model object

// Print the brand name
echo $model_print;


// recall or reuse
// Set the brand name using the set_name method
$model->set_name("Tata Indigo");

// Get the brand name and store it in a variable
$model_print = $model->get_name(); // Call the method on the $model object

// Print the brand name
echo $model_print;
?>


