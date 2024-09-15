
<?php


// Including required classes (if they are in separate files, you should include/require them here)
// include 'Employee.php';
// include 'FullTimeEmployee.php';
// include 'PartTimeEmployee.php';
// include 'PayrollSystem.php';

class EmployeeUse {
    public static function main() {
        // Creating an instance of PayrollSystem
        $payrollSystem = new PayrollSystem();

        // Creating Full-time and Part-time employees
        $emp1 = new FullTimeEmployee("Vikas", 70000);
        $emp2 = new FullTimeEmployee("Raj", 50000);
        $emp3 = new PartTimeEmployee("Manish", 40, 100);

        // Adding employees payroll system
        $payrollSystem->addEmployee($emp1);
        $payrollSystem->addEmployee($emp2);
        $payrollSystem->addEmployee($emp3);

        // Displaying initial employee details
        echo "Initial Employees Detail: \n";
        $payrollSystem->displayEmployees();

        // Removing an employee (ID 3)
        echo "-----------\n";
        $payrollSystem->removeEmployee(3);

        // Displaying remaining employees after removal
        echo "Remaining Employees Detail: \n";
        $payrollSystem->displayEmployees();
    }
}

// Running the main method to simulate usage
EmployeeUse::main();


