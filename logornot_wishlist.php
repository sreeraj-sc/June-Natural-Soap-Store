<?php
session_start();

include './common/db_connection.php';

if ($_SESSION['uid'] == null) {
    // Direct to login page if the user is not logged in
    header('Location: login.php?product_id=' . $_GET['product_id']);
} else {
    $user_id = $_SESSION['uid'];
    $product_id = $_GET['product_id'];

    $check_sql = "SELECT * FROM user_wishlist WHERE u_id = ? AND p_id = ?";
    $check_stmt = $conn->prepare($check_sql);

    if ($check_stmt) {
        $check_stmt->bind_param("ii", $user_id, $product_id);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();

        if ($check_result->num_rows > 0) {
            header("Location: index.php");
        } else {
            $insert_sql = "INSERT INTO user_wishlist (u_id, p_id) VALUES (?, ?)";
            $insert_stmt = $conn->prepare($insert_sql);

            if ($insert_stmt) {
                $insert_stmt->bind_param("ii", $user_id, $product_id);

                if ($insert_stmt->execute()) {
                    header('Location: index.php');
                } else {
                    echo "Error adding product to the wishlist: " . $insert_stmt->error;
                }

                $insert_stmt->close();
            } else {
                echo "Error preparing insert statement: " . $conn->error;
            }
        }

        $check_stmt->close();
    } else {
        echo "Error preparing check statement: " . $conn->error;
    }
}
?>
