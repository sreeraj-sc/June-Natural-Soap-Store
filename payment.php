<?php
  include './common/CommonHeader.php';
  $sql = "SELECT p_id, photo, name, price FROM products";
  $result = $conn->query($sql);

  if ($result === false) {
    die("Error in SQL query: " . $conn->error);
  }

?>
