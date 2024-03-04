<?php
class Nurse extends Staff {
    public function __construct($name, $role, $payment) {
        // parent::__construct($name, $role, $payment);
        // parent::$name = $name;
        // parent::$role = $role;
        // parent::$payment = $payment;
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