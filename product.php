<?php
include './common/CommonHeader.php';
include './common/db_connection.php';

// Check if the 'product_id' GET parameter is set
if (isset($_GET['product_id'])) {
    // Retrieve the product ID from the GET parameter
    $product_id = $_GET['product_id'];

    // Prepare and execute the SQL query
    $sql = "SELECT * FROM products WHERE p_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Product details were found
        $product = $result->fetch_assoc();
        $soap_data = base64_encode($product['photo']);
        $soap_price = $product["price"];
        $soap_name = $product["name"];
        $soap_id = $product['p_id'];
        $subtotal = 0;
        $subtotal = $soap_price+50;

        // Output product details on your webpage
        echo '<div class="page__title-area">';
        echo '<div class="container">';
        echo '<div class="page__title-container">';
        echo '<ul class="page__titles">';
        echo '<li>';
        echo '<a href="/">';
        echo '<svg>';
        echo '<use xlink:href="./images/sprite.svg#icon-home"></use>';
        echo '</svg>';
        echo '</a>';
        echo '</li>';
        // Check if the 'name' key exists before accessing it
        if (isset($product['name'])) {
            echo '<li class="page__title">' . $product['name'] . '</li>';
        }
        echo '</ul>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        // Display the product image, price, and other details
        echo '<section class="section product-details__section">';
        echo '<div class="container">';
        echo '<div class="product-detail__container">';
        echo '<div class="product-detail__left">';
        echo '<div class="details__container--left">';
        echo '<div class="product__picture" id="product__picture">';
        if (isset($product['photo'])) {
            echo '<div class="picture__container">';
            echo '<img src="data:image/jpeg;base64,' . $soap_data . '" alt="' . $product['name'] . '" style="height: 30rem; width: 80rem">';
            echo '</div>';
        }
        echo '</div>';
        echo '<div class="zoom" id="zoom"></div>';
        echo '</div>';
        echo '<div class="product-details__btn">
                <a class="add" href="add_to_cart.php?product_id=' . $soap_id . '">
                    <span>
                        <svg>
                            <use xlink:href="./images/sprite.svg#icon-cart-plus"></use>
                        </svg>
                    </span>
                ADD TO CART</a>
                <a class="buy" href="#">
                    <span>
                        <svg>
                            <use xlink:href="./images/sprite.svg#icon-credit-card"></use>
                        </svg>
                    </span>
                BUY NOW
                </a>
                </div>
            </div>';
        // Display product details on the right side
        echo '<div class="product-detail__right">';
        echo '<div class="product-detail__content">';
        if (isset($product['name'])) {
            echo '<h3>' . $product['name'] . '</h3>';
        }
        echo '<div class="price">';
        if (isset($product['price'])) {
            echo '<span class="new__price">' . $product['price'] . 'rs</span>';
        }
        echo '</div>';
        // Add more details here
        echo '<div class="product__review">
                <div class="rating">
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                  </svg>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                  </svg>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                  </svg>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                  </svg>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                  </svg>
                </div>
                <a href="#" class="rating__quatity">3 reviews</a>
              </div>';
        if (isset($product['details'])) {
            echo '<p>' . $product['details'] . '</p>';
        }
        echo '<div class="product__info-container">
        <ul class="product__info">
            <li>
                <div class="input-counter">
                    <span>Quantity:</span>
                    <div>
                        <span class="minus-btn">
                            <svg>
                                <use xlink:href="./images/sprite.svg#icon-minus"></use>
                            </svg>
                        </span>
                        <input type="text" min="1" value="1" max="10" class="counter-btn">
                        <span class="plus-btn">
                            <svg>
                                <use xlink:href="./images/sprite.svg#icon-plus"></use>
                            </svg>
                        </span>
                    </div>
                </div>
            </li>
            <li>
                <span>Subtotal:</span>';
        echo '<a href="#" class="new__price">' . $subtotal . '</a>
            </li>
                <li>
                    <span>Availability:</span>
                    <a href="#" class="in-stock">In Stock (7 Items)</a>
                </li>
                </ul>
                <div class="product-info__btn">
                  <a href="#">
                    <span>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-crop"></use>
                      </svg>
                    </span>&nbsp;
                    SIZE GUIDE
                  </a>
                  <a href="#">
                    <span>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-truck"></use>
                      </svg>
                    </span>&nbsp;
                    SHIPPING
                    </a>
                  <a href="#">
                    <span>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-envelope-o"></use>
                      </svg>&nbsp;
                    </span>
                    ASK ABOUT THIS PRODUCT
                  </a>
                </div>
        ';
        // ...
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</section>';

    } else {
        echo 'Product not found';
    }
} else {
    echo 'Product ID not provided';
}
?>

</main>
<?php
include './common/CommonFacility.php';
include './common/CommonFooter.php';
$conn->close();
?>
