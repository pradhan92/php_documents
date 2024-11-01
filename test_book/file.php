<?php

// Writing to a file
// To write to a file in PHP, you can use the fwrite() function, which requires
// you to first open the file using fopen().
//Explanation:
// 1.fopen($filename, 'w'): Opens the file in write mode. If the file doesn't exist,
//   it creates a new one. If it does exist, it truncates the file to zero length,
//   effectively erasing its contents.
// 2.fwrite($fileHandle, $string): Writes the specified string to the file.
// 3.fclose($fileHandle): Closes the file, freeing up system resources.

$filename = 'example.txt';
$fileHandle = fopen($filename, 'w');

if ($fileHandle) {
    fwrite($fileHandle, "Hello, World!\n");
    fwrite($fileHandle, "This is a second line.\n");
    fclose($fileHandle);
    echo "Data written to file successfully.\n";
} else {
    echo "Failed to open file for writing.\n";
}

// Reading from a file
// To read from a file, you can use the fread() function after opening the file in read mode ('r').
// Explanation:
// 1.fopen($filename, 'r'): Opens the file in read mode. If the file does not exist, it returns false.
// 2.fread($fileHandle, filesize($filename)): Reads the entire file content. The filesize() 
//   function returns the size of the file in bytes, which is used to read the whole file.
// 3.fclose($fileHandle): Closes the file.

$filename = 'example.txt'; // which file is open that file name in variable
$fileHandle = fopen($filename, 'r'); // save in variable filehandle and open is fopen where $filename is file and r is read.

if ($fileHandle) {
    $fileContent = fread($fileHandle, filesize($filename));
    echo "File content:\n";
    echo $fileContent;
    fclose($fileHandle);
} else {
    echo "Failed to open file for reading.\n";
}

// Listing files in a directory
// To list files in a directory, you can use the scandir() function,
//  which returns an array of files and directories.
//Explanation:
// 1.scandir($directory): Returns an array of filenames and directories in the specified directory.
// 2.array_diff($files, array('.', '..')): Removes the . and .. entries, which represent the current
//   and parent directories, respectively.
// 3.foreach loop: Iterates over the array and outputs each file or directory name.

$directory = './';  //file path
$files = scandir($directory); //save in variable or scan directory
$files = array_diff($files, array('.', '..'));  // remove the same element

echo "Files in directory '$directory':\n";
foreach ($files as $file) {
    echo $file . "\n";
}


//Key Points
// 1.Error Handling: Always check if fopen() returns a valid file handle before proceeding to read or write.
// 2.File Modes: Use different file modes ('r', 'w', 'a', etc.) depending on the operation. 'r' is for reading,
//   'w' for writing (truncates the file), and 'a' for appending to the end of the file.
// 3.File Size: When reading files with fread(), ensure the file size is correctly specified to avoid reading 
//   more than what's available.
// 4.Directory Scanning: Use scandir() to easily list files and directories within a specified directory.
//   Remember to filter out the . and .. entries.
?>
