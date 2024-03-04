<?php
require("Person.php");
require("Staff.php");
require("Doctor.php");
require("Patient.php");
require("Nurse.php");
require("Appointment.php");

# Create patients
$tobi = new Patient("Tobi", "Patient", 100);
$swieber = new Patient("Swieber", "Patient", 80);
$misha = new Patient("Misha", "Patient", 80);

# Create nurses
$jasmine = new Nurse("Jasmine", "Nurse", 200);
$chloe = new Nurse("Chloe", "Nurse", 200);

# Create doctors
$alexandra = new Doctor("Dr. Alexandra", "Doctor", 500);
$walter = new Doctor("Dr. White", "Doctor", 5000);

# Create appointments
$bloedarmoede = new Appointment(
    $misha,
    $walter,
    array($jasmine, $chloe),
    "2012-12-12 09:00:00",
    "2012-12-12 10:00:00"
);

print_r($bloedarmoede->getAppointments());

?>