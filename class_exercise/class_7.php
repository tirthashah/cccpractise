<?php
    class Employee
    {
        public $name;
        public $position;
        public $salary;

        public function calculateYearlyBonus()
        {
            return $this->salary * 0.1;
        }
    }
    $employee=new Employee();
    $employee->name="Alice";
    $employee->position="Manager";
    $employee->salary=50000;

    echo $employee->calculateYearlyBonus();

?>