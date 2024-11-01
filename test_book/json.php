<?php


// JSON (JavaScript Object Notation) is a lightweight data-interchange format that is easy for
// humans to read and write, and easy for machines to parse and generate. In PHP, JSON is often 
// used to exchange data between the server and client or to store data in a structured format.
// PHP provides built-in functions to handle JSON data. These functions include:
// 1. json_encode(): Converts a PHP array or object into a JSON string.
// 2. json_decode(): Converts a JSON string into a PHP array or object.

// PHP array to encode to JSON
$data = [
    "name" => "Jane Doe",
    "age" => 25,
    "email" => "jane.doe@example.com",
    "is_member" => false,
    "skills" => ["Python", "Java", "SQL"]
];

// Encode PHP array to JSON
$jsonData = json_encode($data);

echo "JSON Encoded Data:\n";
echo $jsonData . "\n";

// Decode JSON back to PHP array
$decodedArray = json_decode($jsonData, true);

// Decode JSON back to PHP object
$decodedObject = json_decode($jsonData);

echo "\nDecoded JSON to PHP Array:\n";
print_r($decodedArray);

echo "\nDecoded JSON to PHP Object:\n";
print_r($decodedObject);

// Handling invalid JSON
$invalidJson = '{"name": "Jane Doe", "age": 25, "email": "jane.doe@example.com",}';
$decodedData = json_decode($invalidJson);

if (json_last_error() !== JSON_ERROR_NONE) {
    echo "\nJSON Error: " . json_last_error_msg() . "\n";
} else {
    echo "\nDecoded JSON Data:\n";
    print_r($decodedData);
}

//Key Points
// 1. Encoding (json_encode): Converts PHP arrays or objects into a JSON string for storage or transmission.
// 2. Decoding (json_decode): Converts a JSON string back into a PHP array or object, allowing the data to be
//    used within PHP scripts.
// 3. Error Handling: Always check for errors when encoding or decoding JSON, especially when dealing with user
//    input or external data sources.
// 4. Associative Arrays and Objects: json_decode() returns an object by default. To get an associative array,
//    pass true as the second parameter.

?>
