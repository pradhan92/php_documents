<?php
//File Handling Functions in PHP
    // fopen() - Opens a file or URL.
    // fwrite() - Writes data to an open file.
    // fread() - Reads data from an open file.
    // fclose() - Closes an open file.
    // file_exists() - Checks whether a file exists.
    // filesize() - Returns the size of a file.
    // unlink() - Deletes a file.

// Modes 
    // "r" - Open a file for reading.
    // "w" - Open a file for writing. (Overwrites the file or creates it if it doesn't exist.)
    // "a" - Open a file for writing. (Appends to the file if it exists.)
    // "x" - Create a new file for writing. (Fails if the file exists.)
    // "r+" - Open a file for reading and writing.
    // "w+" - Open a file for reading and writing. (Overwrites or creates a new file.)
    // "a+" - Open a file for reading and writing. (Appends if the file exists.)



// Step 1: Creating and Writing to a File

$file = "example.txt";

// Check if the file exists
if (!file_exists($file)) {
    // Open the file for writing (w mode will create the file if it doesn't exist)
    $handle = fopen($file, "w");

    if ($handle) {
        // Write data to the file
        $content = "Hello, this is a simple file created and written in PHP!\n";
        fwrite($handle, $content);

        $additional_content = "This is an additional line appended to the file.\n";
        fwrite($handle, $additional_content);

        // Close the file after writing
        fclose($handle);

        echo "File created and written successfully!\n";
    } else {
        echo "Failed to create the file.\n";
    }
} else {
    echo "File already exists.\n";
}

// Step 2: Reading from the File

if (file_exists($file)) {
    // Open the file for reading (r mode)
    $handle = fopen($file, "r");

    if ($handle) {
        // Read the entire file content
        $content = fread($handle, filesize($file));
        echo "File content:\n" . $content;

        // Close the file after reading
        fclose($handle);
    } else {
        echo "Failed to open the file for reading.\n";
    }
} else {
    echo "File does not exist.\n";
}

// Step 3: Appending to the File

if (file_exists($file)) {
    // Open the file for appending (a mode)
    $handle = fopen($file, "a");

    if ($handle) {
        // Append new content to the file
        $new_content = "This is a new line appended using the append mode.\n";
        fwrite($handle, $new_content);

        // Close the file after appending
        fclose($handle);

        echo "New content appended to the file.\n";
    } else {
        echo "Failed to open the file for appending.\n";
    }
}

// Step 4: Deleting the File

// Uncomment the following code to delete the file after reading and writing
/*
if (file_exists($file)) {
    if (unlink($file)) {
        echo "File deleted successfully.\n";
    } else {
        echo "Failed to delete the file.\n";
    }
} else {
    echo "File does not exist.\n";
}
*/

?>
