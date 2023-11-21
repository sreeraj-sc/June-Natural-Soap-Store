<?php

include './common/db_connection.php';
$user_id = $_SESSION['uid'];
$password = $_POST['password'];
$pass_hashed = md5($password);

$sql = "UPDATE user_credentials SET  passphrase = '" . $pass_hashed . "' WHERE u_id = '" . $user_id . "'";
if (mysqli_query($conn, $sql) === TRUE) {
    header("Location: profile.php");
} else {
    echo "Error updating user: " . mysqli_error($conn);
}
?>
