<?php
    $_SESSION['pid'] = $_GET['product_id'];
    if($_SESSION['uid'] == null)
    {
        header('Location: login.php?product_id='.$_SESSION['pid']);
    }
    else
    {
        header('Location: add_to_cart.php');
    }
?>