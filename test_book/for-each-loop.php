<?php
// 1. Indexed Array Example
$fruits = ["Apple", "Banana", "Cherry"];

// Loop through an indexed array
echo "Indexed Array:<br/>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br/>";
}


//Indexed Array with break
echo "Indexed Array with break:<br/>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br/>";
    if($fruit=="Banana"){
        break;
    }
}


////Indexed Array with continue
echo "Indexed Array with continue:<br/>";
foreach ($fruits as $fruit) {
    if($fruit=="Banana"){
        continue;
    }
    echo $fruit . "<br/>";
}


// 2. Associative Array Example
$person = [
    "first_name" => "John",
    "last_name"  => "Doe",
    "age"        => 30,
    "email"      => "john.doe@example.com"
];

// Loop through an associative array
echo "Associative Array:<br/>";
foreach ($person as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br/>";
}
echo "<br/>";

// 3. Multidimensional Array Example
$students = [
    [
        "name"  => "Alice",
        "age"   => 20,
        "grade" => "A"
    ],
    [
        "name"  => "Bob",
        "age"   => 22,
        "grade" => "B"
    ],
    [
        "name"  => "Charlie",
        "age"   => 21,
        "grade" => "A"
    ]
];

// Loop through a multidimensional array
echo "Multidimensional Array:<br/>";
foreach ($students as $student) {
    foreach ($student as $key => $value) {
        echo ucfirst($key) . ": " . $value . "<br/>";
    }
    echo "<br/>"; //this is only for break to next line
}




// # create a table with student details 
// for loop

// Start the table
echo "<table border='1'>";

// Table header
echo "<tr><th>SN</th><th>Name</th><th>Age</th><th>Grade</th></tr>";

// Iterate through each student

echo "<table border= 1>";
for ($i = 0; $i < count($students); $i++) {
    echo "<tr>";
    // Print the serial number
    echo "<td>" . ($i + 1) . "</td>";
    // Iterate over student attributes (name, age, grade)
    $attributes = ['name', 'age', 'grade'];
    for ($j = 0; $j < count($attributes); $j++) {
        $attribute = $attributes[$j];
        echo "<td>" . $students[$i][$attribute] . "</td>";
    }
    echo "</tr>";
}

echo "</table>";

// foreach loop

// Start the table
echo "<table border='1'>";

// Table header
echo "<tr><th>SN</th><th>Name</th><th>Age</th><th>Grade</th></tr>";

// Iterate through each student
foreach ($students as $index=> $student) {
    echo "<tr>";
    echo "<td>" .++$index . "</td>"; 
    echo "<td>" . $student['name'] . "</td>";
    echo "<td>" . $student['age'] . "</td>";
    echo "<td>" . $student['grade'] . "</td>";
    echo "</tr>";
}
// End the table
echo "</table>";


// 4. extra method to use foreach loop on  Array Example
$fruits = ["Apple", "Banana", "Cherry"];

foreach ($fruits as $fruit):
    echo $fruit;
    echo "<br/>";
endforeach;

?>
