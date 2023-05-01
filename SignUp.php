<?php
$errorMsg="";
$successMsg="";
 if(isset($_POST['Submit']))
   {
    
include("connection.php");
      $fname=$_POST['txtFname'];
    $lname=$_POST['txtLname'];
    $email=$_POST['email'];
    $phone=$_POST['txtPhone'];
    $pAddress=$_POST['txtPAddress'];
    $bAddress=$_POST['txtBAddress'];
    $password=$_POST['psswd'];
    
   $query="INSERT INTO `user`(`FirstName`, `LastName`, `Phone`, `Email`, `Postal Address`, `Billing Address`,
    `Passwords`) VALUES ('$fname','$lname','$phone','$email',' $pAddress',' $bAddress','  $password')";
   
 $res=mysqli_query($con,$query);
       if($res)
    {
    $successMsg='You have Registered sucessFully!';
 }   
  else{
    $errorMsg="Failed to Registered";
  }  

   }

    
   
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Resturant Mania Sign-Up</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="~/img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="~/lib/animate/animate.min.css" rel="stylesheet">
    <link href="~/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="~/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="~/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="~/css/style.css" rel="stylesheet">
</head>
<body>
<section class="h-200 h-custom" style="background-color: #b2dfdb;">
  <div class="container py-5 h-300">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3 h-200 ">
        <?php if($successMsg)
    {?>
   <center> <div style="background-color:#039be5;height:50px; width:380px;color:azure;padding:5px" class="mt-4">
   <center><?php echo $successMsg;?></div></center>
<?php }
    if($errorMsg)
    {?>
<div style="background-color:red;width:500px;height:30px;color:white;padding:5px"><?php echo $errorMsg;?></div>
    <?php
}?>
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">User Sign-Up</h3>

            <form class="px-md-2" method="post">
           
            <div class="row ">

            <div class="col-md-6 ">
                <label class="form-label" for="txtFname">First Name</label>
               <div class="form-outline">
                <input type="text" id="txtFname" class="form-control" name="txtFname" /></div>
                 </div>

                 <div class="col-md-6 ">
                <label class="form-label" for="txtLname">Last Name</label>
               <div class="form-outline">
                <input type="text" id="txtLname" class="form-control" name="txtLname"/></div>
                 </div>

            </div>
            <div class="row ">

<div class="col-md-6 ">
    <label class="form-label" for="email">Email</label>
   <div class="form-outline">
    <input type="email" id="email" class="form-control"  name="email"/></div>
     </div>

     <div class="col-md-6 ">
    <label class="form-label" for="txtPhone">Phone</label>
   <div class="form-outline">
    <input type="text" id="txtPhone" class="form-control" name="txtPhone" /></div>
     </div>

</div>

<div class="form-outlin">
         <label class="form-label" for="txtPAddress">Postal Address</label>
                <input type="text" id="txtPAddress" class="form-control" name="txtPAddress" />
                
              </div>
              <div class="form-outline">
         <label class="form-label" for="txtBAddress">Billing Address</label>
                <input type="text" id="txtBAddress" class="form-control" name="txtBAddress" />
                
              </div>
              <div class="form-outline mb-4">
         <label class="form-label" for="psswd">Password</label>
                <input type="password" id="psswd" class="form-control" name="psswd"/>
                
              </div>


              <input type="submit" name="Submit" class="btn btn-primary btn-lg mb-1" value="Submit">
              <a href="login.php"  class="btn btn-primary btn-lg mb-1">Login</a>

            </form>

            

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Template Javascript -->
<script src="~/js/main.js"></script>
</body>
</html>