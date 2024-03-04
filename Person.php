<?php
abstract class Person {
    private string $name;
    private string $role;
    
    public function __construct($name, $role) {
        $this->name = $name;
        $this->role = $role;
    }

    # Getters and setters
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }
}
?>