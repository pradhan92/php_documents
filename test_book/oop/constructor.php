<?php
// Constructor:-
// A constructor in PHP is a special method within a class that is automatically invoked when an 
// object of that class is created. The primary purpose of a constructor is to initialize an object’s 
// properties when the object is instantiated, ensuring that the object starts in a well-defined state.

// Key Features of Constructors in PHP:
//1. Naming Convention:
    // In PHP, a constructor is named __construct(). This naming convention was introduced in PHP 5, replacing 
    // the older style where the constructor had the same name as the class. The __construct() method is 
    // automatically recognized by PHP as the constructor.

//2. Automatic Invocation:
    // When an object of a class is created using the new keyword, the __construct() method is automatically called.
    // This allows the developer to set initial values for the object’s properties or perform any setup steps 
    // required for the object.

//3. Parameterization:
    // Constructors can accept parameters, allowing the user to pass initial values when creating the object.
    // This makes it possible to configure an object directly upon instantiation.

//4. Overriding and Inheritance:
    // In PHP, constructors can be overridden in derived (child) classes. If a child class defines its own
    // constructor, it will override the parent class’s constructor. However, the parent’s constructor can still
    // be called explicitly using parent::__construct().

//5. No Return Value:
    // Like in many other programming languages, constructors in PHP do not have a return type and do not 
    // return any value. Their sole purpose is to initialize the object.



// 1. Example(essay)
class ConstructorDemo {
    // Public property to store the name
    public $name;

    // Constructor method to initialize the name property
    function __construct($name) {
        $this->name = $name; // Assign the passed argument to the object's name property
    }

    // Method to display the name
    function displayName() {
        echo $this->name; // Output the name property
    }
}

// Create an object of the ConstructorDemo class and initialize it with "kumar"
$cd = new ConstructorDemo("kumar");

// Call the displayName method to print the name
$cd->displayName(); // Output: kumar


// 2. Example(details with xplanation)
class Car {
    // Properties
    public $make;
    public $model;
    public $year;

    // Constructor method
    public function __construct($make, $model, $year) {
        $this->make = $make;   // Initialize the 'make' property
        $this->model = $model; // Initialize the 'model' property
        $this->year = $year;   // Initialize the 'year' property
    }

    // Method to display car details
    public function displayDetails() {
        echo "Car: $this->make $this->model ($this->year)\n";
    }
}

// Creating an object of the Car class
$myCar = new Car("Toyota", "Corolla", 2020);

// Display the details of the car
$myCar->displayDetails(); // Output: Car: Toyota Corolla (2020)

//Explanation of the Example:

//1. Class Definition (Car):
    // The Car class is defined with three public properties: $make, $model, and $year.

//2. Constructor (__construct):
    // i. The constructor method __construct($make, $model, $year) is defined to initialize the properties
    //     when an object is created.
    // ii. When an object is instantiated with new Car("Toyota", "Corolla", 2020), the constructor is called
    //     automatically with the provided arguments.
    // iii. Inside the constructor, the $this keyword is used to reference the current object, and the 
    //     passed parameters are assigned to the object's properties.
// 3. Method (displayDetails):
    // The displayDetails method is used to output the car’s details by accessing the properties initialized by
    // the constructor.
//4. Object Creation ($myCar):
    // An object $myCar is created, and the constructor initializes its properties to
    // "Toyota", "Corolla", and 2020




?>