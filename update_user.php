<?php

include './common/db_connection.php';

// Get the user ID, username, and email from the POST request
$user_id = $_POST['user_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$mobile_number = $_POST['mobile_number'];
$date_of_birth = $_POST['date_of_birth'];
$address = $_POST['address'];
$password = $_POST['password'];
$pass_hashed = md5($password);
if(strlen($mobile_number) == 10)
{


    // Update the user's information in the database
    $sql = "UPDATE user_credentials SET first_name = '" . $first_name . "', last_name = '" . $last_name . "', email = '" . $email . "', mobile_number = '" . $mobile_number . "', date_of_birth = '" . $date_of_birth . "', address = '" . $address . "', passphrase = '" . $pass_hashed . "' WHERE u_id = '" . $user_id . "'";

    if (mysqli_query($conn, $sql) === TRUE) {
        header("Location: user_management.php");
    } else {
        echo "Error updating user: " . mysqli_error($conn);
    }

}
else if(strlen($mobile_number) > 10 || strlen($mobile_number) < 10)
{
    echo '<script type="text/javascript">
                alert("Mobile number Must be 10 digits !");
                </script>';
}

?>
