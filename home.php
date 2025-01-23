<?php
    global $conn;
    if(isset($_GET['id']))
        $id = $_GET['id'];
    elseif(isset($_GET['id_product']))
        $id = $_GET['id_product'];
    else
      $id = 0;
?>

<div class="site-blocks-cover" style="background-image: url(images/halbertec-serise-banner.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
            <h1 class="mb-2" style="color: #fff;">Finding Your Badminton Racquet</h1>
            <div class="intro-text text-center text-md-left">
              <p class="mb-4">I just wanna tell you how I'm feeling
              Gotta make you understand. Never gonna give you up,
              never gonna let you down. </p>
              <p>
                <a href="index.php?cmd=product" class="btn btn-sm btn-primary">Shop Now</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Free Shipping</h2>
              <p>Shipping NATIONWIDE without fee
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Free Returns</h2>
              <p>No minimum purchase is required to receive Free Returns.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Customer Support</h2>
              <p>Sorry to hear we failed you. How can we make it better?</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-blocks-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="images/Racquet.webp" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Badminton</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="images/bvot-tennis.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Tennis</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="images/vot-pickleball.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Pickleball</h3>
              </div>
            </a>
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
                        <img src="./images/'. $row['img'].'" alt="Image placeholder" class="img-fluid">
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

    <div class="site-section block-8">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Big Sale!</h2>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 mb-5">
            <a href="#"><img src="images/SAFERUN-AERUS-MEN.webp" alt="Image placeholder" class="img-fluid rounded"></a>
          </div>
          <div class="col-md-12 col-lg-5 text-center pl-md-5">
            <h2><a href="#">50% less in all items</a></h2>
            <p class="post-meta mb-4">By <a href="#">Carl Smith</a> <span class="block-8-sep">&bullet;</span> September 3, 2018</p>
            <p>Yonex running shoes are designed to help non-runners train in good form while preventing injuries. With our expertise in graphite applied to running shoes, every step, whether from heel-to-toe or midfoot-to-toe, will comfortably propel you forward for more efficient, effective and safe training.</p>
            <p><a href="index.php?cmd=product" class="btn btn-sm btn-primary">Shop Now</a></p>
          </div>
        </div>
      </div>
    </div>