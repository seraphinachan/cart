<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>my cart - home page</title>
</head>
<body>
  
  <div class="wrapper">
    <?php include 'header.php'; ?>
    <div class="container">
      <form action="manage_cart.php" method="post">
        <img src="image/1.png" name="img" class="card-img">
        <p class="card-title">Banquets golden cup</p>
        <h4>가격 : 300</h4>
        <button type="submit" name="btn" class="btn">장바구니 추가</button>
        <input type="hidden" name="Item_Name" value="Banquets golden cup">
        <input type="hidden" name="Item_Price" value="300">
      </form>
      <form action="manage_cart.php" method="post">
        <img src="image/2.png" name="img" class="card-img">
        <p class="card-title">coffee bristol</p>
        <h4>가격 : 400</h4>
        <button type="submit" name="btn" class="btn">장바구니 추가</button>
        <input type="hidden" name="Item_Name" value="coffee bristol">
        <input type="hidden" name="Item_Price" value="400">
      </form>
      <form action="manage_cart.php" method="post">
        <img src="image/3.png" name="img" class="card-img">
        <p class="card-title">coffee bio fairtrade</p>
        <h4>가격 : 200</h4>
        <button type="submit" name="btn" class="btn">장바구니 추가</button>
        <input type="hidden" name="Item_Name" value="coffee bio fairtrade">
        <input type="hidden" name="Item_Price" value="200">
      </form>
      <form action="manage_cart.php" method="post">
        <img src="image/5.png" name="img" class="card-img">
        <p class="card-title">capuchino moro bar</p>
        <h4>가격 : 300</h4>
        <button type="submit" name="btn" class="btn">장바구니 추가</button>
        <input type="hidden" name="Item_Name" value="capuchino moro bar">
        <input type="hidden" name="Item_Price" value="300">
      </form>
      <form action="manage_cart.php" method="post">
        <img src="image/6.png" name="img" class="card-img">
        <p class="card-title">coffee gluten free</p>
        <h4>가격 : 300</h4>
        <button type="submit" name="btn" class="btn">장바구니 추가</button>
        <input type="hidden" name="Item_Name" value="coffee gluten free">
        <input type="hidden" name="Item_Price" value="300">
      </form>
      <form action="manage_cart.php" method="post">
        <img src="image/7.png" name="img" class="card-img">
        <p class="card-title">expresso gold</p>
        <h4>가격 : 200</h4>
        <button type="submit" name="btn" class="btn">장바구니 추가</button>
        <input type="hidden" name="Item_Name" value="expresso gold">
        <input type="hidden" name="Item_Price" value="200">
      </form>
      <form action="manage_cart.php" method="post">
        <img src="image/8.png" name="img" class="card-img">
        <p class="card-title">cold coffee</p>
        <h4>가격 : 200</h4>
        <button type="submit" name="btn" class="btn">장바구니 추가</button>
        <input type="hidden" name="Item_Name" value="cold coffee">
        <input type="hidden" name="Item_Price" value="200">
      </form>
      <form action="manage_cart.php" method="post">
        <img src="image/9.png" name="img" class="card-img">
        <p class="card-title">ice coffee</p>
        <h4>가격 : 100</h4>
        <button type="submit" name="btn" class="btn">장바구니 추가</button>
        <input type="hidden" name="Item_Name" value="ice coffee">
        <input type="hidden" name="Item_Price" value="100">
      </form>
      <form action="manage_cart.php" method="post">
        <img src="image/10.png" name="img" class="card-img">
        <p class="card-title">chocolate coffee</p>
        <h4>가격 : 500</h4>
        <button type="submit" name="btn" class="btn">장바구니 추가</button>
        <input type="hidden" name="Item_Name" value="chocolate coffee">
        <input type="hidden" name="Item_Price" value="500">
      </form>
    
    </div>
  <div>
    
</body>
</html>