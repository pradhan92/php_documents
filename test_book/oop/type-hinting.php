<?php
// Type Hinting
    // Type hinting in PHP allows developers to specify the types of variables, function parameters,
    // and return values to ensure that the correct types are used, improving code reliability and readability. 
    // By declaring types for function parameters, return values, and class properties, PHP can enforce type
    // constraints and catch errors earlier. PHP 7 introduced typed properties, while PHP 8 added union types
    // and nullable types, further enhancing type hinting capabilities. This helps in creating robust, maintainable 
    // code by clearly defining expected types and reducing runtime errors.

// Define a class with typed properties
class Person {
    public string $name;
    public int $age;

    // Constructor with type-hinted parameters
    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

// Define a class with a method using type hinting for parameters and return type
class GreetingService {
    // Method with type-hinted parameter and return type
    public function greet(Person $person): string {
        return "Hello, {$person->name}. You are {$person->age} years old.";
    }

    // Method with a union type for parameters
    public function processInput(string|int $input): void {
        if (is_string($input)) {
            echo "Processing string: $input";
        } elseif (is_int($input)) {
            echo "Processing integer: $input";
        }
    }

    // Method with nullable type hint for return type
    public function findPerson(int $id): ?Person {
        // Simulate finding a person. Returns null if not found.
        if ($id === 1) {
            return new Person("John Doe", 30);
        }
        return null;
    }
}

// Example usage:

$greetingService = new GreetingService();

// Create a Person object
$person = new Person("Jane Doe", 28);

// Call the greet method
echo $greetingService->greet($person); // Outputs: Hello, Jane Doe. You are 28 years old.

// Call the processInput method with different types
$greetingService->processInput("Some text"); // Outputs: Processing string: Some text
$greetingService->processInput(123); // Outputs: Processing integer: 123

// Call the findPerson method
$foundPerson = $greetingService->findPerson(1);
if ($foundPerson !== null) {
    echo $greetingService->greet($foundPerson); // Outputs: Hello, John Doe. You are 30 years old.
} else {
    echo "Person not found.";
}
