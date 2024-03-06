<?php
class Doctor extends Staff {
    public function __construct($name, $role, $payment) {
        parent::__construct($name, $role);
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