<?php
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
    <title>Select Student</title>
</head>
<body>
    <form method="POST" action="edit_student.php">
        <label for="students">Select a Student:</label>
        <select id="students" name="student_id" required>
            <option value="">Select Name</option>
            <?php
            // Iterate through the student data to create option elements
            foreach($studentData as $student){
                echo "<option value='".$student['id']."'>".$student['name']."</option>";
            }
            ?>
        </select>
        <input type="submit" value="Edit">
    </form>
</body>
</html>



<?php
include('./config.php'); // Assuming 'config.php' establishes a PDO connection and assigns it to $conn

// Check if student_id is set in POST request
if (isset($_POST['student_id'])) {
    $student_id = $_POST['student_id'];

    // Prepare the SQL statement to select the student by id
    $getStudent = $conn->prepare("SELECT id, name, course, batch, city, year FROM students WHERE id = :id");
    $getStudent->bindParam(':id', $student_id, PDO::PARAM_INT);
    $getStudent->execute();
    $student = $getStudent->fetch(PDO::FETCH_ASSOC);
} elseif (isset($_GET['student_id'])) {
    $student_id = $_GET['student_id'];

    // Prepare the SQL statement to select the student by id
    $getStudent = $conn->prepare("SELECT id, name, course, batch, city, year FROM students WHERE id = :id");
    $getStudent->bindParam(':id', $student_id, PDO::PARAM_INT);
    $getStudent->execute();
    $student = $getStudent->fetch(PDO::FETCH_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    // Update student details
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];

    $updateStudent = $conn->prepare("
        UPDATE students 
        SET name = :name, course = :course, batch = :batch, city = :city, year = :year
        WHERE id = :id
    ");

    $updateStudent->bindParam(':name', $name);
    $updateStudent->bindParam(':course', $course);
    $updateStudent->bindParam(':batch', $batch);
    $updateStudent->bindParam(':city', $city);
    $updateStudent->bindParam(':year', $year);
    $updateStudent->bindParam(':id', $student_id, PDO::PARAM_INT);

    if ($updateStudent->execute()) {
        echo "Student details updated successfully.";
    } else {
        echo "Error updating student details.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student Details</h2>
    <form method="POST">
        <input type="hidden" name="student_id" value="<?php echo htmlspecialchars($student['id']); ?>">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($student['name']); ?>" required><br><br>

        <label for="course">Course:</label>
        <input type="text" id="course" name="course" value="<?php echo htmlspecialchars($student['course']); ?>" required><br><br>

        <label for="batch">Batch:</label>
        <input type="text" id="batch" name="batch" value="<?php echo htmlspecialchars($student['batch']); ?>" required><br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="<?php echo htmlspecialchars($student['city']); ?>" required><br><br>

        <label for="year">Year:</label>
        <input type="text" id="year" name="year" value="<?php echo htmlspecialchars($student['year']); ?>" required><br><br>

        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>
