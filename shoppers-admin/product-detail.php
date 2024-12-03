<?php
    global $conn;
    if(isset($_GET['id']))
        $id = $_GET['id'];
    elseif(isset($_GET['id_product']))
        $id = $_GET['id_product'];
    else
      $id = 0;
?>
    <div class="site-section">
        <div class="container">
            <div class="row">
                
                <?php
                    $sql = "select * from product where id = {$id}";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                ?>
                <div class="col-md-6">
                  <a href="../images/<?php echo $row['img']?>" class="popup-image">
                    <img src="../images/<?php echo $row['img']?>" alt="Image" class="img-fluid">
                  </a>
                </div>
                <div class="col-md-6">
                  <form method="post">
                    <h2 class="text-black"><?php echo $row['name']?></h2>
                    <p><?php echo $row['description']?></p>
                    <p><?php echo $row['content']?></p>
                    <p><strong class="text-primary h4"><?php echo number_format($row['price'])?> VND</strong></p>
                    <div class="mb-5">
                        <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                        <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input id="qty" type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                    </div>

                    </div>
                    <p><a href="index.php?cmd=product-detail&id_product=<?php echo $row['id'] ?>" id="addToCart" class="buy-now btn btn-sm btn-primary">Add To Cart</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Featured Products</h2>
          </div>
        </div>
        <?php 
            $sql = "select * from product where status = 1 and id != $id order by rand() limit 6";
            $result = mysqli_query($conn, $sql);
        ?>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
              <?php
                $data = '';
                while($row = mysqli_fetch_assoc($result)):
                  $data .= '
                  <a href="index.php?cmd=product-detail&id='. $row['id'].'" class="item">
                    <div class="block-4 text-center">
                      <figure class="block-4-image">
                        <img src="../images/'. $row['img'].'" alt="Image placeholder" class="img-fluid">
                      </figure>
                      <div class="block-4-text p-4">
                        <h3>'. $row['name'].'</h3>
                        <p class="text-secondary my-2">'. $row['description'].'</p>
                        <p class="text-primary font-weight-bold">'. number_format($row['price']).' VND</p>
                      </div>
                    </div>
                  </a>';
                endwhile;
                echo $data;
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>