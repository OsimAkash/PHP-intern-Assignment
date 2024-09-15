<?php


// Cat class extending DomesticAnimal
class Cat extends DomesticAnimal {

    // Constructor to initialize the name
    public function __construct($name) {
        parent::__construct($name); // Call parent constructor
    }

    // Overriding makeSound method
    public function makeSound() {
        echo "Meou (^-^)\n";
    }
}


