<?php
    include './common/db_connection.php';
    $product_id = $_GET['product_id'];
    $sql = "DELETE FROM products WHERE p_id = ?";
    $stmt = $conn->prepare($sql);
    mysqli_stmt_bind_param($stmt, "i", $product_id);
    $stmt->execute();
    header('Location: remove_update.php');
?>