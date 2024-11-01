<?php
// Interface 
    // In PHP, an interface is a way to define a contract that classes must follow. Interfaces are used to specify 
    // methods that a class must implement, without providing the implementation details. They are a core concept 
    // in object-oriented programming for achieving abstraction and promoting a consistent design.

// Key Features of Interfaces
    // 1.Method Signatures Only: Interfaces can only declare method signatures (method names, parameters,
    // and return types) but cannot provide implementations.
    // 2.Implementation by Classes: Classes that implement an interface must provide implementations for 
    // all methods declared in the interface.
    // 3.Multiple Inheritance: A class can implement multiple interfaces, allowing for a form of multiple 
    // inheritance.


// Define an interface
interface Animal {
    // Declare abstract methods
    public function makeSound();
    public function eat($food);
}

// Implement the interface in a class
class Dog implements Animal {
    // Provide implementation for the abstract methods
    public function makeSound() {
        echo "Bark!\n";
    }

    public function eat($food) {
        echo "The dog eats " . $food . ".\n";
    }
}

// Implement the interface in another class
class Cat implements Animal {
    // Provide implementation for the abstract methods
    public function makeSound() {
        echo "Meow!\n";
    }

    public function eat($food) {
        echo "The cat eats " . $food . ".\n";
    }
}

// Instantiate objects
$dog = new Dog();
$cat = new Cat();

// Call methods
$dog->makeSound(); // Output: Bark!
$dog->eat("meat"); // Output: The dog eats meat.

$cat->makeSound(); // Output: Meow!
$cat->eat("fish"); // Output: The cat eats fish.



// Explanation
    // 1.Interface Animal:
    //    Declares two methods: makeSound() and eat($food). These methods do not have implementations in the
    //    interface itself.
    // 2.Class Dog:
    //    a.Implements the Animal interface.
    //    b.Provides concrete implementations for makeSound() and eat($food) methods.
    // 3.Class Cat:
    //    a.Implements the Animal interface.
    //    b.Also provides concrete implementations for makeSound() and eat($food) methods.
    // 4.Instantiation and Method Calls:
    //   You can create instances of Dog and Cat and call the methods defined by the Animal interface.


//Benefits
    // 1.Contract Enforcement: Interfaces enforce that implementing classes follow a specific contract,
    //   ensuring consistency in method signatures across different classes.
    // 2.Decoupling: They help decouple code by allowing you to define method signatures independently
    //   from their implementations.
    // 3.Flexibility: Multiple interfaces can be implemented by a single class, allowing for flexible and
    //   modular design.
?>
