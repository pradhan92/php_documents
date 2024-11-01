
<?php

// Constructor :-
    // The constructor method is called automatically when an object is created.
    // It is used to initialize the object’s properties and perform any setup tasks

// Destructor
    // The destructor method is called automatically when an object is destroyed,
    // i.e., when it is no longer needed. It is used to perform cleanup tasks such
    // as closing files, releasing resources, etc.

// Define the Student class
class Student {
    // Property to hold the student's name
    public $name;

    // Constructor method to initialize the name
    function __construct($str1, $str2) {
        // Concatenate $str1 and $str2 and assign to $name
        $this->name = $str1 . ' ' . $str2;
    }

    // Method to get the student's name
    function get_name() {
        return $this->name;
    }

    // Destructor method, called when the object is destroyed
    // End of script; destructor will be called automatically

    function __destruct() {
        // Print the student's name
        echo "<br/>Student Name: " . $this->name;
    }
}

// Create an object of the Student class with the name "tara kumar"
$obj = new Student("tara", "kumar");

// Output the student's name using the get_name method
echo $obj->get_name();

?>


