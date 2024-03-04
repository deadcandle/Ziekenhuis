<?php
class Doctor extends Staff {
    public function __construct($name, $role, $payment) {
        $this->name = $name;
        $this->role = $role;
        $this->payment = $payment;
    }
    
    # Getters and setters
    public function setSalary($amount) {
        $this->salary = $amount;
    }
    public function getSalary($amount) {
        return $this->salary;
    }
}
?>