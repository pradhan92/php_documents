
<?php
// Define an abstract class Test
abstract class Test {
    // Abstract method that must be implemented in the subclass
    abstract function hello();
}

// Define a class Exam that extends the abstract class Test
class Exam extends Test {
    // Implement the abstract method hello()
    function hello() {
        echo "Hello Tara";
    }
}

// Create an object of the Exam class
$obj = new Exam();

// Call the hello() method, which was implemented in the Exam class
$obj->hello();

?>
