<?php
//variable for sum 
$sum =0;

//for loop to get the total sum of numbers between 0 to 50 technically the sum of numbers from 1 to 49
for ($count=0; $count<50; $count++){
    //each time it adds the value for $count to $sum
    $sum+=$count;
}
//answer
echo "sum of the numbers between 0 to 50 is" . $sum;

echo "<br>". "<br>";

//Variable for sum 
$sum =0;

//for loop to get the total sum between 0 to 50 
for($count =0 ; $count <20; $count++){
    $sum= $sum + $count;
  }
  echo "the sum of the numbers between 0 to 20 is ". $sum;
?>