<?php
//Variables types-loosly typed
/* 
String
Integer 
Float/Double
Boolean - True/False -
Null
Array
Object
Resource
*/
/*
 Boolean to String
 True=>1
 False=>nothing
*/
//Declare variable
$last_name="Fernando";
$full_name="Alex " . $last_name;//String
$full_name2='John ' . $last_name . ". I'm from Colombo.";
//$age=18;//Integer
//$city="Colombo";//String
//$height=5.1;//Float
//$ismarried= True;//Boolean
//$address= Null;

//Print the variables

echo $full_name; "<br>"; //Alex Fernando
echo $full_name2;
//echo $age;"<br>";//18
//echo $city;"<br>";//Colombo
//echo $height;"<br>";//5.1
//echo $ismarried;"<br>";//1
//echo $address;"<br>";//

//Print the variables
//echo gettype($full_name); "<br>";
//echo gettype($age); "<br>";
//echo gettype($city); "<br>";
//echo gettype($height); "<br>";
//echo gettype($ismarried); "<br>";
//echo gettype($address); "<br>";

// Print the variables(Whole)
//var_dump($full_name)

//Constant
define("Example","Sample constant value"); "<br>";
echo Example;

?>