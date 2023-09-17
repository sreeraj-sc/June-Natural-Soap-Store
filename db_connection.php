<?php
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "June_Natural_Soap_Store";
    $conn = new mysqli($host, $user, $pass, $db);
    if($conn->connect_error)
    {
        die("connection error".$conn->connect_error);
    }
?>