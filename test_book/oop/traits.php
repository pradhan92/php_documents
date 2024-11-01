<?php
// Traits
// In PHP, traits are a mechanism for code reuse that allows you to include methods from multiple
// sources into a single class. Traits are useful for situations where you want to share methods
// across several classes without using inheritance, thus overcoming some of the limitations of 
// single inheritance.

// Key Features of Traits
    // 1.Code Reusability: Traits allow you to reuse methods across different classes without the need for a 
    // common parent class.
    // 2.Multiple Traits: A class can use multiple traits, enabling the composition of functionality from 
    // several sources.
    // 3.Conflict Resolution: If multiple traits define methods with the same name, PHP provides mechanisms
    // to resolve these conflicts.



// Define a trait with common methods
trait Logger {
    public function log($message) {
        echo "Log message: " . $message . "\n";
    }
}

// Define another trait
trait Timestamp {
    public function getTimestamp() {
        return date('Y-m-d H:i:s');
    }
}

// Use traits in a class
class Application {
    use Logger, Timestamp; // Include multiple traits

    public function run() {
        $this->log("Application started.");
        echo "Current timestamp: " . $this->getTimestamp() . "\n";
    }
}

// Instantiate the class and use its methods
$app = new Application();
$app->run();
// Output:
// Log message: Application started.
// Current timestamp: [current date and time]


//Explanation
    // 1.Trait Logger:
    // Contains a method log() for logging messages.
    // 2.Trait Timestamp:
    // Contains a method getTimestamp() for retrieving the current timestamp.
    // 3.Class Application:
    // a.Uses both Logger and Timestamp traits with the use keyword.
    // b.Implements a method run() that utilizes the methods provided by the traits.
    // 4.Instantiation and Method Calls:
    // You create an instance of Application and call the run() method, which demonstrates the 
    // use of methods from both traits.


// Conflict Resolution
    // If multiple traits define methods with the same name, you must resolve conflicts by specifying
    // which method should be used:

trait A {
    public function sayHello() {
        echo "Hello from trait A.\n";
    }
}

trait B {
    public function sayHello() {
        echo "Hello from trait B.\n";
    }
}

class Greeter {
    use A, B {
        B::sayHello insteadof A; // Use method from trait B
        A::sayHello as sayHelloFromA; // Alias method from trait A
    }
}

$greeter = new Greeter();
$greeter->sayHello();        // Output: Hello from trait B.
$greeter->sayHelloFromA();   // Output: Hello from trait A.


//Explanation:
// 1.Conflicting Methods: Both traits A and B define a sayHello() method.
// 2.Resolution: You use B::sayHello insteadof A to specify that the method from trait B should be used.
// 3.Aliasing: You can alias the method from trait A to a different name (sayHelloFromA)to access it if needed.
?>
