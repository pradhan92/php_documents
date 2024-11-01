<?php
// this code for mysql
    // CREATE DATABASE IF NOT EXISTS test_db;

    // USE test_db;

    // CREATE TABLE IF NOT EXISTS users (
    //     id INT AUTO_INCREMENT PRIMARY KEY,
    //     name VARCHAR(100) NOT NULL,
    //     email VARCHAR(100) NOT NULL UNIQUE
    // );



// Database connection details
$servername = "localhost";  // Typically 'localhost' for local development
$username = "root";         // Your database username
$password = "";             // Your database password
$dbname = "test_db";        // Name of the database

// 1. Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the database.\n";

// 2. Inserting data into the database
$name = "John Doe";
$email = "john.doe@example.com";
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.\n";
} else {
    echo "Error: " . $sql . "\n" . $conn->error;
}

// 3. Selecting data from the database
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "\n";
    }
} else {
    echo "0 results.\n";
}

// 4. Updating data in the database
$update_id = 1;  // Assuming we want to update the record with id 1
$new_name = "Jane Doe";
$sql = "UPDATE users SET name='$new_name' WHERE id=$update_id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully.\n";
} else {
    echo "Error updating record: " . $conn->error;
}

// 5. Deleting data from the database
$delete_id = 1;  // Assuming we want to delete the record with id 1
$sql = "DELETE FROM users WHERE id=$delete_id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully.\n";
} else {
    echo "Error deleting record: " . $conn->error;
}

// 6. Closing the database connection
$conn->close();
echo "Connection closed.\n";

?>
