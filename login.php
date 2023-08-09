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
    else
    {
        $email_number = $_POST['email-number'];
        $passphrase = $_POST['password'];
        $sql = "SELECT * FROM user_credentials WHERE email='$email_number' AND mobile_number='$email_number'";
    }
?>