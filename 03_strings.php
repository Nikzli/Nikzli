<?php

// Create String
$string ='Hi World'; 
$string2 ="Hello World";

echo $string . "<br>"; 
echo $string2 . "<br>";

$first_name = "Shenin";
$last_name ="Fernando";
$name ="Hi, I'm ".$first_name." ".$last_name. "<br>";
$name2 ="Hi, I'm ".$first_name." ".$last_name. "<br>";

echo $name;
echo $name2;

//String Functions
$string = "Sunshine World";
echo "strlen-" . strlen($string)."<br>";//14
echo "trim-".trim($string)."<br>";
echo "ltrim-".ltrim($string)."<br>";
echo "str_word_count ".str_word_count($string)."<br>";//2
echo "strrev-".strrev($string)."<br>";//dlroW enihsnuS
echo "strtoupper-".strtoupper($string)."<br>";//SUNSINE WORLD
echo "strtolower-".strtolower($string)."<br>";
echo "ufirst-".ucfirst("sunshine")."<br>";
echo "lcfirst-".lcfirst("SUNSHINE")."<br>";
echo "strtolower-".ucfirst($string)."<br>";
echo "strtoupper-".lcfirst($string);

?>
