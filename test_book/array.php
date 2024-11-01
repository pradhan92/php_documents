<?php
// [ Array Types in PHP ]
//1 indexed array
// Step 1: Create an indexed array of fruits
$fruits = ["Apple", "Banana", "Cherry"];

// Step 2: Add a new fruit to the end of the array
$fruits[] = "Date";

// Step 3: Display each fruit using a foreach loop
echo "List of fruits:<br/>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br/>";
}

//2  associative array
// Step 1: Create an associative array with person information
$person = [
    "first_name" => "John",
    "last_name"  => "Doe",
    "age"        => 30,
    "email"      => "john.doe@example.com"
];

// Step 2: Access and display individual elements
echo "First Name: " . $person["first_name"] . "<br/>";
echo "Last Name: " . $person["last_name"] . "<br/>";
echo "Age: " . $person["age"] . "<br/>";
echo "Email: " . $person["email"] . "<br/>";

//3.  multidimensional array
// Step 1: Create a multidimensional array representing students
$students = [
    [
        "name" => "Alice",
        "age"  => 20,
        "grade" => "A"
    ],
    [
        "name" => "Bob",
        "age"  => 22,
        "grade" => "B"
    ],
    [
        "name" => "Charlie",
        "age"  => 21,
        "grade" => "A"
    ]
];

// Step 2: Access and display information from the multidimensional array
echo "Student Information:<br/>";
foreach ($students as $student) {
    echo "Name: " . $student["name"] . "<br/>";
    echo "Age: " . $student["age"] . "<br/>";
    echo "Grade: " . $student["grade"] . "<br/>";
    echo "<br/>";
}

// How to create a array 

// 1. Create an array
$fruits = ["Apple", "Banana", "Cherry", "Date"];

// 2. Access and modify elements
echo "Original array:<br/>";
print_r($fruits); // Print the entire array

// Accessing an element
echo "<br>First fruit: " . $fruits[0] . "<br/>"; // Outputs: Apple

// Modifying an element
$fruits[1] = "Blueberry";
echo "Modified array:<br/>";
print_r($fruits); // Print the modified array

// 3. Add and remove elements
// Adding an element
array_push($fruits, "Elderberry");
echo "<br>Array after adding an element:<br/>";
print_r($fruits); // Print the array with the new element

// Removing the last element
array_pop($fruits);
echo "<br>Array after removing the last element:<br/>";
print_r($fruits); // Print the array after removal

// Removing a specific element by value
$key = array_search("Cherry", $fruits);
if ($key !== false) {
    unset($fruits[$key]);
}
echo "<br>Array after removing 'Cherry':<br/>";
print_r($fruits); // Print the array after removal

// 4. Sort and iterate through the array
// Sorting the array in ascending order
sort($fruits);
echo "<br>Sorted array:<br/>";
print_r($fruits); // Print the sorted array

// Iterating through the array
echo "<br>Iterating through the array:<br/>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br/>";
}
?>
