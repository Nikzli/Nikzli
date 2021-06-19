<?php
$pdo = new PDO("mysql:host=localhost;port=3306;dbname=project 2.1f","root","");
$pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

//get id value 
$id= $_GET['id'] ?? null;
//check id value
if (!$id){
header('location: index.php');
exit;
}

$statement= $pdo->prepare('DELETE  FROM products WHERE id=:id');
$statement->bindValue(':id', $id);
$statement->execute();

header('location: index.php');


?>