<?php
require_once "person.php";
require_once "student.php";

//$student = new person("Nimal");

//$student->f_name = "Nimal";
//$student->l_name = "Fernando";

//set age
//$student-> setAge(21);

//get age
//echo $student->getAge();

//get static method
//echo person::getNumber();

//$student->address = "Colombo";

$student1 = new student("Nimal");

$student1-> setSalary(10000);

echo "<pre>";
var_dump($student1);
echo "</pre>";

$student2 = new person("Jehan");

$student2->f_name = "Jehan";
$student2->l_name = "Fernando";

//set age
$student2-> setAge(20);

//get age
echo $student2->getAge();

//get static method
echo person::getNumber();

echo "<pre>";
var_dump($student2);
echo "</pre>";

echo $student2->f_name ." ". $student2->l_name;

?>