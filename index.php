<?php
require_once "Student.php";
require_once "Teacher.php";

$student = new Student("Quan", 20, "12A3");
$teacher = new Teacher("Phong", 40, "12A3");

$student->showInfo();
$teacher->showInfo();
