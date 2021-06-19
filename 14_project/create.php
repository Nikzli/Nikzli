<?php

$pdo = new PDO("mysql:host=localhost;port=3306;dbname=project 2.1f","root","");
$pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

$errors=[];//error list 
$name='';
$description = '';
$price ='';
//check request type is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $name = $_POST ['name'];
    $description = $_POST ['description'];
    $price = $_POST ['price'];
    $image = '';
    $created_date = date('Y-m-d H:i:s');
    $modified_date = date('Y-m-d H:i:s');
//check product name is not empty
if (empty($name)){
  $errors[]="Product name is required.";
}
//check product price is not empty
if (empty($name)){
  $errors[]="Product price is required.";
}
//check errors is empty
if (empty($errors)){

  $image=$_FILES['image'] ?? null;
  $image_path='';

if($image && $image['tmp_name']){
  $image_path = 'images/' . $image['name'];
  move_uploaded_file($image['tmp_name'], $image_path );
}


      //Insert data into the database
    $statement =$pdo->prepare("INSERT INTO products(name, description, price, image, created_date, modified_date)
    VALUE (:product_name, :product_description, :product_price, :product_image, :created_date, :modified_date);
    ");
    $statement-> bindValue(':product_name', $name);
    $statement-> bindValue(':product_description', $description);
    $statement-> bindValue(':product_price', $price);
    $statement-> bindValue(':product_image', $image_path);
    $statement-> bindValue(':created_date', $created_date);
    $statement-> bindValue(':modified_date', $modified_date);
    $statement-> execute();
    header('location: index.php');
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Project - Group 21.1 | create</title>
  </head>
  <body>
    <div class="container">
    <h2>Add a New Product</h2>
<!----show validation--->
    <?php
    if(!empty($errors)):
    ?>
       <div class="alert alert-danger" role="alert">
            <?php
               foreach ($errors as $error){
                 echo "<div>" .  $error . "</div>";
               }
            ?>
      </div>
      <?php
         endif;
      ?>

    <form action="create.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label class="form-label">Product Name</label>
    <input type="text" class="form-control" value="<?= $name?>" name="name" >
  </div>
  <div class="fmb-3">
    <label class="form-label">Product Description</label>
    <textarea class="form-control" name="description" ><?= $description?></textarea>
  </div>
  <div class="mb-3">
    <label class="form-label">Product Price</label>
    <input type="number" class="form-control" value="<?= $price?>" name="price" >
  </div>
  <div class="mb-3">
    <label class="form-label">Product Image</label>
    </br>
    <input type="file" name="image"  >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="index.php" type="submit" class="btn btn-success">Back to List</a>
</form>
    
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>