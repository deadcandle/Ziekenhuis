<?php
class Patient extends Person {
    private float $payment;

    public function __construct($name, $role, $payment) {
        $this->name = $name;
        $this->role = $role;
        $this->payment = $payment;
    }
}
?>