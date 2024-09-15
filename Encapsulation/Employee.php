<?php

// Abstract Employee Class
abstract class Employee {
    private $name;
    private $id;
    private static $numEmp = 0;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
        self::$numEmp++;  // Incrementing the static employee count
        $this->id = self::$numEmp;
    }

    // Getter Name Method
    public function getName() {
        return $this->name;
    }

    // Getter Id Method
    public function getId() {
        return $this->id;
    }

    // Static method to get the total number of employees
    public static function getNumEmp() {
        return self::$numEmp;
    }

    // Abstract method
    abstract public function calculateSalary();

    // Override method to print employee details
    public function __toString() {
        return "Employee [name=" . $this->name . ", id=" . $this->id . ", salary=" . $this->calculateSalary() . "]";
    }
}

// Full Time Employee Class inheriting Employee
class FullTimeEmployee extends Employee {
    private $monthlySalary;

    // Constructor
    public function __construct($name, $monthlySalary) {
        parent::__construct($name);
        $this->monthlySalary = $monthlySalary;
    }

    // Override method to calculate salary
    public function calculateSalary() {
        return $this->monthlySalary;
    }
}

// Part Time Employee Class inheriting Employee
class PartTimeEmployee extends Employee {
    private $hoursWorked;
    private $hourlyRate;

    // Constructor
    public function __construct($name, $hoursWorked, $hourlyRate) {
        parent::__construct($name);
        $this->hoursWorked = $hoursWorked;
        $this->hourlyRate = $hourlyRate;
    }

    // Override method to calculate salary
    public function calculateSalary() {
        return $this->hoursWorked * $this->hourlyRate;
    }
}

// PayrollSystem class
class PayrollSystem {
    private $employeeList = array();

    // Add Employee
    public function addEmployee(Employee $employee) {
        $this->employeeList[] = $employee;
    }

    // Remove Employee
    public function removeEmployee($id) {
        foreach ($this->employeeList as $index => $employee) {
            if ($employee->getId() == $id) {
                unset($this->employeeList[$index]);
                break;
            }
        }
    }

    // Display Employees
    public function displayEmployees() {
        foreach ($this->employeeList as $employee) {
            echo $employee . "\n";
        }
    }
}

// Example usage
$payrollSystem = new PayrollSystem();
$payrollSystem->addEmployee(new FullTimeEmployee("John Doe", 5000));
$payrollSystem->addEmployee(new PartTimeEmployee("Jane Smith", 80, 25));

echo "All Employees:\n";
$payrollSystem->displayEmployees();

$payrollSystem->removeEmployee(1);
echo "\nAfter Removing Employee with ID 1:\n";
$payrollSystem->displayEmployees();

