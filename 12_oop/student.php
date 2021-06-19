<?php
require_once "person.php";

class student extends person{
    public function setSalary($salary){
        $this->salary= $salary;
    }

}

?>