<?php
//polymorphism
    // Polymorphism in Object-Oriented Programming (OOP) allows objects of different classes 
    // to be treated as instances of the same class through a shared interface or parent class.
    // It enables a single function or method to handle objects of multiple types, provided they
    // share a common interface or superclass.


// Defining the interface
interface Shape {
    public function calculateArea(); // Polymorphic method
}

// Implementing the interface in a Circle class
class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2); // π * r^2
    }
}

// Implementing the interface in a Rectangle class
class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height; // w * h
    }
}

// Implementing the interface in a Triangle class
class Triangle implements Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0.5 * $this->base * $this->height; // 1/2 * base * height
    }
}

// Function to calculate area using polymorphism
function displayShapeArea(Shape $shape) {
    echo "The area is: " . $shape->calculateArea() . "\n";
}

// Creating different shape objects
$circle = new Circle(5);           // Radius 5
$rectangle = new Rectangle(4, 6);  // Width 4, Height 6
$triangle = new Triangle(4, 7);    // Base 4, Height 7

// Using polymorphism to call the same method for different shapes
displayShapeArea($circle);    // Outputs: The area is: 78.539816339744
displayShapeArea($rectangle); // Outputs: The area is: 24
displayShapeArea($triangle);  // Outputs: The area is: 14


//Explanation:
// 1. Interface Definition (Shape):
//    The Shape interface defines a method calculateArea(). Every class implementing this interface must 
//    provide its own implementation of the method.
// 2. Implementing Classes:
//     A. Circle, Rectangle, and Triangle classes implement the Shape interface.
//     B. Each class defines its version of the calculateArea() method:
//         i. Circle: Area = π * r²
//         ii. Rectangle: Area = width * height
//         iii.Triangle: Area = ½ * base * height
// 3. Polymorphism:
//     i. The displayShapeArea() function accepts any object that implements the Shape interface, making 
//     it flexible enough to handle different shapes.
//     ii.Despite the Shape objects being of different types (Circle, Rectangle, Triangle), they are all
//     treated the same way because they implement the same interface.
?>
