<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  if(isset($_POST['btn'])){
    if(isset($_SESSION['cart'])){
      $myItems = array_column($_SESSION['cart'], 'Item_Name');
      if(in_array($_POST['Item_Name'], $myItems)){
        echo "
          <script>
            alert('상품이 이미 장바구니에 있습니다');
            window.location.href='index.php';
          </script>
        ";
      }else{
        $count = count($_SESSION['cart']);
        $_SESSION['cart'][$count] = array(
          'Item_Name' => $_POST['Item_Name'],
          'Price' => $_POST
          ['Item_Price'],
          'Quantity'=>1
        );
        echo "
        <script>
        if (confirm('상품을 장바구니에 추가했습니다. 장바구니로 이동하시겠습니까?')) {
          window.location.href='mycart.php'; // Replace with the URL of the script that handles adding the item to the cart
        } else {
          window.location.href='index.php'; // Replace with the URL of the page to redirect if the user cancels
        }
      </script>
        ";
      }
    }else{
      $_SESSION['cart'][0] = array(
          'Item_Name' => $_POST['Item_Name'],
          'Price' => $_POST
          ['Item_Price'],
          'Quantity'=>1
        );
        echo "
        <script>
        if (confirm('상품을 장바구니에 추가했습니다. 장바구니로 이동하시겠습니까?')) {
          window.location.href='mycart.php'; // Replace with the URL of the script that handles adding the item to the cart
        } else {
          window.location.href='index.php'; // Replace with the URL of the page to redirect if the user cancels
        }
      </script>
        ";
    }
  }
  // remove item from cart
  if(isset($_POST['remove_item'])){
    foreach($_SESSION['cart'] as $key => $value){
      if($value['Item_Name'] == $_POST['Item_Name']){
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
        echo "
          <script>
            alert('상품이 장바구니에서 삭제되었습니다');
            window.location.href='mycart.php';
          </script>
        ";
      }
    }
  }
}
?>