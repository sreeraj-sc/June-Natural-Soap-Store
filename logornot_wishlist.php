<?php
    session_start();
    if($_SESSION['uid'] == null)
    {
        //directs to login page b/w the user is not log in
        header('Location: login.php?product_id='.$_GET['product_id']);
    }
    else
    {
        //user is log in so directs to the wishlist page
        header('Location: add_to_wishlist.php?product_id=' .$_GET['product_id']);
    }
?>