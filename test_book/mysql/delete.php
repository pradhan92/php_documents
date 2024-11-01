<?php
// Include the database configuration file
include('./config.php'); // Assuming 'config.php' establishes a PDO connection and assigns it to $conn

// Prepare the SQL statement to select id and name from students
$getStudent = $conn->prepare("SELECT id, name FROM students");
$getStudent->execute();
$studentData = $getStudent->fetchAll();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_student'])) {
    // Retrieve the selected student ID
    $studentId = $_POST['student_id'];

    // Prepare the SQL statement to delete the selected student
    $deleteStudent = $conn->prepare("DELETE FROM students WHERE id = :id");
    $deleteStudent->bindParam(':id', $studentId);

    // Execute the delete operation
    if ($deleteStudent->execute()) {
        echo "Student has been successfully deleted.";
    } else {
        echo "Failed to delete student.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Student</title>
</head>
<body>
    <form method="POST" action="">
        <label for="students">Select a Student to Delete:</label>
        <select id="students" name="student_id">
            <option value="">Select Name</option>
            <?php
            // Iterate through the student data to create option elements
            foreach($studentData as $student){
                echo "<option value='".$student['id']."'>".$student['name']."</option>";
            }
            ?>
        </select>
        <br><br>
        <input type="submit" name="delete_student" value="Delete">
    </form>
</body>
</html>
