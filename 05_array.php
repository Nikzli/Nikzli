<?php
//Create an array 
$employee = ['Kamal', 25, 5.6];
$employee2 = array("Nimal", 30, 6.1);

//Print an array
print_r($employee);

echo "<pre>";
var_dump($employee2);
echo "</pre>";

//Get value
echo $employee[0]."<br>";//Kamal
echo $employee2[1];//30

//Set value by index
$employee[0]= "Sunil";
echo "<pre>";
var_dump($employee);
echo "</pre>";

//Check if array has an element
var_dump(isset($employee[0]));
var_dump(isset($employee[5]));
echo "<br>";

//Return number of elements
echo count($employee);

//Add element to the end of an array
array_push($employee, "Colombo"); 
echo "<pre>";
var_dump($employee);
echo "</pre>";

//Remove element from end of array
array_pop($employee);
echo "<pre>";
var_dump($employee);
echo "</pre>";

$color= array("Black","Blue","Red");
$color2= array("Black","Blue","Red");

$str_color= implode(",",$color)."<br>";
$str_color2= implode(", ",$color2);

echo $str_color;
var_dump($str_color2);

echo "<br>";

$arr_color= explode(",",$str_color);
echo "<pre>";
var_dump($arr_color);
echo "</pre>";

//Merge arrays
$employee_data= ["No 1, Colombo", "1087"];
echo "<pre>";
var_dump(array_merge($employee, $employee_data ));
echo "</pre>";

/*
Associative array
*/
//Create associative array
$employee= array(
    'name'=>'Kamal',
    'age'=>'25',
    'height'=>'5.6',
);
echo "<pre>";
var_dump($employee);
echo "</pre>";

//Get data from associative array
echo $employee['age'];

//Set value
$employee['address']="Colombo";
echo "<pre>";
var_dump($employee);
echo "</pre>";

/*
Multidimentional array
*/

$employee= array(
    [
        'name'=>'Kamal',
    'age'=>'25',
    'height'=>'5.6',
    ],
    [
        'name'=>'Nimal',
    'age'=>'30',
    'height'=>'6.2',
    ],
    [
        'name'=>'Sunil',
    'age'=>'20',
    'height'=>'5.3',
    ],
);
echo "<pre>";
var_dump($employee);
echo "</pre>";

//Get value
echo $employee[0]['name'];

?>