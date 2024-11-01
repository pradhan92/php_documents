<?php
//Inheritance
// Inheritance in PHP is a fundamental concept of object-oriented programming that allows a class
// (known as the child or derived class) to inherit properties and methods from another class
// (known as the parent or base class). This helps to promote code reuse and establish a hierarchical
// relationship between classes.



// Parent class
class Animal {
    // Property
    public $name;

    // Constructor to initialize the name
    public function __construct($name) {
        $this->name = $name;
    }

    // Method to make the animal sound
    public function makeSound() {
        echo "Some generic animal sound\n";
    }

    // Method to display the animal's name
    public function display() {
        echo "Animal Name: " . $this->name . "\n";
    }
}

// Child class extending the Animal class
class Dog extends Animal {
    // Method to make the dog sound
    public function makeSound() {
        echo "Woof! Woof!\n";
    }

    // Additional method specific to Dog class
    public function fetch() {
        echo $this->name . " is fetching the ball.\n";
    }
}

// Creating an object of the Animal class
$animal = new Animal("Generic Animal");
$animal->display();    // Output: Animal Name: Generic Animal
$animal->makeSound();  // Output: Some generic animal sound

// Creating an object of the Dog class
$dog = new Dog("Buddy");
$dog->display();       // Output: Animal Name: Buddy
$dog->makeSound();     // Output: Woof! Woof!
$dog->fetch();         // Output: Buddy is fetching the ball.
?>



