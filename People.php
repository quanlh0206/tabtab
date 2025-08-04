<?php

class People {
    public string $name;
    public int $age;
    public string $class;
    private float $defaultWallet = 0;

    public function __construct($name, $age, $class) {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function getWallet(){
        return $this->defaultWallet;
    }
}