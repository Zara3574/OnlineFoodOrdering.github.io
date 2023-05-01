<?php
include_once 'config.php';
include('connection.php');
    $pid = $_GET['item_number'];
$quan = $_GET['quantity'];
        session_start();
        $user = $_SESSION['email'];
        $userrun = mysqli_query($con, "SELECT * FROM `user` WHERE Email='$user'"); 
        $userrow = mysqli_fetch_assoc($userrun);
        //$uid = $userrow['UserId'];
        $date = date('d/m/y');
       // $orderrun = mysqli_query($con,"INSERT INTO `orders`(`Uid`, `OrderDate`) VALUES ('$uid','$date')");

            $oid =$con->insert_id ;
        
$orderdetailrun = mysqli_query($con, "INSERT INTO `orderdetail`(`oid`, `subcatId`, `Quatity`) VALUES ('$oid','$pid','$quan')");
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPal Payment Status</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="main">
            <div class="status">
                <?php if(!empty($payment_id)){ ?>
                    <h1 class="success">Your Payment has been successful</h1>

                    <h4>Payment Information</h4>
                    <p><b>Reference Number:</b> <?php echo $payment_id; ?></p>
                    <p><b>Transaction ID:</b> <?php echo $txn_id; ?></p>
                    <p><b>Paid Amount:</b> <?php echo $payment_gross; ?></p>
                    <p><b>Payment Status:</b> <?php echo $payment_status; ?></p>

                    <h4>Product Information</h4>
                    <p><b>Name:</b> <?php echo $productRow['name']; ?></p>
                    <p><b>Price:</b> <?php echo $productRow['price']; ?></p>
                <?php }else{ ?>
                    <h1 class="error">Your Payment has been successful</h1>
                <?php } ?>
            </div>
            <a href="index.php?flag=1" class="btn-link">Back to Products</a>
        </div>
    </div>
</body>
</html>