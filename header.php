<body>
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row justify-content-between">

            <!-- <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div> -->

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.php" class="js-logo-clone">Shoppers</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                  <li class="has-children">
                    <a href="#"><span class="icon icon-person"></span></a>
                    <ul class="dropdown">
                      <li><a href="logout.php">Login</a></li>
                      <li><a href="logout.php"></a></li>
                    </ul>
                  </li>
                  
                  <li>
                    <a href="index.php?cmd=<?php if (empty($_SESSION['cart'])) echo "cart-none";
                    else echo "cart"; ?>" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count">
                        <?php 
                          if(isset($_SESSION['cart'])):
                            echo count($_SESSION['cart']);
                          else:
                            echo 0;
                          endif;
                        ?>
                      </span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <!-- <li class="has-children active">
              <a <?php if (!isset($_GET['cmd']) || $_GET['cmd'] == 'index') echo 'class="active"'; ?> href="index.php">Home</a>
              <ul class="dropdown">
                <li><a href="#">Categories</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
                <li class="has-children">
                  <a href="#">Sub Menu</a>
                  <ul class="dropdown">
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                    <li><a href="#">Menu Three</a></li>
                  </ul>
                </li>
              </ul>
            </li> -->
            <li <?php if (!isset($_GET['cmd'])) echo 'class="active"'; ?>><a href="index.php">Home</a>
            <li <?php if (isset($_GET['cmd']) && $_GET['cmd'] == 'product') echo 'class="active"'; ?>><a href="index.php?cmd=product">Products</a>
            </li>
            <li <?php if (isset($_GET['cmd']) && $_GET['cmd'] == 'news') echo 'class="active"'; ?>><a href="index.php?cmd=news">News</a>
            </li>
            <li <?php if (isset($_GET['cmd']) && $_GET['cmd'] == 'about') echo 'class="active"'; ?>><a href="index.php?cmd=about">About Us</a>
            <li <?php if (isset($_GET['cmd']) && $_GET['cmd'] == 'contact') echo 'class="active"'; ?>><a href="index.php?cmd=contact">Contact</a>
          </ul>
        </div>
      </nav>
    </header>