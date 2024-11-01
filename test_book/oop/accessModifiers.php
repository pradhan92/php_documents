<?php
// Access modifiers
    // Access modifiers in PHP control the visibility and accessibility of class properties and methods.
    // They are essential for encapsulation, which is a core principle of object-oriented programming. 
    // The three primary access modifiers in PHP are:
    // 1. public: Members (properties and methods) declared as public can be accessed from anywhere, both 
    //     inside and outside the class.
    // 2. protected: Members declared as protected can be accessed only within the class itself and by derived
    //     (child) classes, but not from outside the class.
    // 3. private: Members declared as private can only be accessed within the class where they are defined. 
    //     They are not accessible from derived classes or from outside the class.

    
//Example
// Parent class
class Person {
    // Public property - accessible from anywhere
    public $name;

    // Protected property - accessible within this class and by derived classes
    protected $age;

    // Private property - accessible only within this class
    private $ssn;

    // Constructor to initialize the properties
    public function __construct($name, $age, $ssn) {
        $this->name = $name;
        $this->age = $age;
        $this->ssn = $ssn;
    }

    // Public method to display name - accessible from anywhere
    public function displayName() {
        echo "Name: " . $this->name . "\n";
    }

    // Protected method to display age - accessible within this class and derived classes
    protected function displayAge() {
        echo "Age: " . $this->age . "\n";
    }

    // Private method to display SSN - accessible only within this class
    private function displaySSN() {
        echo "SSN: " . $this->ssn . "\n";
    }

    // Public method to show all details
    public function showDetails() {
        $this->displayName();    // Accessible
        $this->displayAge();     // Accessible
        $this->displaySSN();     // Accessible
    }
}

// Child class extending the Person class
class Employee extends Person {
    // Method to display details of the employee
    public function showEmployeeDetails() {
        $this->displayName();    // Accessible (inherited from Person)
        // $this->displayAge();   // Not accessible (protected in Person)
        // $this->displaySSN();   // Not accessible (private in Person)
    }
}

// Creating an object of the Person class
$person = new Person("John Doe", 30, "123-45-6789");

// Accessing public property and method
echo $person->name . "\n";       // Output: John Doe
$person->displayName();          // Output: Name: John Doe

// Accessing protected and private members directly will cause errors
// $person->age;                  // Error: Cannot access protected property Person::$age
// $person->ssn;                  // Error: Cannot access private property Person::$ssn

// Calling a public method that accesses protected and private members
$person->showDetails();
// Output:
// Name: John Doe
// Age: 30
// SSN: 123-45-6789

// Creating an object of the Employee class
$employee = new Employee("Jane Smith", 28, "987-65-4321");

// Accessing public method in the child class
$employee->showEmployeeDetails();
// Output:
// Name: Jane Smith


// Explanation of Access Modifiers in the Example:
//    1. Public Property and Method:
//         Property $name: Can be accessed from outside the class, as demonstrated by $person->name.
//         Method displayName(): Can be called from outside the class, as shown by $person->displayName()
//         and also from within showDetails().
//     2.Protected Property and Method:
//         i.Property $age: Can be accessed within the Person class and by any class that extends Person. However,
//           it cannot be accessed directly from outside the class.
//         ii.Method displayAge(): Can be called within Person and Employee, but not from outside.
//     3.Private Property and Method:
//         i.Property $ssn: Can only be accessed within the Person class and is not visible to derived
//            classes or from outside.
//         ii.Method displaySSN(): Similar to the private property, it is accessible only within the Person class.
?>
