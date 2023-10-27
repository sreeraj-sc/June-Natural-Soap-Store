<?php
    session_start();
    $_SESSION['pid'] = $_GET['product_id'];
    if($_SESSION['uid'] == null)
    {
        //directs to login page b/w the user is not log in
        header('Location: login.php?product_id='.$_SESSION['pid']);
    }
    else
    {
        //user is log in so directs to the cart page
        header('Location: add_to_cart.php?product_id=' .$_SESSION['pid']);
    }
?>