<?php
// Example with for loop using break and continue
echo "For Loop with Break and Continue:<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        // Break the loop when $i is 5
        echo "Breaking the loop when i is $i<br>";
        break;
    }
    if ($i % 2 == 0) {
        // Skip even numbers
        echo "Skipping even number: $i<br>";
        continue;
    }
    echo "Number: $i<br>";
}

// Example with foreach loop using break and continue
echo "<br>Foreach Loop with Break and Continue:<br>";
$colors = array("Red", "Green", "Blue", "Yellow", "Purple");
foreach ($colors as $color) {
    if ($color == "Yellow") {
        // Break the loop when the color is Yellow
        echo "Breaking the loop when color is $color<br>";
        break;
    }
    if ($color == "Blue") {
        // Skip the color Blue
        echo "Skipping color: $color<br>";
        continue;
    }
    echo "Color: $color<br>";
}

// Example with while loop using break and continue
echo "<br>While Loop with Break and Continue:<br>";
$count = 1;
while ($count <= 10) {
    if ($count == 8) {
        // Break the loop when $count is 8
        echo "Breaking the loop when count is $count<br>";
        break;
    }
    if ($count % 3 == 0) {
        // Skip multiples of 3
        echo "Skipping multiple of 3: $count<br>";
        $count++;
        continue;
    }
    echo "Count: $count<br>";
    $count++;
}

// Example with do-while loop using break and continue
echo "<br>Do-While Loop with Break and Continue:<br>";
$index = 1;
do {
    if ($index == 4) {
        // Break the loop when $index is 4
        echo "Breaking the loop when index is $index<br>";
        break;
    }
    if ($index == 2) {
        // Skip when $index is 2
        echo "Skipping index: $index<br>";
        $index++;
        continue;
    }
    echo "Index: $index<br>";
    $index++;
} while ($index <= 5);


// very short example
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        echo "Breaking the loop when i is $i<br>";
        break;
    }
    if ($i % 2 == 0) {
        echo "Skipping even number: $i<br>";
        continue;
    }
    echo "Number: $i<br>";
}


?>
