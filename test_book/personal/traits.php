<?php
// traits
    // In PHP, traits are a mechanism to enable code reuse in single inheritance languages like PHP. 
    // Traits allow developers to include reusable sets of methods in multiple classes without the need
    // for inheritance. A trait can be thought of as a group of methods that you can "mix into" a class.

// Why Use Traits?
    // 1. Traits solve the problem of single inheritance in PHP. If a class already extends another class,
    // but you need some functionality from another class or structure, you can use a trait.
    // 2. They help avoid code duplication by allowing the same set of methods to be used across different
         // classes.

// Defining a trait with some common methods
trait Logger {
    public function logInfo($message) {
        echo "[INFO]: " . $message . "\n";
    }

    public function logError($message) {
        echo "[ERROR]: " . $message . "\n";
    }
}

// Another trait for additional functionality
trait Notifier {
    public function sendNotification($message) {
        echo "Sending notification: " . $message . "\n";
    }
}

// A base class representing a user
class User {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

// Admin class that uses Logger and Notifier traits
class Admin extends User {
    use Logger, Notifier; // Including traits in the class

    public function deletePost($postId) {
        $this->logInfo("Admin {$this->name} is deleting post with ID: $postId");
        // Simulate post deletion
        $this->logInfo("Post $postId deleted.");
        $this->sendNotification("Post $postId was deleted by Admin.");
    }
}

// Customer class that only uses Logger trait
class Customer extends User {
    use Logger; // Including Logger trait only

    public function purchaseItem($item) {
        $this->logInfo("Customer {$this->name} purchased $item.");
    }
}

// Creating an Admin object
$admin = new Admin("Alice");
$admin->deletePost(42);  // Admin uses both Logger and Notifier

// Output:
// [INFO]: Admin Alice is deleting post with ID: 42
// [INFO]: Post 42 deleted.
// Sending notification: Post 42 was deleted by Admin.

// Creating a Customer object
$customer = new Customer("Bob");
$customer->purchaseItem("Laptop");  // Customer uses only Logger

// Output:
// [INFO]: Customer Bob purchased Laptop.


// Explanation of the Example:
    // 1.Traits Definition (Logger and Notifier):
    //     a. The Logger trait defines two methods: logInfo() and logError() that output log messages.
    //     b.The Notifier trait defines a sendNotification() method that simulates sending a notification.
    // 2. Using Traits in Classes:
    //     a. The Admin class uses both the Logger and Notifier traits, inheriting the methods from both.
    //     b. The Customer class uses only the Logger trait.
    // 3. Trait Methods in Action:
    //     a. When an Admin object calls deletePost(), it uses methods from both traits to log actions and 
    //     send notifications.
    //     b. When a Customer object calls purchaseItem(), it only uses the logInfo() method from the Logger trait.
?>
