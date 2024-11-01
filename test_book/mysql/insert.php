<?php
// Example 1
include("./config.php");

$student=$conn->prepare("
INSERT INTO 'students'('id','name','course','batch','city','year')
VALUE(NULL,'tara','MBBS','Evening','Ilam','3rd');
");
$result = $student->execute();
if($result){
    echo "Data has been successfully saved";
}
// esle{
//     echo "Data can not saved";
// }
?>


<?php
// example 2


// Include the database connection file

include("./config.php"); // Assuming 'config.php' establishes a PDO connection and assigns it to $conn

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];

    // Prepare the SQL statement with placeholders
    $student = $conn->prepare("
        INSERT INTO `students` (`id`, `name`, `course`, `batch`, `city`, `year`)
        VALUES (NULL, :name, :course, :batch, :city, :year)
    ");

    // Bind values to the placeholders
    $student->bindValue(':name', $name);
    $student->bindValue(':course', $course);
    $student->bindValue(':batch', $batch);
    $student->bindValue(':city', $city);
    $student->bindValue(':year', $year);

//same way of above
 // Bind variables to the placeholders using bindParam()
//  $student->bindParam(':name', $name);
//  $student->bindParam(':course', $course);
//  $student->bindParam(':batch', $batch);
//  $student->bindParam(':city', $city);
//  $student->bindParam(':year', $year);

    // Execute the statement
    $result = $student->execute();

    if ($result) {
        echo "Data has been successfully saved.";
    } else {
        echo "Data cannot be saved.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
</head>
<body>
    <h2>Register a New Student</h2>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="course">Course:</label>
        <input type="text" id="course" name="course" required><br><br>

        <label for="batch">Batch:</label>
        <input type="text" id="batch" name="batch" required><br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" required><br><br>

        <label for="year">Year:</label>
        <input type="text" id="year" name="year" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
