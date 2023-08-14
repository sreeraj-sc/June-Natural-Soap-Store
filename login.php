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
        $hash_pass = md5($passphrase);
        $sql = "SELECT * FROM user_credentials WHERE email='$email_number' OR mobile_number='$email_number'";
        $res = $conn->query($sql);
        if($res == TRUE)
        {
            $val = mysqli_num_rows($res);
            if($val >0)
            {
                header("Location: index.html");
            }
        }
        else
        {
            echo "User not Found ";
        }
    }
?>