<?php
include('./config.php'); // Assuming 'config.php' establishes a PDO connection and assigns it to $conn

// Initialize an empty search query
$searchQuery = '';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
    // Retrieve the search query from the form
    $searchQuery = $_POST['search_query'];
}

// Prepare the SQL statement to select id and name from students based on the search query
$sql = "SELECT id, name FROM students WHERE name LIKE :searchQuery";
$getStudent = $conn->prepare($sql);
$getStudent->bindValue(':searchQuery', '%' . $searchQuery . '%');
$getStudent->execute();
$studentData = $getStudent->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Search</title>
</head>
<body>
    <!-- Search Form -->
    <form method="POST" action="">
        <label for="search_query">Search for a Student:</label>
        <input type="text" id="search_query" name="search_query" value="<?php echo htmlspecialchars($searchQuery); ?>">
        <input type="submit" name="search" value="Search">
    </form>

    <!-- Dropdown List -->
    <form>
        <label for="students">Select a Student:</label>
        <select id="students" name="student_id">
            <option value="">Select Name</option>
            <?php
            // Iterate through the student data to create option elements
            foreach ($studentData as $student) {
                echo "<option value='" . $student['id'] . "'>" . htmlspecialchars($student['name']) . "</option>";
            }
            ?>
        </select>
    </form>
</body>
</html>
