<?php
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

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if($conn->connect_error)
    {
        die("connection error".$conn->connect_error);
    }
    else
    {
        echo "connection successful";
        $sql = "INSERT INTO user_credentials(first_name, last_name, contry_code, mobile_number, email, date_of_birth, passphrase) VALUES ('$first_name', '$last_name, '$contry_code', '$mobile_number', '$email', '$date_of_birth', '$pass')";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "registration successfull";
        }
        else
        {
            echo "failed";
        }
    }
    $conn->close();
?>