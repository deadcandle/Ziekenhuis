<?php
abstract class Staff extends Person {
    private float $salary;

    abstract public function setSalary($amount);
}
?>