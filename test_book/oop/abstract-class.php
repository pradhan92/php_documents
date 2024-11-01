<?php
// abstract class
    // In PHP, an abstract class is a class that cannot be instantiated on its own and is meant
    // to be extended by other classes. Abstract classes are used to define a common interface 
    // and some shared functionality for subclasses, but they leave the implementation details 
    // to the derived classes.

// Key Features of Abstract Classes
    // 1.Cannot be Instantiated: You cannot create an object of an abstract class directly.
    // 2.Can Contain Abstract Methods: Abstract methods are declared without implementation.
    //   Subclasses must implement these methods.
    // 3.Can Contain Concrete Methods: Abstract classes can also include fully implemented 
    //   methods that can be shared across subclasses.
    // 4.Used for Code Reusability: Abstract classes provide a way to define a common base
    //   class with shared code that can be reused by multiple subclasses.


// Define an abstract class
abstract class Animal {
    // Abstract method (must be implemented in a subclass)
    abstract protected function makeSound();

    // Regular method (can be used by subclasses)
    public function sleep() {
        echo "Zzz...\n";
    }
}

// Subclass that extends the abstract class
class Dog extends Animal {
    // Implement the abstract method
    protected function makeSound() {
        echo "Bark!\n";
    }
}

// Subclass that extends the abstract class
class Cat extends Animal {
    // Implement the abstract method
    protected function makeSound() {
        echo "Meow!\n";
    }
}

// Instantiate subclasses
$dog = new Dog();
$cat = new Cat();

// Call methods
$dog->makeSound(); // Output: Bark!
$dog->sleep();     // Output: Zzz...
$cat->makeSound(); // Output: Meow!
$cat->sleep();     // Output: Zzz...


//Explanation
    // 1. Abstract Class Animal:
    //     a. Abstract Method makeSound(): This method is declared without an implementation and must be 
    //     implemented by any subclass.
    //     b. Concrete Method sleep(): This method has an implementation and can be used by any subclass.
    // 2. Concrete Classes Dog and Cat:
    //     a.Both classes extend the Animal class and provide their own implementation of the makeSound() method.
    //     b.They inherit the sleep() method from the Animal class.
    // 3. Instantiation and Method Calls:
    //     a.You can create instances of Dog and Cat, and call both the implemented and inherited methods.
    //     b.Direct instantiation of the Animal class is not allowed and would result in an error.


// Benefits
    // 1. Code Reusability: Abstract classes allow you to define common functionality and avoid code duplication.
    // 2. Enforcement of Method Implementation: Abstract methods ensure that subclasses provide specific
    // implementations, enforcing a consistent interface.
    // 3. Design Flexibility: Abstract classes enable you to design a flexible and extensible architecture
    // by providing a common base for various subclasses.
?>
