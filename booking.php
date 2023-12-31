<?php
include './common/CommonAdminHeader.php';

// Query to retrieve data from bookings and user_credentials tables
$sql = "SELECT b.b_id, b.u_id, b.p_ids, b.price, u.first_name
        FROM bookings b
        INNER JOIN user_credentials u ON b.u_id = u.u_id";

$result = $conn->query($sql);

if ($result === false) {
    die("Error in SQL query: " . $conn->error);
}
$p_idsarray = array();

echo '<div class="container mt-5 p-5" >';
echo '<center class="mt-5">
    <h1><strong>Bookings</strong></h1>
    </center>';

while ($row = $result->fetch_assoc()) {
    $b_id = $row["b_id"];
    $u_id = $row["u_id"];
    $p_ids = $row["p_ids"];
    $price = $row["price"];
    $p_idsarray[] = $p_ids;
    $user_first_name = $row["first_name"];

    echo '<div class="card mb-4">';
    echo '<div class="card-header"> Name : ' . $user_first_name . '</div>';
    echo '<div class="card-header"> User Id : ' . $u_id . '</div>';
    echo '<div class="card-header"> Booking Id : ' . $b_id . '</div>';
    echo '<div class="card-body">';
    
    // Display user and booking information
    echo '<p>Total Price: ' . $price . '</p>';
    
    // Retrieve product names based on p_ids
    $p_ids_array = explode(',', $p_ids);

    echo '<table class="table">
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                </tr>
            </thead>
            <tbody>';

    foreach ($p_ids_array as $p_id) {
        // Query to retrieve product names based on p_id
        $product_query = "SELECT p_id, name FROM products WHERE p_id = $p_id";
        $product_result = $conn->query($product_query);

        if ($product_result === false) {
            die("Error in SQL query: " . $conn->error);
        }

        while ($product_row = $product_result->fetch_assoc()) {
            $product_id = $product_row["p_id"];
            $product_name = $product_row["name"];
            
            echo '<tr>
                    <td>' . $product_id . '</td>
                    <td>' . $product_name . '</td>
                  </tr>';
        }
    }

    echo '</tbody>
          </table>';
    echo '<center>';
    echo '<a href="approve.php?booking_id=' . $b_id . '&p_ids=' . $p_ids . '&price=' . $price . '" class="btn btn-dark mr-5">Approve</a>';
    echo '<a href="reject.php?booking_id='.$b_id.'&p_ids=' . $p_ids . '&price=' . $price . '" class="btn btn-danger mr-5">Reject</a>';
    echo '</center>';
    echo '</div>'; // card-body
    echo '</div>'; // card
}

echo '</div>';
?>
