<<<<<<< HEAD
<?php

$height = 5;
$age = 25;

//If statement
if($height > 4);{

    echo "True, Height is greater than 4";
}
echo "<br>";
//Single line
if ($height > 6); echo "Yes. Its true";

echo "<br>";

//If else statement
if ($height > 4 ){
    echo "True";
  } else {
    echo "False";
  }

  //Difference between == and ===
  $height == 5;//to check the value, true
  $height === 5;// to check the type and the value, true

  $height =="5";// true value 
  $height ==="5";// false, cus its a string 

  echo "<br>";

  if ($height==5){
       echo "True";
  } else {
      echo "False";
  }

 echo "<br>";
  
  if ($height=="5"){
       echo "True";
  } else {
      echo "False";
  }

  echo "<br>";
  
  if ($height==="5"){
       echo "True";
  } else {
      echo "False";
  }

  echo "<br>";

  // If statement with And, &&
 
  if ($height > 4 && $age==25){
    echo "True";
} else {
   echo "False";
}

echo "<br>";

// If statement with OR, ||
 
if ($height > 4 OR $age==25){
    echo "True";
} else {
   echo "False";
}

echo "<br>";

if ($height > 6 OR $age==25){
    echo "True";// cuz one statement is true, which is age
} else {
   echo "False";
}

echo "<br>";

echo $height >4 ? "True" : "False";

if (true):

else:

endif;

echo "<br>";

if ($height>6){ //greater than 6
}elseif ($height>4){ //6,5

} else { // 5 > (4, 3, 2,....)

}

// Switch
$user_type = "user";//admin, editors 

switch ($user_type){

case "admim":
    echo "I'm admin";
    break;
case "user":
     echo "I'm user";
    break;
case "editor":
     echo "I'm editor";
    break;
 default:
    echo "unknown user type";

}
=======
<?php

$height = 5;
$age = 25;

//If statement
if($height > 4);{

    echo "True, Height is greater than 4";
}
echo "<br>";
//Single line
if ($height > 6); echo "Yes. Its true";

echo "<br>";

//If else statement
if ($height > 4 ){
    echo "True";
  } else {
    echo "False";
  }

  //Difference between == and ===
  $height == 5;//to check the value, true
  $height === 5;// to check the type and the value, true

  $height =="5";// true value 
  $height ==="5";// false, cus its a string 

  echo "<br>";

  if ($height==5){
       echo "True";
  } else {
      echo "False";
  }

 echo "<br>";
  
  if ($height=="5"){
       echo "True";
  } else {
      echo "False";
  }

  echo "<br>";
  
  if ($height==="5"){
       echo "True";
  } else {
      echo "False";
  }

  echo "<br>";

  // If statement with And, &&
 
  if ($height > 4 && $age==25){
    echo "True";
} else {
   echo "False";
}

echo "<br>";

// If statement with OR, ||
 
if ($height > 4 OR $age==25){
    echo "True";
} else {
   echo "False";
}

echo "<br>";

if ($height > 6 OR $age==25){
    echo "True";// cuz one statement is true, which is age
} else {
   echo "False";
}

echo "<br>";

echo $height >4 ? "True" : "False";

if (true):

else:

endif;

echo "<br>";

if ($height>6){ //greater than 6
}elseif ($height>4){ //6,5

} else { // 5 > (4, 3, 2,....)

}

// Switch
$user_type = "user";//admin, editors 

switch ($user_type){

case "admim":
    echo "I'm admin";
    break;
case "user":
     echo "I'm user";
    break;
case "editor":
     echo "I'm editor";
    break;
 default:
    echo "unknown user type";

}
>>>>>>> e0c05da059cd165d57dac912d7cf68bf2d91fd62
?>