<?php
include './common/CommonAdminHeader.php';
$sql = "SELECT p_id, photo, name, price FROM products";
$result = $conn->query($sql);

if ($result === false) {
    die("Error in SQL query: " . $conn->error);
}

echo '<div class="container mt-5 p-5" >';
echo '<center class="mt-5">
        <h1><strong>Remove Products</strong></h1>
    </center>';
while($row = $result->fetch_assoc())
{
    echo '<div class="row mb-4">';
    
    for ($i = 0; $i < 3 && $row; $i++) {
        $soap_id = $row["p_id"];
        $soap_name = $row["name"];
        $soap_image = $row["photo"];
        $soap_price = $row["price"];
        $soap_data = base64_encode($soap_image);
        
        echo '<div class="col-md-4 mt-5">';
        echo '<div class="card c-1">';
        echo '<img class="card-img-top img-fluid" style="height: 20rem; width: 50rem" src="data:image/jpeg;base64,' . $soap_data . '" alt="' . $soap_name . '">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $soap_name . '</h5>';
        echo '<h4>' . $soap_price . 'rs</h4>';
        echo '<center>';
        echo '<a href="remove.php?product_id='.$soap_id.'" class="btn btn-dark mr-5">Remove</a>';
        echo '</center>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        
        $row = $result->fetch_assoc();
    }
    
    echo '</div>';
}
echo '</div>';
include './common/CommonFooter.php';
?>
