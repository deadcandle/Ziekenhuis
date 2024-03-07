<?php
class Nurse extends Staff {
    public function __construct($name, $role, $payment) {
        parent::__construct($name, $role);
        $this->setSalary($payment);
    }

    # Getters and setters
    public function setSalary($amount) {
        $this->salary = $amount;
    }
    public function getSalary() {
        return $this->salary;
    }
}
?>