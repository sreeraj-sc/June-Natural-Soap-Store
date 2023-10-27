<?php
include './common/CommonHeader.php';
include './common/db_connection.php';

$uid = $_SESSION['uid'];

$cartQuery = "SELECT p_id FROM user_carts WHERE u_id = $uid";
$cartResult = $conn->query($cartQuery);

if ($cartResult === false) {
    die("Error executing cart query: " . $conn->error);
}

$cartItems = array();

while ($cartRow = $cartResult->fetch_assoc()) {
    $productId = $cartRow['p_id'];

    $cartItems[] = array('p_id' => $productId);
}

if (empty($cartItems)) {
    echo '<center>
    <h2 class="text-danger">No Product Where added to cart</h2>
</center>';
  }
$productQuery = "SELECT * FROM products WHERE p_id IN (";
$productQuery .= implode(',', array_column($cartItems, 'p_id')) . ")";

$productResult = $conn->query($productQuery);

$products = array();

while ($productRow = $productResult->fetch_assoc()) {
    $productId = $productRow['p_id'];
    $products[$productId] = $productRow;
}
?>

<main id="main">
    <section class="section cart__area">
        <div class="container">
            <div class="responsive__cart-area">
                <form class="cart__form">
                    <div class="cart__table table-responsive">
                        <table width="100%" class="table">
                            <thead>
                                <tr>
                                    <th>PRODUCT</th>
                                    <th>NAME</th>
                                    <th>UNIT PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $subtotal = 0;
                                foreach ($cartItems as $cartItem) {
                                    $productId = $cartItem['p_id'];
                                    $product = $products[$productId];
                                    $subtotal = $subtotal+$product['price'];
                                    $total = $subtotal+50;
                                ?>
                                    <tr>
                                        <td class="product__thumbnail">
                                            <a href="#">
                                                <img src="<?php echo $product[$productId]['photo']; ?>" alt="Product Image">
                                            </a>
                                        </td>
                                        <td class="product__name">
                                            <a href="#"><?php echo $product['name']; ?></a>
                                            <br><br>
                                        </td>
                                        <td class="product__price">
                                            <div class="price">
                                                <span class="new__price"><?php echo $product['price']; ?></span>
                                            </div>
                                        </td>
                                        <td class="product__quantity">
                                            <div class="input-counter">
                                                <div>
                                                    <span class="minus-btn">
                                                        <svg>
                                                            <use xlink:href="./images/sprite.svg#icon-minus"></use>
                                                        </svg>
                                                    </span>
                                                    <input type="number" min="1" value="1" max="10" class="counter-btn">
                                                    <span class="plus-btn">
                                                        <svg>
                                                            <use xlink:href="./images/sprite.svg#icon-plus"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product__subtotal">
                                            <div class="price">
                                                <span class="new__price"><?php echo $product['price'];?></span>
                                            </div>
                                            <a href="remove_from_cart.php?product_id=<?php echo $productId; ?>" class="remove__cart-item">
                                                <svg>
                                                    <use xlink:href="./images/sprite.svg#icon-trash"></use>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-btns">
                        <div class="continue__shopping">
                            <a href="index.php">Continue Shopping</a>
                        </div>
                        <div class="check__shipping">
                            <span>Shipping(+50rs)</span>
                        </div>
                    </div>
                    <div class="cart__totals">
                        <h3>Cart Totals</h3>
                        <ul>
                            <li>
                                Subtotal
                                <span class="new__price"><?php echo $subtotal?>rs</span>
                            </li>
                            <li>
                                Shipping
                                <span>50rs</span>
                            </li>
                            <li>
                                Total
                                <span class="new__price"><?php echo $total?>rs</span>
                            </li>
                        </ul>
                        <a href="payment.php?total=<?php echo $total; ?>">PROCEED TO CHECKOUT</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?php
include './common/CommonFacility.php';
include './common/CommonFooter.php';
$conn->close();
?>
