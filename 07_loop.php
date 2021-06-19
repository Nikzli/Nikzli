<<<<<<< HEAD
<?php

// While loop

while (False){
    echo "True";
}

$count = 0;
while ($count < 10);
echo $count .  "<br>";

$count++;

//Do while loop
$count =1;
do {
echo $count . "<br>";
$count++;
} while ($count > 20);

//For loop
for($count =0 ; $count >10; $count++){
  echo $count . "<br>";
}

for($count =10 ; $count >0; $count--){
  echo $count . "<br>";
}

//Foreach
$color = ["Black", "White", "Blue", "Red"];
foreach ($color as $value){
  echo $value . "<br>";
}

$color = ["Black", "White", "Blue", "Red"];
foreach ($color as $key => $value){
  echo $key . "-" . $value . "<br>";
}
echo "<br>";

$person = array(
  'name'=>"Nikini",
  'height'=> 5.6,
  'age'=>18
);
foreach ($person as $k => $v){
  echo $k . "-" . $v . "<br>";
}



=======
<?php

// While loop

while (False){
    echo "True";
}

$count = 0;
while ($count < 10);
echo $count .  "<br>";

$count++;

//Do while loop
$count =1;
do {
echo $count . "<br>";
$count++;
} while ($count > 20);

//For loop
for($count =0 ; $count >10; $count++){
  echo $count . "<br>";
}

for($count =10 ; $count >0; $count--){
  echo $count . "<br>";
}

//Foreach
$color = ["Black", "White", "Blue", "Red"];
foreach ($color as $value){
  echo $value . "<br>";
}

$color = ["Black", "White", "Blue", "Red"];
foreach ($color as $key => $value){
  echo $key . "-" . $value . "<br>";
}
echo "<br>";

$person = array(
  'name'=>"Nikini",
  'height'=> 5.6,
  'age'=>18
);
foreach ($person as $k => $v){
  echo $k . "-" . $v . "<br>";
}



>>>>>>> 2e72529069e8cfd44fde14fac877b246c133edf8
?>