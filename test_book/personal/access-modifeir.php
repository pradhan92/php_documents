
<?php
// Access Modifiers:-
    // 1.public:
    //         The property or method is accessible from anywhere, both inside and outside the class.
    // 2.protected: 
    //         The property or method is accessible only within the class itself and by inheriting classes.
    // 3.private:
    //         The property or method is accessible only within the class itself, not by inheriting classes
    //         or from outside the class.


class Student {
    // Public property: accessible from anywhere
    public $name;

    // Protected property: accessible only within this class and inherited classes
    protected $grade;

    // Private property: accessible only within this class
    private $id;

    // Constructor method
    function __construct($name, $grade, $id) {
        $this->name = $name;   // public property
        $this->grade = $grade; // protected property
        $this->id = $id;       // private property
    }

    // Public method to set the name
    public function setName($str) {
        $this->name = $str;
    }

    // Public method to get the name
    public function getName() {
        return $this->name;
    }

    // Protected method: can be accessed within this class and inherited classes
    protected function setGrade($grade) {
        $this->grade = $grade;
    }

    // Private method: can be accessed only within this class
    private function setId($id) {
        $this->id = $id;
    }

    // Public method to display protected and private properties
    public function displayInfo() {
        return "Name: " . $this->name . ", Grade: " . $this->grade . ", ID: " . $this->id;
    }
}

// Create an object of the Student class
$obj = new Student("Tara", "A", "12345");

// Access the public method to set and get the name
$obj->setName("Tara Kumar");
echo "Student Name: " . $obj->getName() . "<br/>";

// Access the public method to display protected and private properties
echo $obj->displayInfo();

?>

