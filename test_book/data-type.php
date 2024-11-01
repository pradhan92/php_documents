<?php
// Integer
$integer = 42;
echo "Integer: " . $integer . "<br>"; // Outputs: Integer: 42

// Float
$float = 3.14159;
echo "Float: " . $float . "<br>"; // Outputs: Float: 3.14159

// String
$string = "Hello, World!";
echo "String: " . $string . "<br>"; // Outputs: String: Hello, World!

// Boolean
$booleanTrue = true;
$booleanFalse = false;
echo "Boolean True: " . ($booleanTrue ? "true" : "false") . "<br>"; // Outputs: Boolean True: true
echo "Boolean False: " . ($booleanFalse ? "true" : "false") . "<br>"; // Outputs: Boolean False: false

// Array
$array = array(1, 2, 3, "four", "five");
echo "Array: ";
print_r($array); // Outputs: Array: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => four [4] => five )
echo "<br>";

// Associative Array
$assocArray = array(
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30
);
echo "Associative Array: ";
print_r($assocArray); // Outputs: Associative Array: Array ( [first_name] => John [last_name] => Doe [age] => 30 )
echo "<br>";

// Object
class Person {
    public $firstName;
    public $lastName;
    
    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    
    public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }
}

$person = new Person("Jane", "Smith");
echo "Object: " . $person->getFullName() . "<br>"; // Outputs: Object: Jane Smith

// Null
$nullVariable = null;
echo "Null: " . ($nullVariable === null ? "null" : "not null") . "<br>"; // Outputs: Null: null

// Type Casting
$integerToString = (string)$integer; // Casting integer to string
echo "Type Casted Integer to String: " . $integerToString . "<br>"; // Outputs: Type Casted Integer to String: 42

$floatToInt = (int)$float; // Casting float to integer
echo "Type Casted Float to Integer: " . $floatToInt . "<br>"; // Outputs: Type Casted Float to Integer: 3

// Check Data Types
echo "Type of \$integer: " . gettype($integer) . "<br>"; // Outputs: Type of $integer: integer
echo "Type of \$float: " . gettype($float) . "<br>"; // Outputs: Type of $float: double
echo "Type of \$string: " . gettype($string) . "<br>"; // Outputs: Type of $string: string
echo "Type of \$booleanTrue: " . gettype($booleanTrue) . "<br>"; // Outputs: Type of $booleanTrue: boolean
echo "Type of \$array: " . gettype($array) . "<br>"; // Outputs: Type of $array: array
echo "Type of \$person: " . gettype($person) . "<br>"; // Outputs: Type of $person: object
echo "Type of \$nullVariable: " . gettype($nullVariable) . "<br>"; // Outputs: Type of $nullVariable: NULL

?>
