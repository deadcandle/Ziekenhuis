<?php
abstract class Staff extends Person {
    private float $salary;

    public function __construct($name, $role) {
        parent::__construct($name, $role);
    }

    abstract public function setSalary($amount);
}
?>