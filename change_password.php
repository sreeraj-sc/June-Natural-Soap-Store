<?php

include './common/db_connection.php';
include './common/CommonHeader.php';
$user_id = $_SESSION['uid'];


// Fetch user details from the database
$sql = "SELECT * FROM user_credentials WHERE u_id = '" . $user_id . "'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo "<center>";
    echo "<div class='container mt-5 pt-5'>";
    echo "<h1 class='mt-5'>Change password</h1>";
    echo "<form action='update_password.php' method='post'>";
    echo "<input type='hidden' name='user_id' value='" . $row['u_id'] . "'>";
    echo "<div class='form-group'>";
    echo "<label for='password'>Password</label>";
    echo "<input type='password' class='form-control' id='password' name='password' required>";
    echo "</div>";
    echo "<br><button type='submit' class='btn btn-dark'>Change password</button>";
    echo "</form>";
    echo "</div>";
    echo "</center>";
}
?>