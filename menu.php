<?php

  include("header.php");
  include("connection.php");

$Catquery="SELECT * FROM `category`";
$Catrun = mysqli_query($con,$Catquery);

$cid = 1;
if(isset($_GET['idCat']))
{
        $cid=$_GET['idCat'];
}
$subCatQuery="SELECT * FROM `subcategory` WHERE CID='$cid'";
$subcatrun=mysqli_query($con,$subCatQuery);
$imgCatquery="SELECT * FROM `category` where CID='$cid'";
$imgCatrun = mysqli_query($con,$imgCatquery);

?>

<!DOCTYPE html>
<html lang="en">
    

    <body>
        
        
        
        <!-- Page Header Start -->
        <div class="page-header mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Food Menu</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Food Start -->
        <div class="food">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="food-item">
                        <img src="img/burger.png" height="60px" width="60px">
                            <h2>Burgers</h2>
                            <p>
                          Try Our Tasty, delicious, Burgers that craving you more on the first bite.” To “Juicy,
                              tasty, and everything you'd ever want to savor.
                            </p>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                        <img src="img/pizza.png" height="60px" width="60px">
                            <h2>Pizzas</h2>
                            <p>
                            A delicious pizza has an intensely cheesy flavor to delight the foodies......And we are here to Provide it!!
                            </p>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                        <img src="img/sweets.png" height="60px" width="60px">
                            <h2>Desserts</h2>
                            <p>
                            Try Our Cakes,Cookies,Biscuits,Pastries,Candies,
                            Custards and Puddings To make your ocassion more sweet.
                            </p>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Food End -->

        <!-- Menu Start -->
        <div class="menu" id="menu1">
            <div class="container">
                <div class="section-header text-center">
                    <p>Food Menu</p>
                    <h2>Our Delicious Food!</h2>
                </div>
                <div class="menu-tab">
                    <ul class="nav nav-pills justify-content-center">
                        <?php while($GetCat=mysqli_fetch_assoc($Catrun))
                        {
                            ?>
                        <li class="nav-item">
                            <a class="nav-link" name="idcat" 
                             href="?idCat=<?php echo $GetCat['CID']?>#menu1"><?php echo $GetCat['CName'] ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                    <div class="tab-content">
                        <div id="burgers" class="container tab-pane active">
                            <div class="row">
                                   
                                <div class="col-lg-7 col-md-12 " id="Menu">
                                <?php while($GetSub=mysqli_fetch_assoc($subcatrun))
                                      { ?> <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="<?php echo $GetSub['Img1'] ?>" alt="Image" height="90px" width="19%">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span><?php echo $GetSub["Sub_Cat_Name"] ?></span> <strong> 
                         <a class="btn btn-md bg-warning text-light"
                          href="productDetail.php?Oid=<?php echo $GetSub['SubCatID']?>">
                            Order Now</a></strong></h3>
                                            <p><?php echo $GetSub["Description"] ?></p><br><br>
                                            <p><strong><i>Price:</i></strong><?php echo $GetSub["Price"] ?></p>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>

                                <div class="col-lg-5 d-none d-lg-block">
                                <?php $GetCatimg=mysqli_fetch_assoc($imgCatrun) ?>
                                    <img src="<?php echo $GetCatimg['Image'] ?>" alt="Image" height="500px" width="550px">
                                                          </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


        <?php
  include("footer.php");

?>
    </body>
</html>
