<?php

//Functions
//function printData(){
//echo "Hello, I'm Nikini";
//}
//printData();//call function 
//printData();
//printData();

//function printData($name){
  //  echo "Hello, I'm $name";
//}
//printData('Nikini');

//function printData($f_name, $l_name){
  //  echo "Hello, I'm $f_name $l_name ";
//}

//printData('Nikini', "Liyanage");

function printData($f_name, $l_name){
    return "Hello, I'm $f_name $l_name ";
}
echo printData('Nikini', "Liyanage");
echo "<br>";

//sum of two fuctions
function sum($a, $b){
    return $a + $b;
}
echo sum(2,5);
?>
