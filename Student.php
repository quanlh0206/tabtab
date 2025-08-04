<?php
include_once "People.php";

class Student extends People {
    public function showInfo() {
        echo "Student: $this->name, $this->age, $this->class<br>";
    }
}