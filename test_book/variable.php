<?php
// 1. Variable Declaration and Initialization
$integerVar = 42;                // Integer
$floatVar = 3.14;                // Float
$stringVar = "Hello, World!";   // String
$booleanVar = true;             // Boolean
$nullVar = null;                // NULL

// Display variable values
echo "Integer: $integerVar<br>"; // Outputs: Integer: 42
echo "Float: $floatVar<br>";     // Outputs: Float: 3.14
echo "String: $stringVar<br>";   // Outputs: String: Hello, World!
echo "Boolean: " . ($booleanVar ? "true" : "false") . "<br>"; // Outputs: Boolean: true
echo "NULL: " . ($nullVar ?? "NULL") . "<br>"; // Outputs: NULL: NULL

// 2. Array Usage
$indexedArray = array(1, 2, 3, 4, 5); // Indexed array
$associativeArray = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
); // Associative array

// Access and display array values
echo "Indexed Array[2]: " . $indexedArray[2] . "<br>";   // Outputs: Indexed Array[2]: 3
echo "Associative Array[name]: " . $associativeArray["name"] . "<br>"; // Outputs: Associative Array[name]: John

// 3. Variable Scope
$globalVar = "I'm a global variable";

function testScope() {
    global $globalVar;
    $localVar = "I'm a local variable";
    echo "Inside function - Global Variable: $globalVar<br>"; // Outputs: Inside function - Global Variable: I'm a global variable
    echo "Inside function - Local Variable: $localVar<br>";   // Outputs: Inside function - Local Variable: I'm a local variable
}

testScope();
echo "Outside function - Global Variable: $globalVar<br>";   // Outputs: Outside function - Global Variable: I'm a global variable
// Uncommenting the next line will cause an error as $localVar is not accessible outside the function
// echo "Outside function - Local Variable: $localVar<br>";

// 4. Superglobals
// Displaying data from a hypothetical form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submittedName = htmlspecialchars($_POST['name']);
    echo "Submitted Name: $submittedName<br>";
}
?>

<!-- HTML Form to demonstrate $_POST superglobal -->
<form method="post" action="">
    Name: <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<?php
// 5. Object Usage
class Person {
    public $firstName;
    public $lastName;

    function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }
}

$person = new Person("John", "Doe");
echo "Person's Full Name: " . $person->getFullName() . "<br>"; // Outputs: Person's Full Name: John Doe

// 6. Variable Variables
$varName = "greeting";
$$varName = "Hello, World!"; // $greeting is now "Hello, World!"

echo "Variable Variable Value: $greeting<br>"; // Outputs: Variable Variable Value: Hello, World!



// # Superglobals
// PHP provides several built-in global arrays called superglobals that are automatically populated with data
// $_GET: Contains data from URL query parameters.
// $_POST: Contains data from form submissions using POST method.
// $_SESSION: Contains session data.
// $_COOKIE: Contains cookie data.
// $_FILES: Contains file upload data.
// $_SERVER: Contains server and execution environment information.
// $_REQUEST: Contains data from both $_GET and $_POST.
// $_GLOBALS: Contains all global variables.

//example


// Example of using $_POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    echo "Hello, " . htmlspecialchars($name);
}
?>
<form method="post" action="">
    Name: <input type="text" name="name">
    <input type="submit">
</form>

?>
