<?php
//Create numbers
$number = 13;
$x = 5.3;
$y = 13;
$z = 5;


echo $number."<br>";

// Arithmatic operations

echo $y + $z."<br>";
echo $x + $y."<br>";
echo $y - $z."<br>";
echo $y / $z."<br>";
echo $x * $z."<br>";
echo $y % $z."<br>"; // remaining value

echo $y + $z * $y."<br>"; // BODMAS
echo ($y+$z) * $y."<br>"."<br>";

//Assignment operators
// $x += $y;  echo $x."<br>"; // $x = $x + $y
// $y -= $x; echo $y."<br>"; 
// $x *= $z;  echo $x."<br>"; 
// $x /= $y;  echo $x."<br>"; 
// $y %= $z;  echo $y."<br>"; 

// Increment operators
echo $y++ ."<br>"; // displays 13. because it is operating left to right, first print $y and then add 1
echo $y ."<br>"; // now it displays 14
echo ++$z . "<br>". "<br>"; // now it add 1 and print $y. this is the method for incrementals

echo $x++ . "<br>";
echo ++$x . "<br>"."<br>";

//Decrement operator
echo $x-- . "<br>";
echo --$x . "<br>"."<br>";

//Number functions
echo "abs = " .abs(-8)."<br>"; //absolute value
echo "power = " .pow(2,4)."<br>"; // two to the power 4
echo "sqrt = " .sqrt(16)."<br>";
echo "max = " .max(5,8,13,25,6)."<br>";
echo "min = " .min(5,8,13,25,6)."<br>";
echo "round = " .round(5.8)."<br>";
echo "floor = " .floor(5.8)."<br>";
echo "ceil = " .ceil(5.8)."<br>";

?>