<?php
//access modifiers:
   // 1 Public: Accessible from anywhere.
   // 2 Protected: Accessible within the class itself and by inheriting/child classes.
   // 3 Private: Accessible only within the class where it is defined.

// Defining a base class "Person" to demonstrate access modifiers
class Person {
    // Public property: Can be accessed from anywhere
    public $name;

    // Protected property: Can be accessed in this class and derived classes
    protected $age;

    // Private property: Can only be accessed within this class
    private $nationalID;

    // Constructor to initialize the properties
    public function __construct($name, $age, $nationalID) {
        $this->name = $name;
        $this->age = $age;
        $this->nationalID = $nationalID;
    }

    // Public method: Can be called from anywhere
    public function introduce() {
        echo "Hi, my name is {$this->name}.\n";
    }

    // Protected method: Can be called only within this class or a child class
    protected function showAge() {
        echo "I am {$this->age} years old.\n";
    }

    // Private method: Can be called only within this class
    private function showNationalID() {
        echo "My national ID is {$this->nationalID}.\n";
    }

    // Public method that can call protected and private methods
    public function showDetails() {
        $this->showAge();  // Protected method can be called within this class
        $this->showNationalID();  // Private method can be called within this class
    }
}

// Defining a derived class "Employee" that inherits from "Person"
class Employee extends Person {
    // Public property specific to Employee
    public $position;

    // Constructor to initialize properties from both Employee and Person
    public function __construct($name, $age, $nationalID, $position) {
        // Call the parent constructor to initialize inherited properties
        parent::__construct($name, $age, $nationalID);
        $this->position = $position;
    }

    // Public method specific to Employee
    public function displayPosition() {
        echo "I work as a {$this->position}.\n";
    }

    // Public method that can access protected properties/methods of the parent class
    public function showEmployeeDetails() {
        echo "Employee Details:\n";
        $this->introduce();  // Public method from parent class
        $this->showAge();  // Protected method from parent class (accessible in child class)
        // Note: $this->showNationalID(); // Cannot access private method from parent class
    }
}

// Creating an instance of the Person class
$person = new Person("Alice", 30, "P123456");
$person->introduce();  // Public method: accessible
// $person->showAge(); // Error: Protected method
// $person->showNationalID(); // Error: Private method
$person->showDetails();  // Calls both protected and private methods internally

echo "\n";

// Creating an instance of the Employee class
$employee = new Employee("Bob", 40, "E987654", "Software Developer");
$employee->introduce();  // Inherited public method
$employee->displayPosition();  // Public method specific to Employee
$employee->showEmployeeDetails();  // Accesses protected methods in the parent class



//Explanation:
// 1.Public Modifier:
//     The name property and introduce() method in the Person class are marked public. This means 
//     they can be accessed from both inside and outside the class.
// 2.Protected Modifier:
//     The age property and showAge() method are marked protected. They are accessible inside the Person
//     class and any class that inherits from Person (such as Employee), but not outside these classes.
// 3.Private Modifier:
//     The nationalID property and showNationalID() method are marked private. They can only be accessed
//     from within the Person class itself, not even by classes that inherit from Person.
// 4.Inheritance:
//     The Employee class inherits from the Person class. It can access public and protected members 
//     from the parent class, but not private members.


//output
    // Hi, my name is Alice.
    // I am 30 years old.
    // My national ID is P123456.

    // Hi, my name is Bob.
    // I work as a Software Developer.
    // Employee Details:
    // Hi, my name is Bob.
    // I am 40 years old.

?>
