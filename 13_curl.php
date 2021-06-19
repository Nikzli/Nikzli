<?php
$url= 'https://jsonplaceholder.typicode.com/users';

//sample curl API request
$resource= curl_init($url);
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);

$userjson= curl_exec($resource);
echo $userjson;
curl_close($resource);
?>