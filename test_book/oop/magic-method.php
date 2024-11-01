<?php

class MagicExample
{
    private $properties = [];
    private $name;

    // Constructor: Called when an object is created
    public function __construct($name)
    {
        $this->name = $name;
        echo "__construct called. Object created with name: {$this->name}\n";
    }

    // Destructor: Called when an object is destroyed
    public function __destruct()
    {
        echo "__destruct called. Object with name {$this->name} is being destroyed.\n";
    }

    // __set: Called when setting a property that is not accessible
    public function __set($name, $value)
    {
        echo "__set called. Setting {$name} to {$value}\n";
        $this->properties[$name] = $value;
    }

    // __get: Called when accessing a property that is not accessible
    public function __get($name)
    {
        echo "__get called. Getting value of {$name}\n";
        return $this->properties[$name] ?? null;
    }

    // __isset: Called when isset() is used on an inaccessible property
    public function __isset($name)
    {
        echo "__isset called. Is {$name} set?\n";
        return isset($this->properties[$name]);
    }

    // __unset: Called when unset() is used on an inaccessible property
    public function __unset($name)
    {
        echo "__unset called. Unsetting {$name}\n";
        unset($this->properties[$name]);
    }

    // __call: Called when invoking an inaccessible or undefined method
    public function __call($name, $arguments)
    {
        echo "__call called. Trying to call method {$name} with arguments: " . implode(', ', $arguments) . "\n";
    }

    // __callStatic: Called when invoking an inaccessible or undefined static method
    public static function __callStatic($name, $arguments)
    {
        echo "__callStatic called. Trying to call static method {$name} with arguments: " . implode(', ', $arguments) . "\n";
    }

    // __toString: Called when the object is treated as a string
    public function __toString()
    {
        return "__toString called. MagicExample object with name: {$this->name}\n";
    }

    // __invoke: Called when the object is used as a function
    public function __invoke($arg)
    {
        echo "__invoke called. Object used as a function with argument: {$arg}\n";
    }

    // __clone: Called when the object is cloned
    public function __clone()
    {
        $this->name = "Clone of " . $this->name;
        echo "__clone called. Object cloned with new name: {$this->name}\n";
    }

    // __sleep: Called when the object is serialized
    public function __sleep()
    {
        echo "__sleep called. Preparing to serialize...\n";
        return ['name'];
    }

    // __wakeup: Called when the object is unserialized
    public function __wakeup()
    {
        echo "__wakeup called. Object unserialized and reinitialized.\n";
    }

    // __serialize: Called for serializing the object in PHP 7.4+
    public function __serialize(): array
    {
        echo "__serialize called. Preparing to serialize...\n";
        return ['name' => $this->name];
    }

    // __unserialize: Called for unserializing the object in PHP 7.4+
    public function __unserialize(array $data): void
    {
        echo "__unserialize called. Object unserialized and data restored.\n";
        $this->name = $data['name'];
    }

    // __debugInfo: Called by var_dump() when dumping the object
    public function __debugInfo()
    {
        echo "__debugInfo called.\n";
        return [
            'name' => $this->name,
            'properties' => $this->properties,
        ];
    }
}

// Instantiate the object
$example = new MagicExample("John");

// Demonstrating __set and __get
$example->age = 30;  // __set
echo $example->age . "\n";  // __get

// Demonstrating __isset and __unset
isset($example->age);  // __isset
unset($example->age);  // __unset

// Demonstrating __call
$example->nonExistentMethod('arg1', 'arg2');

// Demonstrating __callStatic
MagicExample::nonExistentStaticMethod('arg1', 'arg2');

// Demonstrating __toString
echo $example;

// Demonstrating __invoke
$example("Hello!");

// Demonstrating __clone
$clone = clone $example;

// Demonstrating __sleep and __wakeup
$serialized = serialize($example);
echo $serialized . "\n";
$unserialized = unserialize($serialized);

// Demonstrating __serialize and __unserialize (PHP 7.4+)
$serialized = serialize($example);
echo $serialized . "\n";
$unserialized = unserialize($serialized);

// Demonstrating __debugInfo
var_dump($example);

// Object will be destroyed at the end of the script or when explicitly unset
unset($example);




//Explanation of the Example:
    // 1.__construct() and __destruct():
    //     a.__construct() initializes the object.
    //     b.__destruct() performs cleanup when the object is destroyed.

    // 2.__set() and __get():
    //     a.__set() is triggered when an inaccessible property is set.
    //     b.__get() is triggered when an inaccessible property is accessed.

    // 3.__isset() and __unset():
    //     a.__isset() is triggered when isset() is used on an inaccessible property.
    //     b.__unset() is triggered when unset() is used on an inaccessible property.

    // 4.__call() and __callStatic():  
    //     a.__call() is triggered when an inaccessible or undefined method is called on an object.
    //     b.__callStatic() is triggered when an inaccessible or undefined static method is called.

    // 5.__toString():
    //     a.__toString() allows an object to be treated as a string.

    // 6.__invoke():
    //     a.__invoke() allows an object to be called as if it were a function.

    // 7.__clone():
    //     a.__clone() is triggered when the object is cloned.

    // 8.__sleep() and __wakeup():
    //     a.__sleep() is triggered when the object is serialized.
    //     b.__wakeup() is triggered when the object is unserialized.

    // 9.__serialize() and __unserialize():
    //     a.__serialize() provides a way to customize object serialization (PHP 7.4+).
    //     b.__unserialize() provides a way to customize object unserialization (PHP 7.4+).
    
    // 10.__debugInfo():
    //     a.__debugInfo() customizes the output of var_dump() for the object.
?>
