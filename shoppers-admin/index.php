<?php 
    session_start();
    if ($_SESSION['loginstatus'] != true)
    {
        header('location:login.php');
    }
    if(isset($_GET['cmd']))
        $cmd = $_GET['cmd'];
    else
        $cmd = 'home';
    require("function.php");
    require("cart-shopping.php");
    include("head.php");
    include("header.php");
    include($cmd. ".php");
    include("footer.php");
?>