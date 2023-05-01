<?php
 
  $res="";
  $con =mysqli_connect('localhost','root','','resturant'); 
  
  if(isset($_GET['Oid'])){
    $subid=$_GET['Oid'];
   
    $res=mysqli_query($con,"select * FROM `subcategory` WHERE id='$subid'");
   
    $row=mysqli_fetch_assoc($res); 
}                      
$flag=0;
if(isset($_GET['flag']))
{
       $flag=$_GET['flag'];     
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Burger King - Food Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />
         <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         
        <!-- Template Stylesheet -->
        <link href="css/style1.css" rel="stylesheet">
        
    </head>

    <body>

       <!-- Nav Bar Start -->
       <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">Resturant <span>Mania</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link ">About</a>
                        <a href="feature.php" class="nav-item nav-link">Feature</a>
                        
                        <a href="menu.php" class="nav-item nav-link ">Menu</a>
                        <a href="Reviews.php" class="nav-item nav-link ">Reviews</a>
                        
                        
                        
                        <a href="contact.php" class="nav-item nav-link ">Contact</a>
         
                       
                    
                      
                      <?php if($flag==1){?>
                    
                        <a href="menu.php" class="nav-item nav-link "><i
                                class="fa-sharp fa-solid fa-user w-75"></i></a>
                       
                    <?php } 
                    else {
                    ?>
                     <a href="Login.php"> <button class="btn btn-warning btn-md text-light">Login</button></a>
                     <?php } ?>
                   
                    
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
    

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Product Detail</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">Product</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<div class="row">
    <div class="col-md-6 mt-5 mx-5 h-100">
        <div id="carouselExampleFade" class="carousel slide carousel-fade mt-0" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo $row['Img1'] ?>" alt="First slide" height="400px"
                        width="300px">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo $row['Img2'] ?>" alt="Second slide" height="400px"
                        width="300px">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo $row['Img3'] ?>" alt="Third slide" height="400px"
                        width="300px">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo $row['Img4'] ?>" alt="Forth slide" height="400px"
                        width="300px">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo $row['Img5'] ?>" alt="Forth slide" height="400px"
                        width="300px">
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 m-5  h-50 ">
        <div class="card mt-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <h6 class="mb-0 fs-5">Product Name</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                        <?php echo $row['Title'] ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-4 p-3">
                        <h6 class="mb-0 fs-5">Price</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                        <?php echo $row['Price'] ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-4 p-3">
                        <h6 class="mb-0 fs-5">Description</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                        <?php echo $row['description'] ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12 p-3">
                        <a href="ordernow.php?Oid=<?php echo $row['id']?>&check=<?php echo $flag ?>"> <button
                                class="btn btn-warning btn-md text-light">Order
                                Now</button></a>

                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
<?php
  include("footer.php");

?>

</body>

</html>