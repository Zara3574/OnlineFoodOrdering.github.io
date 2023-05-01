<?php
include_once 'config.php';
include_once 'dbconnect.php';

$res="";
$msg = "";
$quan=1;
$price = 1;
$con =mysqli_connect('localhost','root','','resturant'); 
$flag=0;
if(isset($_GET['check']))
{
       $flag=$_GET['check'];     
}
if ($flag==1) {
    session_start();
    $email=$_SESSION['email'];
    $psswd=$_SESSION['pass'];
    $query = "SELECT * FROM `user` WHERE Email='$email'";
    $urun = mysqli_query($con, $query);
    $urow = mysqli_fetch_assoc($urun);
} if(isset($_GET['Oid'])){
    
    $subid=$_GET['Oid'];
    $subCatQuery="select * FROM `subcategory` WHERE id='$subid'";
    $res=mysqli_query($con,$subCatQuery);
    $row=mysqli_fetch_assoc($res);
    $price=$row['Price'];
}
$bill = $quan * $price;          
include("header.php");                 
?>
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
            <div class="footer">
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-lg-1"></div>

                        <div class="col-lg-6">
                            <h2 class="text-warning">Place Order</h2>
                            <div class="form">
                                <h4>Order-Details</h4>
                                <div class="control-group">

                                    <form action="<?php echo PAYPAL_URL; ?>" method="POST">
                                        <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">
                                        <input type="hidden" name="cmd" value="_xclick">
                                        <input type="hidden" name="item_number" value="<?php echo $row['id'];?>">
                                        <input type="hidden" name="amount" value="<?php echo $row['Price'] ?>">
                                        <input type="hidden" name="currency-code" value="USD">
                                        <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
                            <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">
                                        <input type="hidden" class="form-control" id="PID" <?php if(isset($_GET['Oid'])){
                                                ?> value="<?php echo $row['id'];?>" <?php } ?>
                                            placeholder="Product ID" required="required" name="pid" />
                                        <p class="help-block "></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="Pname" <?php if(isset($_GET['Oid'])){
    ?> value="<?php echo $row['Title'] ?>" <?php } ?> placeholder="Product Name" required="required" />
                                    <p class="help-block "></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="desc" <?php if(isset($_GET['Oid'])){
    ?> value="<?php echo $row['description'] ?>" <?php } ?> placeholder="Product Description" required="required" />
                                    <p class="help-block "></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="price" <?php if(isset($_GET['Oid'])){
    ?> value="<?php echo $row['Price'] ?>" <?php } ?> placeholder="Price" required="required" />
                                    <p class="help-block "></p>
                                </div>
                                <div class="control-group">
                                    <input type="number" value="1" min="1" max="7" class="form-control " id="quan" 
                                        name="quantity"  oninput="myFunction()" placeholder="Quantity"/>
                                    <p class="help-block "></p>
                                </div>
                                <div class="control-group text-left bg-white border-light">
                                    <span class="font-weight-bolder mt-3 ">Total Bill </span>
                                     <span id="itotal"><?php if(isset($_GET['Oid'])){
 echo $row['Price'] ?> <?php } ?></span>
                                </div>

                                <!-- customer Detail-->

                                <h4 class="mt-5">Customer-Details</h4>
                                <div class="control-group ">
                                    <input type="text" class="form-control" id="name" name="txtFname"
                                        placeholder="First Name" required="required" <?php if($flag==1){ ?>
                                        value="<?php echo $urow['FirstName'] ?>" <?php } ?> />
                                    <p class="help-block "></p>
                                    <input type="text" class="form-control" id="name" name="txtLname"
                                        placeholder="Last Name" required="required" <?php if($flag==1){ ?>
                                        value="<?php echo $urow['LastName'] ?>" <?php } ?> />
                                    <p class="help-block "></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" name="txtphone"
                                        placeholder="Phone No" required="required" <?php if($flag==1){ ?>
                                        value="<?php echo $urow['Phone'] ?>" <?php } ?> />
                                    <p class="help-block "></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" name="txtEmail"
                                        placeholder="Email" required="required" <?php if($flag==1){ ?>
                                        value="<?php echo $urow['Email'] ?>" <?php } ?> />
                                    <p class="help-block "></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" name="txtPostalAddress"
                                        placeholder="Postal Address" required="required" <?php if($flag==1){ ?>
                                        value="<?php echo $urow['Postal Address'] ?>" <?php } ?> />
                                    <p class="help-block "></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" name="txtBillingAdress"
                                        placeholder="Billing Address" required="required" <?php if($flag==1){ ?>
                                        value="<?php echo $urow['Billing Address'] ?>" <?php } ?> />
                                    <p class="help-block "></p>
                                </div>
                                <br>
                                <input type="hidden" class="form-control" id="name" placeholder="Billing Address"
                                    required="required" />
                                <p class="help-block "></p>
                                <input type="image" name="submit" class="mb-3" style="border:0;" src="https://paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif">
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-5 pt-5">

                            <div class="row">
                                <div class="col-7">
                                    <img src="<?php echo $row['Img1'] ?>" alt="Image" width="200px" height="150px">
                                </div>
                                <div class="col-5">
                                    <img src="<?php echo $row['Img2'] ?>" alt="Image" width="200px" height="150px">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-7">
                                    <img src="<?php echo $row['Img3'] ?>" alt="Image" width="200px" height="150px">
                                </div>
                                <div class="col-5">
                                    <img src="<?php echo $row['Img4'] ?>" alt="Image" width="200px" height="150px">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-9 ml-4">
                                    <img src="<?php echo $row['Img5'] ?>" alt="Image" width="420px" height="160px">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>









            <?php
  include("footer.php");

?>

            <script>
            

            function myFunction() {
                var price = document.getElementById('price').value;
            var quan = document.getElementById('quan').value;
                bill = price*quan;
                document.getElementById("itotal").innerHTML=bill;
                // $("#itotal").text(bill);
            }
            </script>

            </html>