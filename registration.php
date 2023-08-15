<?php
    session_start();
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $dbname = "June_Natural_Soap_Store";

    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $contry_code = $_POST['contry-code'];
    $mobile_number = $_POST['mobile-number'];
    $email = $_POST['email'];
    $date_of_birth = $_POST['dob'];
    $pass = $_POST['password'];
    $pass_con = $_POST['con-password'];

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if($conn->connect_error)
    {
        die("connection error".$conn->connect_error);
    }
    else
    {
        if($pass == $pass_con)
        {
            $pass_hashed = md5($pass);
            $sql = "INSERT INTO user_credentials(first_name, last_name, contry_code, mobile_number, email, date_of_birth, passphrase) VALUES ('$first_name', '$last_name', '$contry_code', '$mobile_number', '$email', '$date_of_birth', '$pass_hashed')";
            if($conn->query($sql) === TRUE)
            {
                header("Location: home.php");
                exit();
            }
            else
            {
                echo "failed";
            }
        }
        else
        {
            echo "password incorrect";
        }
        
    }
    $conn->close();
?>