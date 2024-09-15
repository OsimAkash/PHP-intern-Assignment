<?php

// Assume the necessary classes (Cat, Dog, Lion, Wolf, Cow) and interfaces (Animal, DomesticAnimal) are defined

// Main class
class Main {

    public static function main() {
        // Create an array of all animals
        $animals = [
            new Cat("Pupu"),
            new Dog("Frufru"),
            new Lion(),
            new Monkey(),
            new Cat("Kiki"),
            new Cow("Milky")
        ];

        // Iterate over each animal and make it produce sound
        foreach ($animals as $animal) {
            $animal->makeSound();
        }

        // Filter domestic animals
        $domesticAnimals = array_filter($animals, function($animal) {
            return $animal instanceof DomesticAnimal;
        });

        // Iterate over each domestic animal
        foreach ($domesticAnimals as $domesticAnimal) {
            echo sprintf("Domestic animal with name: %s and sound...\n", $domesticAnimal->getName());
            $domesticAnimal->makeSound();
        }
    }
}

// Run the main method
Main::main();


