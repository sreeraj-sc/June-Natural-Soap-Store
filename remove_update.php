<?php
    include './common/CommonAdminHeader.php';
    $sql = "SELECT p_id, photo, name, price FROM products";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Error in SQL query: " . $conn->error);
    }

    while($row = $result->fetch_assoc())
    {
        $soap_id = $row["p_id"];
        $soap_name = $row["name"];
        $soap_image = $row["photo"];
        $soap_price = $row["price"];
        $soap_data = base64_encode($soap_image);

        echo '<div class="card-deck mt-5 p-5">
            <div class="card">';
        echo '<img class="card-img-top" style="width: 450px; height: 200px;" src="data:image/jpeg;base64,' . $soap_data . '" alt="' . $soap_name . '">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $soap_name . '</h5>';
        echo '<h4>' . $soap_price . 'rs</h4>';
        echo '<center>';
        echo '<a href="#" class="btn btn-dark mr-5">Remove</a>';
        echo '<a href="#" class="btn btn-dark ml-5">Update</a>';
        echo '</center>';
        echo '</div>
            </div>
            <div class="card">';
        echo '<img class="card-img-top" style="width: 450px; height: 200px;" src="data:image/jpeg;base64,' . $soap_data . '" alt="' . $soap_name . '">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $soap_name . '</h5>';
        echo '<h4>' . $soap_price . 'rs</h4>';
        echo '<center>';
        echo '<a href="#" class="btn btn-dark mr-5">Remove</a>';
        echo '<a href="#" class="btn btn-dark ml-5">Update</a>';
        echo '</center>';
        echo '</div>
        </div>
        <div class="card">';
        echo '<img class="card-img-top" style="width: 450px; height: 200px;" src="data:image/jpeg;base64,' . $soap_data . '" alt="' . $soap_name . '">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $soap_name . '</h5>';
        echo '<h4>' . $soap_price . 'rs</h4>';
        echo '<center>';
        echo '<a href="#" class="btn btn-dark mr-5">Remove</a>';
        echo '<a href="#" class="btn btn-dark ml-5">Update</a>';
        echo '</center>';
        echo '</div>
            </div>
            </div>';
    }
    include './common/CommonFooter.php';
?>
