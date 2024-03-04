<?php
class Nurse extends Staff {

    # Getters and setters
    public function setSalary($amount) {
        $this->salary = $amount;
    }
    public function getSalary($amount) {
        return $this->salary;
    }
}
?>