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
  <title>장바구니</title>
</head>
<body>
  <div class="wrapper">
    <?php include 'header.php' ?>
    <div class="cart-container">
      <h1>내 장바구니</h1>
      <table rules="all">
        <thead>
          <tr>
            <th>번호</th>
            <th>상품 이름</th>
            <th>상품 가격</th>
            <th>상품 갯수</th>
            <th>상품 삭제</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $total = 0;
          if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $key => $value) {
              $total = $total + $value['Price'];

          ?>
          <tr>
            <td>1.</td>
            <td><?php echo $value['Item_Name']; ?></td>
            <td><?php echo $value['Price']; ?></td>
            <td><input type="number" min="1" name="" value="<?php echo $value['Quantity']; ?>"></td>
            <td>
              <form action="manage_cart.php" method="post">
                <button name="remove_item" class="btn">삭제</button>
                <input type="hidden" name="Item_Name" value="<?php echo $value['Item_Name']; ?>">
              </form>
            </td>
          </tr>
          <?php
              }
            }else{
              echo '
                <p class="empty">장바구니에 상품이 없습니다</p>
              ';
            }
          ?>
          
          <tr class="total">
            <td colspan="4">합계</td>
            <td><h5><?php echo $total; ?> 원</h5></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  
</body>
</html>