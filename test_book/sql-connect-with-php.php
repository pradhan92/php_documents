<?php

//  Connecting to the Database using PHP
//  MySQL database named e_commerce and a table customers 

// 1. Direct style of connection with  mysqli

$servername = "localhost"; // Change if using a different host
$username = "root";        // Your MySQL username
$password = "";            // Your MySQL password
$dbname = "e_commerce";    // The database you want to connect to

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



// 2. Direct style of connection with  PDO(PHP Data Objects)
$servername = "localhost"; // Change if using a different host
$username = "root";        // Your MySQL username
$password = "";            // Your MySQL password
$dbname = "e_commerce";    // The database you want to connect to

// Create a PDO connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Check if the connection is successful
if ($conn) {
    echo "Connected successfully";
} else {
    echo "Connection failed";
}

// 3. Try catch style of connection with  mysqli
$servername = "localhost"; // Change if using a different host
$username = "root";        // Your MySQL username
$password = "";            // Your MySQL password
$dbname = "e_commerce";    // The database you want to connect to

// Enable exception mode for MySQLi
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    echo "Connected successfully";
} catch (Exception $e) {
    // Handle the exception
    echo "Connection error: " . $e->getMessage();
}


// 4. Try catch style of connection with  PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_commerce";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}




// Performing Basic CRUD Operations

// 1. Create (Insert Data)
// insert_customer.php

include 'db_connect.php';  //this is the connection file/database file

$first_name = 'Alice';
$last_name = 'Johnson';
$email = 'alice.johnson@example.com';

$sql = "INSERT INTO customers (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


// 2. Read (Fetch Data)
// fetch_customers.php

include 'db_connect.php';

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["customer_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();


// 3. Update Data
// update_customer.php

include 'db_connect.php';

$customer_id = 1;
$new_email = 'alice.new@example.com';

$sql = "UPDATE customers SET email='$new_email' WHERE customer_id=$customer_id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


// 4. Delete Data
// delete_customer.php

include 'db_connect.php';

$customer_id = 1;

$sql = "DELETE FROM customers WHERE customer_id=$customer_id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>
