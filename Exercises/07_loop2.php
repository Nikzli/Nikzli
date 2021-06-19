<?php
//following for loop can be considered as the master for loop. it controls the number of rows and columns
for($count =1 ; $count <6; $count++){
//following for loop prints the number which are equal or less than $count variable. This for loop restarts each time when the variable $count changes
    for($count2=1; $count2<=$count; $count2++){
        echo $count2;
    }
    //line break after end of the secondary for loop
    echo "<br>";
  }


?>