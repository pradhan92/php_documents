<?php
// create table in sql
// CREATE TABLE users (
//     id INT(11) AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(100) NOT NULL,
//     email VARCHAR(100) NOT NULL,
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// );

// connect to sql

class Database {
    // Declaring private properties for database credentials
    private $servername;
    private $username;
    private $password;
    private $dbname;

    // Protected function to establish a database connection
    protected function connect() {
        // Setting database credentials
        $this->servername = "localhost"; // Hostname
        $this->username = "root";        // Username
        $this->password = "";            // Password
        $this->dbname = "php_oop";       // Database name

        // Create a new mysqli object to establish the connection
        $conn = new mysqli(
            $this->servername,  // Fixed comma (was semicolon)
            $this->username,    // Fixed comma (was semicolon)
            $this->password,    // Fixed comma (was semicolon)
            $this->dbname       // No semicolon needed here
        );

        // Check for connection errors
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error); // Display error if connection fails
        }

        return $conn; // Return the connection object
    }
}

?>
