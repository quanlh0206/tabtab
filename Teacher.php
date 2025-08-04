<?php
include_once "People.php";

class Teacher extends People {
    public function showInfo() {
        echo "Teacher: $this->name, $this->age, $this->class, Wallet: $" . $this->getWallet() . "<br>";
    }
}
