<?php

include './common/db_connection.php';
include './common/CommonAdminHeader.php';
$user_id = $_GET['id'];


// Get the user ID from the URL
$user_id = $_GET['id'];

// Fetch user details from the database
$sql = "SELECT * FROM user_credentials WHERE u_id = '" . $user_id . "'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    echo "<div class='container mt-5 pt-5'>";
    echo "<h1 class='mt-5'>Edit User</h1>";
    echo "<form action='update_user.php' method='post'>";
    echo "<input type='hidden' name='user_id' value='" . $row['u_id'] . "'>";

    echo "<div class='form-group'>";
    echo "<label for='first_name'>First name:</label>";
    echo "<input type='text' class='form-control' id='first_name' name='first_name' value='" . $row['first_name'] . "' required>";
    echo "</div>";

    echo "<div class='form-group'>";
    echo "<label for='last_name'>Last name:</label>";
    echo "<input type='text' class='form-control' id='last_name' name='last_name' value='" . $row['last_name'] . "' required>";
    echo "</div>";

    echo "<div class='form-group'>";
    echo "<label for='email'>Email:</label>";
    echo "<input type='email' class='form-control' id='email' name='email' value='" . $row['email'] . "' required>";
    echo "</div>";

    echo "<div class='form-group'>";
    echo "<label for='mobile_number'>Mobile number:</label>";
    echo "<input type='text' class='form-control' id='mobile_number' name='mobile_number' value='" . $row['mobile_number'] . "' required>";
    echo "</div>";
    
    echo "<div class='form-group'>";
    echo "<label for='date_of_birth'>Date of birth:</label>";
    echo "<input type='text' class='form-control' id='date_of_birth' name='date_of_birth' value='" . $row['date_of_birth'] . "' required>";
    echo "</div>";

    echo "<div class='form-group'>";
    echo "<label for='address'>Address:</label>";
    echo "<textarea id='address' class='form-control' name='address' rows='4' placeholder='address' value=" . $row['address'] . " required></textarea><br>";
    echo "</div><br>";

    echo "<div class='form-group mt-4'>";
    echo "<label for='password'>Password:</label>";
    echo "<input type='text' class='form-control' id='password' name='password' required>";
    echo "</div>";

    echo "<button type='submit' class='btn btn-dark'>Update</button>";
    echo "</form>";
    echo "</div>";
} else {
    echo "User not found.";
}


?>

