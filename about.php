<?php
  include("header.php");

?>

<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
    <body>

  <!-- Page Header Start -->
        <div class="page-header mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>About Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">About Us</a>
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
        

         <!-- About Start -->
         <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/about.jpg" alt="Image">
                            <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header">
                                <p>About Us</p>
                                <h2>Providing Taste Since 1990</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                “We ought to be about something beyond moving Fast Food. We ought to be a piece of our client’s lives and the networks in which we serve.”
                                </p>
                                <p>
                                The ‘Restaurant Mania’ Backstage Tour offers a genuine narrating background roused by the entrancing history,
                                 culture, 
                                 and estimations of the organization.<br>
                                From our neighborly individuals and delightful food to the irresistible “Eat Mor Chikin” Cows, you can investigate the remarkable ‘Restuarant Mania’ story with our guided strolling visit.
                                </p>
                                <a class="btn custom-btn" href="feature.php">Our Features</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        
        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
<section id="comments" class="container">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#desc">Description</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#cmnt" data-toggle="tab">Comments</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#reviews" data-toggle="tab">Reviews\Rating</a>
  </li>
</ul>
<div class="tab-content">
<div class="tab-pane fade-in active" id="desc">“We ought to be about something beyond moving Fast Food. We ought to be a piece of our client’s lives and the networks in which we serve.”

The ‘Restaurant Mania’ Backstage Tour offers a genuine narrating background roused by the entrancing history, culture, and estimations of the organization.
From our neighborly individuals and delightful food to the irresistible “Eat Mor Chikin” Cows, you can investigate the remarkable ‘Restuarant Mania’ story with our guided strolling visit.
</div>
<div id="cmnt" class="tab-pane fade">
22222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222
</div>
<div id="reviews" class="tab-pane fade">
333333333333333333333333333333333333333333333333333333333333333333333333
</div>
</div>
</section>

        <!-- Footer Start -->
      <?php include('footer.php'); ?>
