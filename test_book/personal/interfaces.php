<?php
// Interface
    // interface defines a contract for classes, specifying which methods a class must implement,
    // without providing the method bodies. Interfaces allow for better code organization and consistency, 
    // promoting the concept of polymorphism, where different classes can implement the same interface but
    // behave differently.


// Defining the interface
interface Animal {
    public function makeSound(); // Declaration of method (no body)
}

// Implementing the interface in the Dog class
class Dog implements Animal {
    public function makeSound() {
        echo "Bark\n"; // Implementation of makeSound method
    }
}

// Implementing the interface in the Cat class
class Cat implements Animal {
    public function makeSound() {
        echo "Meow\n"; // Implementation of makeSound method
    }
}

// Implementing the interface in the Cow class
class Cow implements Animal {
    public function makeSound() {
        echo "Moo\n"; // Implementation of makeSound method
    }
}

// A function that accepts any object implementing the Animal interface
function makeAnimalSound(Animal $animal) {
    $animal->makeSound(); // Calling the method defined in the interface
}

// Creating objects of different classes that implement the Animal interface
$dog = new Dog();
$cat = new Cat();
$cow = new Cow();

// Calling the function with different objects
makeAnimalSound($dog); // Outputs: Bark
makeAnimalSound($cat); // Outputs: Meow
makeAnimalSound($cow); // Outputs: Moo



//Explanation:
    // 1. Interface Declaration:
    //    The Animal interface is declared with a method makeSound().
    //    Any class that implements this interface must define the makeSound() method.
    // 2. Class Implementation:
    //    The Dog, Cat, and Cow classes implement the Animal interface and provide specific implementations
    //    for the makeSound() method.
    // 3. Function with Type Hinting:
    //    a. The makeAnimalSound() function accepts any object that implements the Animal interface.
    //    b. This ensures the function can handle different animals (polymorphism) without knowing the 
    //     specific type of animal.
?>