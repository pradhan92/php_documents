<?php
// Late Static Binding
    // Late Static Binding in PHP is a feature that allows you to refer to the called class
    // in a context of static method calls and properties, especially when dealing with inheritance.
    // This feature is useful for ensuring that static methods and properties are correctly resolved
    // to the class where the method was called, rather than where it was defined.

// Key Concepts
    // 1. Late Static Binding: It allows a static method or property to reference the class in which the method
    // was called, not necessarily the class where the method was originally defined.
    // 2. static:: Operator: PHP uses static:: instead of self:: to refer to the class where the method was called.

class ParentClass {
    public static function whoAmI() {
        // Late static binding: this refers to the called class, not the class where the method is defined
        echo static::class . "\n";
    }
}

class ChildClass extends ParentClass {
    // Overriding the method in the child class
    public static function whoAmI() {
        // Call the parent method to see the result of late static binding
        parent::whoAmI();
        echo "I am ChildClass\n";
    }
}

// Call the static method on the child class
ChildClass::whoAmI(); 
// Output:
// ChildClass
// I am ChildClass



//Explanation
    // 1.ParentClass:
    // Contains a static method whoAmI() that uses static::class to get the class name where
    // the method was called.
    // 2. ChildClass:
    // a. Extends ParentClass and overrides the whoAmI() method.
    // b. Calls the parent::whoAmI() method to demonstrate Late Static Binding.
    // 3.Calling ChildClass::whoAmI():
    // a. When ChildClass::whoAmI() is called, it first executes the ParentClass::whoAmI() method.
    // b. Due to Late Static Binding, static::class inside ParentClass::whoAmI() resolves to 
    //     ChildClass, not ParentClass.
    // c. Thus, the output reflects the class where the method was called (ChildClass), followed
    //     by the specific message in ChildClass.
?>
