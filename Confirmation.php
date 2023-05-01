<?php
require_once 'config.php';

if(array_key_exists('paymentId',$_GET) && array_key_exists('PayerID',$_GET))
{
    $transaction = $gateway->completePurchase(
        array(
            'payer_id' => $_GET['PayerID'],
            'transactionReference' => $_GET['paymentId'],
        )
    );
    $response = $transaction->send();
    if($response->isSuccessful())
    {
        $arr_body = $response->getData();
        $payment_Id = $arr_body['id'];
        echo 'Payment Succesful';
    }
    else
    {
        echo $response->getMessage();
    }
}
else{
    echo 'Transaction is declined';
}
  include("header.php");
  $res="";
$msg = "";
include("connection.php");
  session_start();
  $oid =$_GET['oid'];
  ?>

<!DOCTYPE html>
<html lang="en">

<body>
   
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Order Now</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Order</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header text-center">
             
                    <div class="container  bg-light p-5">
                        <div class="row mb-3">
                            <div class="col-lg-12 text-center">
                                <h2 class="text-warning">Order Confirmation </h2>
                                <div class="text-success fs-4 p-5 ">
                                   Your Order Has Been Placed Succesfully<br/> 
                                   <b>Order Tracking ID:</b><u><?php echo $oid ?></u>
                                </div>
                            </div>
</div>

</div>




                <?php
  include("footer.php");

?>
</body>

</html>