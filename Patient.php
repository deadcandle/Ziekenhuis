<?php
class Patient extends Person {
    private float $payment;

    public function __construct($name, $role, $payment) {
        parent::__construct($name, $role);
    }
}
?>