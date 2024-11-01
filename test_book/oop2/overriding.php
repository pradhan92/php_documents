<?php
// ParentClass.php
class ParentClass {
    public function greet() {
        echo "Hello from ParentClass!";
    }
}
?>

<?php
// ChildClass.php
class ChildClass extends ParentClass {
    public function greet() {
        parent::greet(); // Call the parent class method
        echo " And Hello from ChildClass!";
    }
}
?>

<?php
// index.php
include 'ParentClass.php';
include 'ChildClass.php';

$parent = new ParentClass();
$parent->greet(); // Outputs: Hello from ParentClass!

echo "<br>";

$child = new ChildClass();
$child->greet(); // Outputs: Hello from ParentClass! And Hello from ChildClass!
?>


<?php
// Define a base class called Animal
class Animal {
    // Method that will be overridden in subclasses
    public function makeSound() {
        // Default implementation for the base class
        return "Some generic animal sound";
    }
}

// Define a subclass called Dog that extends the Animal class
class Dog extends Animal {
    // Override the makeSound method from the base class
    public function makeSound() {
        // Specific implementation for the Dog class
        return "Woof! Woof!";
    }
}

// Define another subclass called Cat that extends the Animal class
class Cat extends Animal {
    // Override the makeSound method from the base class
    public function makeSound() {
        // Specific implementation for the Cat class
        return "Meow! Meow!";
    }
}

// Instantiate objects of Dog and Cat classes
$dog = new Dog();
$cat = new Cat();

// Call the makeSound method on each object and display the result
echo "The dog says: " . $dog->makeSound() . "<br>"; // Output: The dog says: Woof! Woof!
echo "The cat says: " . $cat->makeSound() . "<br>"; // Output: The cat says: Meow! Meow!
?>
