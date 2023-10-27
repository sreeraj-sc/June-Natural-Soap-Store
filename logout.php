<?php
session_start();
session_unset();
session_destroy();
$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Unknown';
header("Location: " . $referrer);
exit;
?>
