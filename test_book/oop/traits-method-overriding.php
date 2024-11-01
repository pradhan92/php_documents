<?php
// Method Overriding in Traits
    // When a class uses multiple traits that define methods with the same name, you can specify
    // which method should be used and how to resolve conflicts. You can also override methods provided
    // by traits in the using class itself.

// Define a trait with a method
trait Logger {
    public function log($message) {
        echo "Log message: " . $message . "\n";
    }
}

// Define another trait with a method of the same name
trait Debugger {
    public function log($message) {
        echo "Debug message: " . $message . "\n";
    }
}

// Define a class that uses both traits
class Application {
    use Logger, Debugger {
        Debugger::log insteadof Logger; // Use the log method from Debugger
        Logger::log as logFromLogger;   // Alias the log method from Logger
    }

    // Override the method in the class itself
    public function log($message) {
        echo "Overridden log message: " . $message . "\n";
    }
}

// Instantiate the class and use its methods
$app = new Application();
$app->log("Application started.");        // Output: Overridden log message: Application started.
$app->logFromLogger("Application started."); // Output: Log message: Application started.
$app->log("Debugging...");                // Output: Overridden log message: Debugging...



// Explanation
    // 1.Traits Definition:
    //     a.Trait Logger: Contains a log() method that prints a log message.
    //     b.Trait Debugger: Contains a log() method that prints a debug message.
    // 2.Class Application:
    //     a.Using Traits: Includes both Logger and Debugger traits.
    //     b.Resolving Conflicts: Uses Debugger::log insteadof Logger to specify that the log() method from 
    //     Debugger should be used.
    //     c.Aliasing: Uses Logger::log as logFromLogger to alias the log() method from Logger to logFromLogger
    //     for use if needed.
    //     d.Class Method Overriding: Overrides the log() method in the Application class itself, providing a new 
    //     implementation.
    // 3.Method Calls:
    //     a.$app->log("Application started.");: Calls the overridden log() method defined in Application.
    //     b.$app->logFromLogger("Application started.");: Calls the log() method from the Logger trait using the 
    //     alias.
    //     c.$app->log("Debugging...");: Calls the overridden method in Application.
?>
