<?php
class Appointment {
    private Patient $patient;
    private Doctor $doctor;
    private array $nurses = [];
    private string $beginTime; //TODO DateTime
    private string $endTime; //TODO DateTime
    public static string $count;
    public static array $appointments = [];

    public function __construct($patient, $doctor, $nurses, $beginTime, $endTime) {
        $this->patient = $patient;
        $this->doctor = $doctor;
        foreach ($nurses as $nurse) {
            array_push($this->nurses, $nurse);
        }
        $this->beginTime = $beginTime;
        $this->endTime = $endTime;
        // array_push(Appointment::$appointments, $this);
        self::$appointments[] = $this;
    }

    public static function getAppointments() {
        return self::$appointments;
    }

    public function addNurse($nurse)
    {
        array_push($this->nurses, $nurse);
    }

    public function getTimeDifferences() : float {
        return strtotime($this->beginTime);
    }

    public function getCosts() : float {
        return $this->getTimeDifferences();
    }

    # Getters and setters
    public function getPatient() {
        return $this->patient;
    }
    public function setPatient($patient) {
        $this->patient = $patient;
    }
    public function getDoctor() {
        return $this->doctor;
    }
    public function setDoctor($doctor) {
        $this->doctor = $doctor;
    }
    public function getNurses() {
        return $this->nurses;
    }
    public function getBeginTime() {
        return $this->beginTime;
    }
    public function setBeginTime($beginTime) {
        $this->beginTime = $beginTime;
    }
    public function getEndTime() {
        return $this->endTime;
    }
    public function setEndTime($endTime) {
        $this->endTime = $endTime;
    }
    public function getCount() {
        return $this->count;
    }
    public function setCount($count) {
        $this->count = $count;
    }
}
?>