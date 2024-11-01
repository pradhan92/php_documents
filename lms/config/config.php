<?php
session_start();

// Check if the server is localhost (development environment)
if ($_SERVER['HTTP_HOST'] == 'localhost') {
    // Define the base URL for the local environment
    define("BASE_URL", "http://localhost/phplearns/lms/");

    // Define the directory URL for the local environment
    define("DIR_URL", $_SERVER['DOCUMENT_ROOT'] . "/phplearns/lms/");

    // Define database connection details for localhost
    define("SERVER_NAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "lma");

} else {
    // Define the base URL for production environment
    define("BASE_URL", "https://lms.com");

    // Define the directory URL for production environment
    define("DIR_URL", $_SERVER['DOCUMENT_ROOT']);

    // Define database connection details for production
    define("SERVER_NAME", "");
    define("USERNAME", "");
    define("PASSWORD", "");
    define("DATABASE", "");
}
?>
