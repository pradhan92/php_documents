<?php
$name = "tara";
$h2_color="green";


//loop


// for ($i+1;$i<10;$i++){
//     echo $name  . "<br>";
// }


// $i = 1;
// do{ 
//     echo $name  . "<br>";
//     $i++; }
//     while($i<10);


// $i = 1; 

// while ($i < 10) { 
//     echo $name . "<br>";
//     $i++; 
// }


// data type

// String
$name = "tara";   // String data type

// Integer
$age = 25;        // Integer data type

// Float
$weight = 84.5;   // Float data type

// Boolean
$is_active = true;  // Boolean data type (can be true or false)

// Null
$unset_var = null; // Null data type

// Array
$details = [
    "name" => $name,   // String
    "age" => $age,     // Integer
    "weight" => $weight, // Float
    "active" => $is_active // Boolean
];

// Object/Class
class Person {
    public $name;
    public $age;
    public $weight;

    public function __construct($name, $age, $weight) {
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
    }
}

$person = new Person($name, $age, $weight); // Object of class Person

// Resource
$resource = fopen('example.txt', 'w'); // Resource data type (file handle)

// Print the values to see the output
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Weight: " . $weight . "<br>";
echo "Active: " . ($is_active ? 'Yes' : 'No') . "<br>";
print_r($details);  // Print array

// Object details
echo "<br>Object Details:<br>";
echo "Person Name: " . $person->name . "<br>";
echo "Person Age: " . $person->age . "<br>";
echo "Person Weight: " . $person->weight . "<br>";

// Close the resource
fclose($resource);



$a=10;
$b=10;
$c=20;
if($a!=$c){
    echo"false";
}else{echo"true";}


// all concat in one line ans= 201010
$c.=$a.=$b;
echo$c;
?>
<h2 style="color:<?php echo $h2_color;?>">$Pradhan</h2>