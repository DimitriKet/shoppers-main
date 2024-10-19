<?php
  session_start();
  require("function.php");
  $msg = '';
  if (isset($_POST['sbm']))
  {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (login($email, $password))
    {
      header('location:index.php');
    }
    else
    {
      $msg='<div class="alert alert-danger mt-2"> Sai email hoặc mật khẩu</div>';
      $_SESSION['loginstatus']=false; 
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="#" class="js-logo-clone">Shoppers</a>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </header>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-6">
            <div class="login-form">
                <form action="login.php" method="POST">
                    <div class="text-center mb-4">
                      <h3 class="display-3 text-black">Login</h3>
                      <span class="display-4">Welcome to Admin site</span>
                    </div>
                    <div class="form-floating mb-3">
                        <label for="inputEmail">Email Address</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="name@example.com" />
                    </div>
                    <div class="form-floating mb-3">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" />
                    </div>
                    <div class="d-flex justify-content-between pt-2">
                        <a href="#">Forgot Password ?</a>
                        <button class="btn btn-sm btn-primary" type="submit" name="sbm">Login</button>
                    </div>
                    <?php echo $msg; ?>
                </form>

                <p class="text-center"></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer border-top">
      <div class="container">
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>