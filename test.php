<?php
    include './common/CommonAdminHeader.php';
    $sql = "SELECT p_id, photo, name, price FROM products";
    $sql2 = "SELECT u_id, p_ids, price FROM bookings";
    $result = $conn->query($sql);
    if ($result === false) {
        die("Error in SQL query: " . $conn->error);
    }
    $result2 = $conn->query($sql);
    if($result2 === false)
    {
        die("Error in SQL query: " . $conn->error);
    }
    echo '<div class="container mt-5 p-5" >';
    echo '<center class="mt-5">
        <h1><strong>Bookings</strong></h1>
        </center>';
    while($row2 = $result2->fetch_assoc())
    {
        while($row = $result->fetch_assoc())
        {
        echo '<div class="row mb-4">';
    
        for ($i = 0; $i < 3 && $row; $i++) {
        $u_id = $row2["u_id"];
        $p_ids = $row2["p_ids"];
        $price = $row2["price"];        
        echo '<div class="col-md-4 mt-5">';
        echo '<div class="card c-1">';
        echo '<img class="card-img-top img-fluid" style="height: 20rem; width: 50rem" src="data:image/jpeg;base64,' . $soap_data . '" alt="' . $soap_name . '">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $ . '</h5>';
        echo '<h4>' . $ . 'rs</h4>';
        echo '<center>';
        echo '<a href="approve.php?product_id='.$.'" class="btn btn-dark mr-5">Approve</a>';
        echo '<a href="reject.php?product_id='.$.'" class="btn btn-danger mr-5">Reject</a>';
        echo '</center>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        
        $row2 = $result->fetch_assoc();
        }
    }
        echo '</div>';
    }
    echo '</div>';
    include './common/CommonFooter.php';
?>