<?php 

if (isset($_GET['id_product'])) {

    $id_product = $_GET['id_product'];
    $qty = isset($_GET['qty']) ? intval($_GET['qty']) : 1; 
    if (!empty($_SESSION['cart'])) {
  
      $acol = array_column($_SESSION['cart'], 'id_product');
      if (in_array($id_product, $acol)) {
  
        $_SESSION['cart'][$id_product]['qty'] += $qty;
      } else {
        $item = [
          'id_product' => $_GET['id_product'],
          'qty' => $qty
        ];
  
        $_SESSION['cart'][$id_product] = $item;
      }
    } else {
      $item = [
        'id_product' => $_GET['id_product'],
        'qty' => $qty
      ];
  
      $_SESSION['cart'][$id_product] = $item;
    }
  }

//unset($_SESSION['cart']);
//var_dump($_SESSION['cart']);
?>
