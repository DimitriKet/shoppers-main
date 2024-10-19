<?php 
    
    if(isset($_GET['cmd']))
        $cmd=$_GET['cmd'];
    else
        $cmd='home';
    require("function.php");
    include("head.php");
    include("header.php");
    include($cmd. ".php");
    include("footer.php");
?>