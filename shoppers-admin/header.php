<body>
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.php" class="js-logo-clone">Shoppers</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="#"><span class="icon icon-person"></span></a></li>
                  <li class="has-children">
                    <a href="#"><span class="icon icon-heart-o"></span></a>
                    <ul class="dropdown">
                    </ul>
                  </li>
                  <li><a href="logout.php">Logout</a></li>
                  <li>
                    <a href="index.php?cmd=cart" class="site-cart">
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
            <li <?php if (!isset($_GET['cmd'])) echo 'class="active"'; ?>><a href="index.php">Home</a>
            <li <?php if (isset($_GET['cmd']) && $_GET['cmd'] == 'account') echo 'class="active"'; ?>><a href="index.php?cmd=account">Manage Account</a>
            </li>
            <li <?php if (isset($_GET['cmd']) && $_GET['cmd'] == 'news') echo 'class="active"'; ?>><a href="index.php?cmd=news">Manage News</a>
            </li>
            <li <?php if (isset($_GET['cmd']) && $_GET['cmd'] == 'category') echo 'class="active"'; ?>><a href="index.php?cmd=category">Manage Category</a>
            <li <?php if (isset($_GET['cmd']) && $_GET['cmd'] == 'product') echo 'class="active"'; ?>><a href="index.php?cmd=product">Manage Product</a>
          </ul>
        </div>
      </nav>
    </header>