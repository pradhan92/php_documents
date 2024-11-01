<?php
// Example with for loop
echo "For Loop Example:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Iteration: $i<br>";
}

// Example with foreach loop
echo "<br>Foreach Loop Example:<br>";
$colors = array("Red", "Green", "Blue", "Yellow", "Purple");
foreach ($colors as $color) {
    echo "Color: $color<br>";
}

// Example with while loop
echo "<br>While Loop Example:<br>";
$number = 1;
while ($number <= 5) {
    echo "Number: $number<br>";
    $number++;
}

// Example with do-while loop
echo "<br>Do-While Loop Example:<br>";
$counter = 1;
do {
    echo "Counter: $counter<br>";
    $counter++;
} while ($counter <= 5);

// Example with nested loop
// Set the number of rows for the triangle
$rows = 5;

// Outer loop for each row
for ($i = 1; $i <= $rows; $i++) {
    // Inner/nested loop for each number in the current row
    for ($j = 1; $j <= $i; $j++) {
        echo $j; // Print the number
    }
    // Move to the next line after printing all numbers in the current row
    echo "<br>";
}

?>
