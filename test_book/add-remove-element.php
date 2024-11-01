<?php
// Initial array
$fruits = ["Apple", "Banana", "Cherry"];

// Adding Elements

// 1. Using array_push() to add one or more elements to the end of an array
array_push($fruits, "Date", "Elderberry");

// 2. Adding an element at a specific index
$fruits[5] = "Fig";  // Index 5 is manually set to "Fig"

// Removing Elements

// 1. Using array_pop() to remove the last element of the array
array_pop($fruits);  // Removes "Fig"

// 2. Using unset() to remove an element at a specific index
unset($fruits[1]);  // Removes "Banana"

// Re-index the array if necessary (optional, but helpful for clean indexing)
$fruits = array_values($fruits);  // Re-indexes array numerically

//splice
array_slice($users,2);

// Display the array
echo "Updated Fruits Array: <br>";
print_r($fruits);
?>
