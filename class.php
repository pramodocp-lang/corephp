<?php

class Employee
{
    public $name;
    public $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function display()
    {
        echo $this->name . "<br>";
        echo $this->salary;
    }
}

$emp = new Employee("Pramod", 50000);
$emp->display();

?>