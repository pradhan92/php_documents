<?php

// 1. example 
include('./config.php');

//$getStudent=$conn->prepare("SELECT * FROM students");
$getStudent=$conn->prepare("SELECT id,name FROM students");
$getStudent->execute();
$studentData=$getStudent->fetchAll();

echo"<select>";
echo"<option>Select Nmae</option>";
//    foreach ($studentData as $student) {
//                 echo "<option value='" . $student['id'] . "'>" . $student['name'] . "</option>";
//             }
echo"</select>";

?>

<?php
// 2. example
include('./config.php'); // Assuming 'config.php' establishes a PDO connection and assigns it to $conn

// Prepare the SQL statement to select id and name from students
$getStudent = $conn->prepare("SELECT id, name FROM students");
$getStudent->execute();
$studentData = $getStudent->fetchAll();

// Create a dropdown list to select a student name
echo "<select>";
echo "<option>Select Name</option>";

// Iterate through the student data to create option elements
foreach($studentData as $student){
   echo "<option value='".$student['id']."'>".$student['name']."</option>";
}

echo "</select>";
?>


<?php

// 3.

// Include the database configuration file
include('./config.php'); // Assuming 'config.php' establishes a PDO connection and assigns it to $conn

// Prepare the SQL statement to select id and name from students
$getStudent = $conn->prepare("SELECT id, name FROM students");
$getStudent->execute();
$studentData = $getStudent->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dropdown</title>
</head>
<body>
    <form>
        <label for="students">Select a Student:</label>
        <select id="students" name="students">
            <option>Select Name</option>
            <?php
            // Iterate through the student data to create option elements
            foreach($studentData as $student){
                echo "<option value='".$student['id']."'>".$student['name']."</option>";
            }
            ?>
        </select>
    </form>
</body>
</html>
