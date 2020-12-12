<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php'); ?>
        <div class="page-wrapper">
            <!-- top Links -->
            <div class="top-links">
                <div class="container">
                    <ul class="row links">
                        <li class="col-xs-12 col-sm-3 link-item"><span>1</span><a href="index-2.html">Choose Your Location</a></li>
                        <li class="col-xs-12 col-sm-3 link-item"><span>2</span><a href="restaurants.html">Choose Restaurant</a></li>
                        <li class="col-xs-12 col-sm-3 link-item active"><span>3</span><a href="profile.html">Pick Your favorite food</a></li>
                        <li class="col-xs-12 col-sm-3 link-item"><span>4</span><a href="checkout.html">Order and Pay online</a></li>
                    </ul>
                </div>
            </div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <div class="inner-page-hero bg-image" data-image-src="images/profile-banner.jpg">
                <div class="container"> </div>
                <!-- end:Container -->
            </div>
            <div class="result-show">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <p><span class="primary-color"><strong>Best</strong></span> Results so far </div>
            </p>
            <div class="col-sm-9">
                <select class="custom-select pull-right">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
    </div>
</div>
<!-- //results show -->
            <section class="restaurants-page">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                            <div class="sidebar clearfix m-b-20">
                                <div class="main-block">
                                    <div class="sidebar-title white-txt">
                                        <h6>Choose Cusine</h6> <i class="fa fa-cutlery pull-right"></i> </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control search-field" placeholder="Search your favorite food"> <span class="input-group-btn"> 
                                 <button class="btn btn-secondary search-btn" type="button"><i class="fa fa-search"></i></button> 
                                 </span> </div>
                                    <form>
                                        <ul>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Chicken</span> </label>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">North Indian</span> </label>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">South Indian</span> </label>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Sweet Dish</span> </label>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Beverages</span> </label>
                                            </li>
                                        </ul>
                                    </form>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- end:Sidebar nav -->
                                <div class="widget-delivery">
                                    <form>
                                        <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
                                            <label class="custom-control custom-radio">
                                                <input id="radio1" name="radio" type="radio" class="custom-control-input" checked=""> <span class="custom-control-indicator"></span> <span class="custom-control-description">Delivery</span> </label>
                                        </div>
                                        <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
                                            <label class="custom-control custom-radio">
                                                <input id="radio2" name="radio" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Takeout</span> </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget clearfix">
                                <!-- /widget heading -->
                                <div class="widget-heading">
                                    <h3 class="widget-title text-dark">
                                 Price range
                              </h3>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget-body">
                                    <div class="range-slider m-b-10"> <span id="ex2CurrentSliderValLabel"> Filter by price:<span id="ex2SliderVal"><strong>35</strong></span>₹</span>
                                        <br>
                                        <input id="ex2" type="text" data-slider-min="1" data-slider-max="100" data-slider-step="1" data-slider-value="35" /> </div>
                                </div>
                            </div>
                            <!-- end:Pricing widget -->
                            <div class="widget clearfix">
                                <!-- /widget heading -->
                                <div class="widget-heading">
                                    <h3 class="widget-title text-dark">
                                 Popular tags
                              </h3>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget-body">
                                    <ul class="tags">
                                        <li> <a href="#" class="tag">
                                    Chicken
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Dosa
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Paneer Momo
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Jalebi
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Idli
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Bhature
                                    </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end:Widget -->
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                            <div class="row">
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/food1.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">122 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="profile0.php">The North's Best Tandoori Chicken</a></h5>
                                            <div class="product-name">Tandoori Chicken</div>
                                            <div class="price-btn-block"> <span class="price"> ₹ 249.99</span> <a href="profile0.php" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="profile0.php"> <img src="images/aslam_logo.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="profile0.php">Aslam Chicken</a> <span>Chandni Chowk, New Delhi</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item starts -->
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/pic1.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">122 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="profile4.php">The City's Best Momos   (All Types of Momos)</a></h5>
                                            <div class="product-name">Chicken Momos</div>
                                            <div class="price-btn-block"> <span class="price">₹ 60</span> <a href="profile4.php" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="profile4.php"> <img src="images/mohan_logo.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="profile4.php">Mohan Momos</a> <span>NFC, New Delhi</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item starts -->
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/pic2.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">122 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="profile2.php">The South's Best Masala Dosa</a></h5>
                                            <div class="product-name">Masala Dosa</div>
                                            <div class="price-btn-block"> <span class="price">₹ 60</span> <a href="profile2.php" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="profile2.php"> <img src="images/anna_logo.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="profile2.php">Anna ka Dosa</a> <span>Kalkaji, New Delhi</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/pic3.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">122 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="profile3.php">The Most Sweetish dish in the City</a></h5>
                                            <div class="product-name">Jalebi</div>
                                            <div class="price-btn-block"> <span class="price">₹ 50</span> <a href="profile3.php" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="profile3.php"> <img src="images/jalebi_logo.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="profile3.php">Jalebi Wala</a> <span>Purani Dilli, Delhi</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/pic5.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">122 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="profile1.php">The Punjabi Style Chole Bhature</a></h5>
                                            <div class="product-name">Chole Bhature</div>
                                            <div class="price-btn-block"> <span class="price">₹ 50</span> <a href="profile1.php" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="profile1.php"> <img src="images/chole_logo.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="profile1.php">Shankar Chole Bhature</a> <span>Saket, New Delhi</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/pic4.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">122 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="profile5.php">The Tasty & Crispy Pakode in Delhi</a></h5>
                                            <div class="product-name">Pyaaz Pakoda</div>
                                            <div class="price-btn-block"> <span class="price">₹ 50</span> <a href="profile5.php" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="profile5.php"> <img src="images/pakode_logo.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="profile5.php">Pakode Wala</a> <span>Nauroji Nagar, New Delhi</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item starts -->
                                
                            </div>
                            <!-- end:right row -->
                        </div>
                    </div>
                </div>
            </section>
            <?php require_once('includes/footer.php'); ?>