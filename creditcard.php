<?php
include './common/db_connection.php';
include './common/CommonHeader.php';
$uid = intval($_SESSION['uid']);
$price = filter_var($_GET['pay_total'], FILTER_SANITIZE_NUMBER_INT);
$encodedp_ids = $_GET['p_ids'];
$p_ids = array_map('intval', explode(',', $encodedp_ids));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>June-payment</title>
  <link rel="stylesheet" href="./style/payment.css" />
  <script src="./script/payment.js" type="text/javascript"></script>
  <style>
    .box
    {
      border: 1px solid black;
      margin: 10rem;
      width: 60rem;
    }
    input
    {
      margin-left: 5rem;
    }
    select
    {
      margin-left: 5rem;
    }
    .image
    {
      width:5rem;
      height: 5rem;
    }
  </style>
</head>

<body>
  <center>
<div class="pt-5 pl-5">
  <div >
      <form action="" method="post">
        <div class="box p-5">
          <h1><b><u>Card Details</u></b></h1>
          <img src="./images/mastercard.png" class="image">
          <img src="./images/rupay.png" class="image ml-5">
          <img src="./images/visa.png" class="image ml-5">
          <hr>
        <table>
          <tr>
            <td><label>Card Holder Name : </label>
            <td><input type="text" name="cardholder"><br>
          </tr>
          <tr>
            <td><label>Card number : </label>
            <td><input type="number" name="cardnumber"><br>
          </tr>
          <tr>
            <td><label>CVV : </label>
            <td><input type="number" name="cardcvv"><br>
          </tr>
          <tr>
          <td><label>Expiry Date : </label></td>
          <td><select name="cardmonth">
            <option value="0">Month</option>
            <option value="01">January</option>
            <option value="02">February</option>
            <option value="03">March</option>
            <option value="04">April</option>
            <option value="05">May</option>
            <option value="06">June</option>
            <option value="07">July</option>
            <option value="08">August</option>
            <option value="09">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
          </select>
          <select name="cardyear" class="ml-4">
            <option value="0000">Year</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
            <option value="2028">2028</option>
            <option value="2029">2029</option>
            <option value="2030">2030</option>
            <option value="2031">2031</option>
            <option value="2032">2032</option>
            <option value="2033">2033</option>
            <option value="2034">2034</option>
            <option value="2035">2035</option>
            <option value="2036">2036</option>
            <option value="2037">2037</option>
            <option value="2038">2038</option>
            <option value="2039">2039</option>
            <option value="2040">2040</option>
            <option value="2041">2041</option>
            <option value="2042">2042</option>
            <option value="2043">2043</option>
            <option value="2044">2044</option>
            <option value="2045">2045</option>
            <option value="2046">2046</option>
            <option value="2047">2047</option>
            <option value="2048">2048</option>
            <option value="2049">2049</option>
            <option value="2050">2050</option>
          </select></td>
          </tr>
  </table>

          <center>
            <button class="btn-dark pay_btn mt-5" type="submit" name="paynow">Pay &#8377;
                <?php echo $price ?>
            </button>
          </center>
        </div>
      </form>
    </div>
  </div>
  </center>
  <!-- partial -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
  <script src="https://unpkg.com/vue-the-mask@0.11.1/dist/vue-the-mask.js"></script>
</body>

</html>

<?php
    if(isset($_POST['paynow']))
    {
        $cardnumber = $_POST['cardnumber'];
        $cardholder = $_POST['cardholder'];
        $cardmonth = $_POST['cardmonth'];
        $cardyear = $_POST['cardyear'];
        $cardcvv = $_POST['cardcvv'];

        // $uid, $price, $p_ids

        $sql = "INSERT INTO user_creditcard(u_id, cardnumber, cardholder, cardmonth, cardyear, cardcvv, price) VALUES ('$uid', '$cardnumber', '$cardholder', '$cardmonth', '$cardyear', '$cardcvv', '$price')";
        if($conn->query($sql) === TRUE)
        {
            if($_GET['fromcart'] == 100)
            {
            $sql = "DELETE FROM user_carts WHERE u_id = ?";
            $stmt = $conn->prepare($sql);
            mysqli_stmt_bind_param($stmt, "i", $uid);
            $stmt->execute();
            }
            $p_ids_string = implode(',', $p_ids); // Convert the array to a comma-separated string
            $sql2 = "INSERT INTO bookings(u_id, p_ids, price) VALUES ('$uid', '$p_ids_string', '$price')";
            if($conn->query($sql2) === TRUE)
            {
              echo "<script>alert('Successfully Paid'); window.location = 'index.php';</script>";
            }
        }
        else
        {
            echo "<script>alert('Successfully Unsuccessfull'); window.location = 'cart.php';</script>";
        }
    }
?>