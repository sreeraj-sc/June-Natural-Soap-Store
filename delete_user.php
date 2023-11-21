<?php
    include './common/db_connection.php';
    $user_id = $_GET['id'];

    // Delete the user from the database
    $sql = "DELETE FROM user_credentials WHERE u_id = '" . $user_id . "'";
    if (mysqli_query($conn, $sql) === TRUE) {
        header("Location: user_management.php");
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }    
?>