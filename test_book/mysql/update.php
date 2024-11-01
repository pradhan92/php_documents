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
    <title>Select Student for Update</title>
</head>
<body>
    <form method="GET" action="update_form.php">
        <label for="students">Select a Student to Edit:</label>
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
        <input type="submit" value="Edit">
    </form>
</body>
</html>


<?php
include('./config.php'); // Assuming 'config.php' establishes a PDO connection and assigns it to $conn

// Check if student_id is provided in the query string
if (isset($_GET['student_id']) && !empty($_GET['student_id'])) {
    $student_id = $_GET['student_id'];

    // Prepare the SQL statement to select student details
    $getStudentDetails = $conn->prepare("SELECT * FROM students WHERE id = :id");
    $getStudentDetails->bindParam(':id', $student_id, PDO::PARAM_INT);
    $getStudentDetails->execute();
    $student = $getStudentDetails->fetch(PDO::FETCH_ASSOC);
} else {
    // Redirect or handle error if no student_id is provided
    die('No student selected.');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student Details</title>
</head>
<body>
    <h2>Edit Student Details</h2>
    <form method="POST" action="update_process.php">
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

        <input type="submit" value="Update">
    </form>
</body>
</html>



<?php
include('./config.php'); // Assuming 'config.php' establishes a PDO connection and assigns it to $conn

// Check if form data is provided
if (isset($_POST['student_id']) && !empty($_POST['student_id'])) {
    $student_id = $_POST['student_id'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];

    // Prepare the SQL statement to update student details
    $updateStudent = $conn->prepare("
        UPDATE students
        SET name = :name, course = :course, batch = :batch, city = :city, year = :year
        WHERE id = :id
    ");

    // Bind values to the placeholders
    $updateStudent->bindParam(':id', $student_id, PDO::PARAM_INT);
    $updateStudent->bindParam(':name', $name);
    $updateStudent->bindParam(':course', $course);
    $updateStudent->bindParam(':batch', $batch);
    $updateStudent->bindParam(':city', $city);
    $updateStudent->bindParam(':year', $year);

    // Execute the statement
    $result = $updateStudent->execute();

    if ($result) {
        echo "Student details updated successfully.";
    } else {
        echo "Error updating student details.";
    }
} else {
    // Handle error if no data is provided
    die('Invalid request.');
}
?>
