<?php
include("connection.php");
$flag=0;
$count=0;
if(isset($_POST['btnLogin']))
{

    $email=$_POST['email'];
    $psswd=$_POST['password'];
$query="SELECT * from `user` where Email='$email'";
$loginRes = mysqli_query($con,$query);
    $count=mysqli_num_rows($loginRes);
    if($count==0){
        echo "Invalid username and password"; 
    }
    
    else if($count==1){
        session_start();
            $_SESSION['email']=$email;
        $_SESSION['pass']=$psswd;
        $flag+=1;
        
        header("location:index.php?check=1");
    }

}



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Resturant Mania Login</title>
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
   
    <div class="contact mt-5" id="pgContact">
        <div class="container">
            <div class="section-header text-center">

                <h2>Login</h2>
            </div>

            <div class="row contact-form">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <div class="form-outline mb-4">
                        <div id="success">
                        <form name="sentMessage" id="contactForm" novalidate="novalidate" method="post">
                            <div class="control-group">
                                <input type="text" class="form-control" id="username" name="email" placeholder="Email"
                                       required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                                       required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Simple link -->
                                    <a href="#!">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <input type="submit" name="btnLogin" class="btn btn-primary btn-block mb-4" value="Sign in">

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Not a member? <a href="SignUp.php">Register</a></p>
                                <p>or sign up with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
</div>
                        </form>
                   
                </div>
                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </div>
   
    <!-- Template Javascript -->
    <script src="~/js/main.js"></script>
</body>
</html>

