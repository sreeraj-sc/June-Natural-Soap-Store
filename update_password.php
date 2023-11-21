<?php

include './common/db_connection.php';

// Check if connection is established
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve user ID and password from POST request
$user_id = $_SESSION['uid'];
$password = $_POST['password'];

// Hash the password using MD5 algorithm
$pass_hashed = md5($password);

// Construct the update query
$sql = "UPDATE user_credentials SET passphrase = '" . $pass_hashed . "' WHERE u_id = '" . $user_id . "'";

// Execute the update query and check for success
if (mysqli_query($conn, $sql)) {
    // Update successful, redirect to profile page
    header("Location: profile.php");
    exit;
} else {
    // Update failed, display error message
    echo "Error updating user: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

?>
