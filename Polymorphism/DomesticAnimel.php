<?php

// Abstract class DomesticAnimal extending Animal
abstract class DomesticAnimal extends Animal {

    // Domestic animals should have their names
    protected $name;

    // Constructor to assign the name
    public function __construct($name) {
        $this->name = $name;
    }

    // Getter method to retrieve the name
    public function getName() {
        return $this->name;
    }
}


