<?php
  
  if (isset($_POST['update'])) {
    if (!empty($_SESSION['cart'])) {
      $updates = $_POST['updates'];
      foreach ($updates as $update) {
        $upid = $update['upid'];
        $qty = (int)$update['qty'];

        if (isset($_SESSION['cart'][$upid])) {
            if ($qty > 0) {
                $_SESSION['cart'][$upid]['qty'] = $qty;
            } else {
                unset($_SESSION['cart'][$upid]);
            }
        }
      }
    }
  }
  elseif(isset($_POST['delete']))
  {
    $upid = $_POST['delete'];
    if (isset($_SESSION['cart'][$upid]))
      unset($_SESSION['cart'][$upid]);
  }
  elseif(isset($_POST['empty']))
  {
      unset($_SESSION['cart']);
  }

  $subTotal = 0; 
?>
    <div class="site-section <?php if (empty($_SESSION['cart'])) echo "d-none"; ?> ">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (isset($_SESSION['cart'])):
                    $data = '';
                    $subTotal = 0;
                    foreach ($_SESSION['cart'] as $key => $cart):
                      $sql = "SELECT * FROM product WHERE id=" . $cart['id_product'];
                      $result = mysqli_query($conn, $sql);
                      $row = mysqli_fetch_assoc($result);
                      $data .= '
                      <tr>
                        <td class="product-thumbnail">
                          <img src="images/' . $row['img'] . '" alt="Image" class="img-fluid">
                        </td>
                        <td class="product-name">
                          <h2 class="h5 text-black">' . $row['name'] . '</h2>
                        </td>
                        <td>' . number_format($row['price']) . ' VND</td>
                        <td>
                          <div class="input-group mb-3" style="max-width: 120px;">
                            <div class="input-group-prepend">
                              <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                            </div>
                            <input type="hidden" name="updates[' . $key . '][upid]" value="' . $cart['id_product'] . '">
                            <input type="text" name="updates[' . $key . '][qty]" class="form-control text-center" value="' . $cart['qty'] . '" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <div class="input-group-append">
                              <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                            </div>
                          </div>
                        </td>
                        <td>' . number_format($row['price'] * $cart['qty']) . ' VND</td>
                        <td><button class="btn btn-primary btn-sm" type="submit" name="delete" value="' . $cart['id_product'] . '">X</button></td>
                      </tr>';
                      $subTotal += $row['price'] * $cart['qty'];
                    endforeach;
                    echo $data;
                  endif;
                  ?>
                </tbody>
              </table>
            </div>
            <div class="row mb-5">
              <div class="col-md-3 mb-3 mb-md-0">
                <button class="btn btn-outline-primary btn-sm btn-block" name="update" type="submit">Update Cart</button>
              </div>
              <div class="col-md-3 mb-3 mb-md-0">
                <button class="btn btn-primary btn-sm btn-block" name="empty" type="submit">Empty Cart</button>
              </div>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6">
                <a class="btn btn-outline-primary btn-sm btn-block" href="index.php?cmd=product">Continue Shopping</a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Enter your coupon code if you have one.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-sm">Apply Coupon</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?php echo number_format($subTotal); ?> VND</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?php echo number_format($subTotal); ?> VND</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='index.php?cmd=checkout'">Proceed To Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>