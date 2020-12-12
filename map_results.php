<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php'); ?>


<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBn9JO0zGoRPd_ycD-cEohWBk7GDT8_kiQ&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      let map, infoWindow;

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: 28.3026, lng: 77.153 },
          zoom: 6,
        });
        infoWindow = new google.maps.InfoWindow();
        const locationButton = document.createElement("button");
        
        locationButton.textContent = "Click to Current Location";
        
        locationButton.classList.add("custom-map-control-button");
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(
          locationButton
        );
        locationButton.addEventListener("click", () => {
          // Try HTML5 geolocation.
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
              (position) => {
                const pos = {
                  lat: position.coords.latitude,
                  lng: position.coords.longitude,
                };
                infoWindow.setPosition(pos);
                infoWindow.setContent("You're Here.");
                infoWindow.open(map);
                map.setCenter(pos);
              },
              () => {
                handleLocationError(true, infoWindow, map.getCenter());
              }
            );
          } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
          }
        });
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(
          browserHasGeolocation
            ? "Error: The Geolocation service failed."
            : "Error: Your browser doesn't support geolocation."
        );
        infoWindow.open(map);
      }
    </script>
    



        <!-- PAGE CONTETNT -->
        <section class="gl-page-content-section">
            <div class="container-fluid">
                <div class="row">
                    <!-- SEARCH MAP -->
                    <div class="map-wrapper map-split">
                        <div id="map"></div>
                    </div>
                    <!-- SEARCH MAP END -->
                    <!-- SEARCH -->
                    <div id="map-result-section" class="map-result-wrapper">
                        <div class="widget clearfix">
                            <!-- /widget heading -->
                            <div class="widget-heading">
                                <h3 class="widget-title text-dark">
                                        Search filter
                                    </h3>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget-body">
                                <form class="row">
                                    <!-- <div class="col-xs-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInputKeyword" placeholder="Keyword"> </div>
                                    </div> -->
                                    <div class="col-xs-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                        
                                            <input type="text" class="form-control"  id="exampleInputText2" placeholder="Location"> </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control" id="exampleSelect1">
                                                <option>Category</option>
                                                <option>Chicken</option>
                                                <option>Sweet Dish</option>
                                                <option>South Indian</option>
                                                <option>North Indian</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-3"> <a href="food_results.php" class="btn theme-btn  btn-block">Submit</a> </div>
                                </form>
                            </div>
                        </div>
                        <!-- end:Pricing widget -->
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
                        <div class="search-result-wrapper">
                            <div class="row">
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12 col-sm-6 col-md-6 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/butter.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">122 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="profile0.php">The North's Best Butter Chicken</a></h5>
                                            <div class="product-name">Butter Chicken</div>
                                            <div class="price-btn-block"> <span class="price">₹ 199.99</span> <a href="profile0.php" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="profile0.php"> <img src="images/aslam_logo.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="profile0.php">Aslam Chicken</a> <span>Chandni Chowk, New Delhi</span> </div>
                                            </div>
                                            <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item ends -->
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12 col-sm-6 col-md-6 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/tandoori.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">122 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="profile4.php">The City's Best Momos</a></h5>
                                            <div class="product-name">Tandoori momos</div>
                                            <div class="price-btn-block"> <span class="price">₹ 120</span> <a href="profile4.php" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="profile4.php"> <img src="images/mohan_logo.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="profile4.php">Mohan Momos</a> <span>NFC, New Delhi</span> </div>
                                            </div>
                                            <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item starts -->
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12 col-sm-6 col-md-6 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/idli.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">122 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="profile2.php">The South's Best Idli-Sambhar</a></h5>
                                            <div class="product-name">Idli Sambhar</div>
                                            <div class="price-btn-block"> <span class="price">₹ 75</span> <a href="profile2.php" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="profile2.php"> <img src="images/anna_logo.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="profile2.php">Anna ka Dosa</a> <span>Kalkaji, New delhi</span> </div>
                                            </div>
                                            <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item ends -->
                                <!--  popular food item starts -->
                                <div class="col-xs-12 col-sm-6 col-md-6 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/rabri.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">122 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="profile3.php">The Most Sweetish Dish in City</a></h5>
                                            <div class="product-name">Jalebi-Rabri</div>
                                            <div class="price-btn-block"> <span class="price">₹ 75</span> <a href="profile3.php" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="profile3.php"> <img src="images/jalebi_logo.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="profile3.php">Jalebi Wala</a> <span>Purani Dilli, Delhi</span> </div>
                                            </div>
                                            <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item ends -->
                                <!--  popular food item starts -->
                                <div class="col-xs-12 col-sm-6 col-md-6 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/kulcha.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">122 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="profile1.php">The Punjabi Style Chole Kulche</a></h5>
                                            <div class="product-name">Chole Kulche</div>
                                            <div class="price-btn-block"> <span class="price">₹ 50</span> <a href="profile1.php" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="profile1.php"> <img src="images/chole_logo.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="profile1.php">Shankar Chole Bhature</a> <span>Saket, New Delhi</span> </div>
                                            </div>
                                            <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item ends -->
                                <!--  popular food item starts -->
                                <div class="col-xs-12 col-sm-6 col-md-6 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/paneerpakoda.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">122 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="profile5.php">The Tasty & Crispy Pakode in Delhi</a></h5>
                                            <div class="product-name">Panner Pakoda</div>
                                            <div class="price-btn-block"> <span class="price">₹ 80</span> <a href="profile5.php" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="profile5.php"> <img src="images/pakode_logo.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="profile5.php">Pakode Wala</a> <span>Nauroji nagar, New Delhi</span> </div>
                                            </div>
                                            <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item ends -->
                                <!--  popular food item starts -->
                                <div class="col-xs-12 col-sm-6 col-md-6 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/lassi.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">122 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="profile3.php">The Punjab's Best lassi</a></h5>
                                            <div class="product-name">Lassi</div>
                                            <div class="price-btn-block"> <span class="price">₹ 40</span> <a href="profile3.php" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="profile3.php"> <img src="images/jalebi_logo.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="profile3.php">Jalebi Wala</a> <span>Purani Dilli, Delhi</span> </div>
                                            </div>
                                            <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item ends -->
                                <!--  popular food item starts -->
                                <div class="col-xs-12 col-sm-6 col-md-6 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/raita.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">122 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="profile1.php">The Best Boondi Raita</a></h5>
                                            <div class="product-name">Boondi raita</div>
                                            <div class="price-btn-block"> <span class="price">₹ 25 </span> <a href="profile1.php" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="profile1.php"> <img src="images/chole_logo.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="profile1.php">Shankar Chole Bhature</a> <span>Saket, New Delhi</span> </div>
                                            </div>
                                            <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item ends -->
                                <!--  -->
                            </div>
                        </div>
                    </div>
                    <!-- SEARCH END-->
                </div>
            </div>
        </section>
        <!-- PAGE CONTETNT END -->
    </div>
    <!-- end:page wrapper -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.js"></script>
    <script src="js/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/jquery.googlemap.js"></script>
    <script src="js/data.json"></script>
    
    
</body>



</html>
