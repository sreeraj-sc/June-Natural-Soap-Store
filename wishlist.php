<?php
include './common/CommonHeader.php';
include './common/db_connection.php';
if (!isset($_SESSION['uid'])) {
    $_SESSION['p_no'] = 0;
    echo '<center>
    <div class="m-5 p-5">
    <h2 class="text-danger">You Need To Log In First</h2>
    </div>
</center>';
  }
else
{
    $uid = $_SESSION['uid'];
$cartQuery = "SELECT p_id FROM user_wishlist WHERE u_id = $uid";
$cartResult = $conn->query($cartQuery);

if ($cartResult === false) {
    die("Error executing wishlist query: " . $conn->error);
}

$cartItems = array();

while ($cartRow = $cartResult->fetch_assoc()) {
    $productId = $cartRow['p_id'];

    $cartItems[] = array('p_id' => $productId);
}

if (empty($cartItems)) {
    echo '<center>
    <div class="m-5 p-5">
    <h2 class="text-danger">No Product Where added to wishlist</h2>
    </div>
</center>';
  }
  else
  {
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
                                    <th>REMOVE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($cartItems as $cartItem) {
                                    $productId = $cartItem['p_id'];
                                    $product = $products[$productId];
                                ?>
                                    <tr>
                                        <td class="product__thumbnail">
                                            <a href="#">
                                                <img style="height: 10rem; width: 20rem" src="data:image/jpeg;base64,<?php echo base64_encode($product['photo']); ?>" alt="Product Image">
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
            
                                        <td class="product__subtotal">
                                            <a href="remove_from_wishlist.php?product_id=<?php echo $productId; ?>" class="remove__cart-item">
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
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?php
  }
}
include './common/CommonFacility.php';
include './common/CommonFooter.php';
$conn->close();
?>
