<?php
    session_start();
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
        $email_num = $_POST['email-number'];
        $passphrase = $_POST['password'];
        $hash_pass = md5($passphrase);
        $sql = "SELECT * FROM user_credentials WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email_num);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0)
        {
            $data = $result->fetch_assoc();
            if($data['passphrase'] == $hash_pass)
            {
                header("Location: home.php");
            }
            else
            {
                echo "Invalid Username or password !!!";
            }
        }
        else
        {
            echo "User not Found";
        }
    }
?>