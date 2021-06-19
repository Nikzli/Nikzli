<?php
$pdo = new PDO("mysql:host=localhost;port=3306;dbname=project 2.1f","root","");
$pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement= $pdo->prepare('SELECT * FROM products');
$statement-> execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Project - Group 21.1</title>
  </head>
  <body>
    <div class="container">
    <h2>Product List</h2>
    <a href="create.php" type="button" class="btn btn-primary">Create Product</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Created</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
foreach ($products as $key=> $product):
  ?>
    <tr>
      <th scope="row"><?= $key + 1 ?></th>
      <td><img src="<?= $product['image'] ?>" style="width: 100px;"></td>
      <td><?= $product['name'] ?></td>
      <td><?= $product['price'] ?></td>
      <td><?= $product['created_date'] ?></td>
      <td>
      <a href="update.php?id=<?=$product['id'] ?>" type="button" class="btn btn-sm btn-primary">Edit</a>
      <a href="delete.php?id=<?=$product['id'] ?>" type="button" class="btn btn-sm btn-danger">Delete</a>
      </td>
    </tr>
    
  </tbody>
  <?php
  endforeach;
  ?>
</table>
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