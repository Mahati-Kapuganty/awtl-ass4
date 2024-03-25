<?php

// Define a class 'Person' with properties and methods
class Person {
    // Properties
    public $name;
    public $age;

    // Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        echo "Person {$this->name} created.<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Person {$this->name} destroyed.<br>";
    }

    // Method to display person details
    public function displayDetails() {
        echo "Name: {$this->name}, Age: {$this->age}<br>";
    }
}

// Inheritance: Create a subclass 'Student' that extends 'Person'
class Student extends Person {
    // Additional property
    public $studentId;

    // Overloading: Constructor overloading to support optional studentId
    public function __construct($name, $age, $studentId = null) {
        parent::__construct($name, $age);
        $this->studentId = $studentId;
        echo "Student {$this->name} created.<br>";
    }

    // Method to display student details
    public function displayDetails() {
        parent::displayDetails();
        echo "Student ID: {$this->studentId}<br>";
    }
}

// Create objects of the classes
$person1 = new Person("Prasad Mohan", 25);
$student1 = new Student("Mahati Kapuganty", 20, "2213656");

// Function: Display details using a function
function displayPersonDetails($person) {
    $person->displayDetails();
}

// Function call with different objects
displayPersonDetails($person1);
displayPersonDetails($student1);

// Destructor is automatically called when the script ends or the objects go out of scope

?>