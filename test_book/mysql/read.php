<?php
include("./config.php");
$getStudents=$conn->prepare("SELECT * FROM students");
$getStudents->execute();
$getStudents=$getStudents->fetchAll();


// 1 example
echo"<table border='1'>";
foreach($students as $index-> $student){
    echo"<tr>
    <td>++index</td>
    <td>". student['name']"</td>
    <td>". student['course']"</td>
    <td>". student['batch']"</td>
    <td>". student['city']"</td>
    <td>". student['year']"</td>
    </tr>";
}
echo "</table>";

// 2 example
include("./config.php"); // Assuming 'config.php' establishes a PDO connection and assigns it to $conn

// Prepare and execute the SQL statement
$getStudents = $conn->prepare("SELECT * FROM students");
$getStudents->execute();

// Fetch all results
$students = $getStudents->fetchAll(PDO::FETCH_ASSOC);

// Display the data in an HTML table
echo "<table border='1'>";
echo "<tr><th>#</th><th>Name</th><th>Course</th><th>Batch</th><th>City</th><th>Year</th></tr>";

foreach ($students as $index => $student) {
    echo "<tr>
    <td>" . (++$index) . "</td>
    <td>" . $student['name'] . "</td>
    <td>" . $student['course'] . "</td>
    <td>" . $student['batch'] . "</td>
    <td>" . $student['city'] . "</td>
    <td>" . $student['year'] . "</td>
    </tr>";
}

echo "</table>";

//example 3
include 'config.php'; // Assuming 'config.php' sets up the $conn connection using MySQLi

// Correct SQL query to fetch data from the correct table, e.g., 'students'
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>#</th><th>Name</th><th>Course</th><th>Batch</th><th>City</th><th>Year</th></tr>";
    
    // Initialize an index for numbering
    $index = 0;

    // Fetch and display each row of data
    while ($student = $result->fetch_assoc()) {
        $index++; // Increment index for each student
        echo "<tr>
        <td>" . $index . "</td>
        <td>" . $student['name'] . "</td>
        <td>" . $student['course'] . "</td>
        <td>" . $student['batch'] . "</td>
        <td>" . $student['city'] . "</td>
        <td>" . $student['year'] . "</td>
        </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>