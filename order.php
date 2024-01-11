<?php
    ob_start();
    include './common/CommonAdminHeader.php';
    include './common/db_connection.php';
    if (!isset($_SESSION['uid'])) {
        $_SESSION['p_no'] = 0;
    }    
    $primaryKeyColumn = "b_id";
    $sql = "SELECT COUNT($primaryKeyColumn) AS total_bookings FROM bookings";
    $result = $conn->query($sql);
    
?>
<head>
<style>
    .box
    {
      border: 1px solid black;
      margin: 10rem;
      width: 60rem;
    }
</style>
</head>
<body class="text-center">
    <center>
        <div class="pt-5 pl-5">
            <div class="box p-5">
                <h2>Orders</h2>
                <hr>
                <?php 
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $totalBookings = $row["total_bookings"];  
                        echo "Total Bookings: " . $totalBookings;
                    } 
                    else {
                        echo "No bookings found."; 
                    } 
                ?><br><br>
                <a href="booking.php"><button class="">Show Bookings</button></a>
            </div>
        </div>
    </center>
</body>
<?php
include './common/CommonFooter.php';
?>