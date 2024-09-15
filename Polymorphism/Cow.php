<?php

// Cow class extending DomesticAnimal
class Cow extends DomesticAnimal {

    // Constructor to initialize the name
    public function __construct($name) {
        parent::__construct($name); // Call the parent constructor
    }

    // Overriding makeSound method
    public function makeSound() {
        echo "Moo.\n";
    }
}


