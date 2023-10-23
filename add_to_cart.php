<?php
session_start();
include './common/db_connection.php';

$user_id = $_SESSION['uid'];
$product_id = $_GET['product_id'];

// Check if the combination of user and product already exists in the cart
$check_sql = "SELECT * FROM user_carts WHERE u_id = ? AND p_id = ?";
$check_stmt = $conn->prepare($check_sql);
$check_stmt->bind_param("ii", $user_id, $product_id);
$check_stmt->execute();
$check_result = $check_stmt->get_result();

if ($check_result->num_rows > 0) {
    header('Location: product.php?product_id=' . $product_id . '');
} else {
    // Insert the product into the cart
    $insert_sql = "INSERT INTO user_carts (u_id, p_id) VALUES (?, ?)";
    $insert_stmt = $conn->prepare($insert_sql);
    $insert_stmt->bind_param("ii", $user_id, $product_id);

    if ($insert_stmt->execute()) {
        echo "Product added to the cart successfully.";
    } else {
        echo "Error adding product to the cart: " . $insert_stmt->error;
    }
    $insert_stmt->close();
}

$check_stmt->close();
?>
