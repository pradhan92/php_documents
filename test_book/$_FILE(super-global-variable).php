<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>

<h2>Upload a File</h2>

<form action="upload_process.php" method="post" enctype="multipart/form-data">
    <label for="file">Choose file:</label>
    <input type="file" id="file" name="file" required>
    <input type="submit" value="Upload File">
</form>

</body>
</html>
<?php
// Check if a file was uploaded
if (isset($_FILES['file'])) {
    // File upload information
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    
    // Specify the directory to save the uploaded file
    $uploadDirectory = 'uploads/';
    $uploadFile = $uploadDirectory . basename($fileName);

    // Check if there was an upload error
    if ($fileError === UPLOAD_ERR_OK) {
        // Move the uploaded file to the specified directory
        if (move_uploaded_file($fileTmpName, $uploadFile)) {
            echo "File uploaded successfully!<br>";
            echo "File Name: " . htmlspecialchars($fileName) . "<br>";
            echo "File Size: " . $fileSize . " bytes<br>";
            echo "File Type: " . htmlspecialchars($fileType) . "<br>";
        } else {
            echo "Failed to move uploaded file.";
        }
    } else {
        echo "Error uploading file: " . $fileError;
    }
} else {
    echo "No file uploaded.";
}
?>
