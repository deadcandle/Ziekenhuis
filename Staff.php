<?php
abstract class Staff extends Person {
    private float $salary;

    abstract public function setSalery();
    
    # Getters and setters
    public function getSalary()
    {
        return $this->salary;
    }
}
?>