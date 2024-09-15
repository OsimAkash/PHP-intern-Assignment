<?php

// Dog class extending DomesticAnimal
class Dog extends DomesticAnimal {

    // Constructor to initialize the name
    public function __construct($name) {
        parent::__construct($name); // Call parent constructor
    }

    // Overriding makeSound method
    public function makeSound() {
        echo "Woof, woof.\n";
    }
}

