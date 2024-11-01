<?php
// NameSpace
    // In PHP, namespaces are a way to encapsulate and organize code, avoiding naming conflicts and 
    // improving code readability. They help group related classes, functions, and constants together,
    // especially in larger applications or libraries.

// Key Features of Namespaces
    // 1.Avoiding Name Conflicts: Namespaces prevent name collisions by encapsulating identifiers 
    // (e.g., classes, functions) within a unique namespace.
    // 2.Organizing Code: They help structure code in a way that makes it easier to manage, especially
    // in large projects.
    // 3.Autoloading: They are often used in conjunction with autoloading standards like PSR-4 to automatically 
    // load class files.


// File: src/Utilities/Helper.php

namespace Utilities;

class Helper {
    public function assist() {
        return "Helper assisting...\n";
    }
}

// File: src/Models/User.php
namespace Models;

class User {
    public function getName() {
        return "User Name\n";
    }
}

// File: src/index.php

// Import classes from different namespaces
require_once 'Utilities/Helper.php';
require_once 'Models/User.php';

use Utilities\Helper;
use Models\User;

$helper = new Helper();
$user = new User();

echo $helper->assist(); // Output: Helper assisting...
echo $user->getName();  // Output: User Name


//Explanation
    // 1.Defining Namespaces:
    //     a.Helper Class: Defined in the Utilities namespace.
    //     b.User Class: Defined in the Models namespace.
    // 2.Using Namespaces:
    //     a.index.php:
    //         i.Includes the required files using require_once.
    //         ii.Imports the Helper class from the Utilities namespace and the User class from the Models namespace.
    //         iii.Creates instances of the classes and calls their methods.

?>
