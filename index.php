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
$sophie = new Nurse("Sophie", "Nurse", 4000);

# Create doctors
$alexandra = new Doctor("Dr. Alexandra", "Doctor", 4500);
$walter = new Doctor("Dr. White", "Doctor", 8500);

# Create appointments
$bloedarmoede = new Appointment(
    $misha,
    $walter,
    array($jasmine, $chloe, $sophie),
    "2012-12-12 09:00:00",
    "2012-12-12 10:00:00"
);
$depressie = new Appointment(
    $tobi,
    $alexandra,
    array($jasmine),
    "2014-12-12 09:00:00",
    "2014-12-12 11:00:00"
);

?>

<style>
    html {
        filter: invert();
        font-family: Arial;
        max-width: 512px;
        margin: auto;
    }
    hr {
        border: none;
        border-bottom: 5px solid black;
    }
</style>

<h1>Welkom</h1>
<p>Er zijn <?php echo sizeof($bloedarmoede->getAppointments()); ?> afspraken gepland.
<hr>
<?php foreach ($bloedarmoede->getAppointments() as $appointment) : ?>
    <b>Patient:</b> <?php echo $appointment->getPatient()->getName(); ?><br>
    <b>Arts:</b> <?php echo $appointment->getDoctor()->getName(); ?><br>
    <b>Verpleegsters:</b>
    <ul>
    <?php foreach ($appointment->getNurses() as $nurse) : ?>
        <li>Verpleegster <?php echo $nurse->getName(); ?></li>
    <?php endforeach ?>
    </ul>
    <b>Duratie:</b> <?php echo round($appointment->getTimeDifferences()/60); ?> minutes<br>
    <b>Kosten:</b> $<?php print_r($appointment->getCosts()); ?>
    <hr>
<?php endforeach ?>