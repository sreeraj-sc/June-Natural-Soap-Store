<?php
session_start();
session_unset();
session_destroy();
$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Unknown';
if($_GET['from_admin'] == 555)
{
    header("Location: login.php");
}
else
{
    header("Location: " . $referrer);
}
exit;
?>
