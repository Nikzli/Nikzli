<?php
//change the timezome
date_default_timezone_set('Asia/Colombo');
//Print current date and time
echo date("Y-m-d H:i:s");

echo "<br>";
//print yesterday 
echo date("Y-m-d H:i:s", strtotime("-1 day"))."<br>";
echo date ('F j Y H:i:s');
?>