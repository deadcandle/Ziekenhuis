<?php
class Appointment {
    private Patient $patient;
    private Doctor $doctor;
    private array $nurses = array(); //TODO DateTime
    private string $beginTime; //TODO DateTime
    private string $endTime;
    public int $count;
    public static array $appointments = array();

    public function __construct($patient, $doctor, $nurses, $beginTime, $endTime) {
        $this->patient = $patient;
        $this->doctor = $doctor;
        array_push($this->nurses, $nurses);
        $this->beginTime = $beginTime;
        $this->endTime = $endTime;
        array_push(Appointment::$appointments, $this);
    }

    # Getters and setters
    public function getPatient()
    {
        return $this->patient;
    }
    public function setPatient($patient)
    {
        $this->patient = $patient;
    }
    public function getDoctor()
    {
        return $this->doctor;
    }
    public function setDoctor($doctor)
    {
        $this->doctor = $doctor;
    }
    public function getNurses()
    {
        return $this->nurses;
    }
    public function addNurse($nurse)
    {
        array_push($this->nurses, $nurse);
    }
    public function getBeginTime()
    {
        return $this->beginTime;
    }
    public function setBeginTime($beginTime)
    {
        $this->beginTime = $beginTime;
    }
    public function getEndTime()
    {
        return $this->endTime;
    }
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }
    public function getCount()
    {
        return $this->count;
    }
    public function setCount($count)
    {
        $this->count = $count;
    }
    public static function getAppointments() {
        return Appointment::$appointments;
    }
}
?>