<?php
    session_start();
    $_SESSION = array();
    session_destroy();
    header("Location: /shopping-cart-oche/Project/login/signin.php")
   
?>