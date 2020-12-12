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
            <section class="inner-page-hero bg-image" data-image-src="images/profile-banner.jpg">
               <div class="profile">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                           <div class="image-wrap">
                              <figure><img src="images/Chole.png" alt="Profile Image"></figure>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc">
                           <div class="pull-left right-text white-txt">
                              <h6><a href="#">Shankar Chole-Bhature</a></h6>
                              <a class="btn btn-small btn-green">Open</a>
                              <p>Chole-Bhature, Naan-SaahiPaneer, Chole-Kulche, Lassi</p>
                              <ul class="nav nav-inline">
                                 <li class="nav-item"> <a class="nav-link active" href="#"><i class="fa fa-check"></i> Min ₹ 100</a> </li>
                                 <li class="nav-item"> <a class="nav-link" href="#"><i class="fa fa-motorcycle"></i> 30-45 min</a> </li>
                                 <li class="nav-item ratings">
                                    <a class="nav-link" href="#"> <span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    </span> </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- end:Inner page hero -->
            <div class="breadcrumb">
               <div class="container">
                  <ul>
                     <li><a href="#" class="active">Home</a></li>
                     <li><a href="#">Search results</a></li>
                     <li>Profile</li>
                  </ul>
               </div>
            </div>
            <div class="container m-t-30">
               <div class="row">
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                     <div class="sidebar clearfix m-b-20">
                        <div class="main-block">
                           <div class="sidebar-title white-txt">
                              <h6>Choose Cusine</h6>
                              <i class="fa fa-cutlery pull-right"></i> 
                           </div>
                           <ul>
                              <li><a href="#1" class="scroll active">Chicken</a></li>
                              <li><a href="#2" class="scroll">North Indian</a></li>
                              <li><a href="#3" class="scroll">South Indian</a></li>
                              <li><a href="#4" class="scroll">Sweet Dish</a></li>
                              <li><a href="#7" class="scroll">Beverages</a></li>
                           </ul>
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
                     <!-- end:Left Sidebar -->
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
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Dosa
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Paneer Momos
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Jalebi 
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Idli
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Bhature
                                 </a> 
                              </li>
                             
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
                     <div class="menu-widget m-b-30">
                        <div class="widget-heading">
                           <h3 class="widget-title text-dark">
                              POPULAR ORDERS Delicious hot food! <a class="btn btn-link pull-right" data-toggle="collapse" href="#popular" aria-expanded="true">
                              <i class="fa fa-angle-right pull-right"></i>
                              <i class="fa fa-angle-down pull-right"></i>
                              </a>
                           </h3>
                           <div class="clearfix"></div>
                        </div>
                        <div class="collapse in" id="1">
                           <div class="food-item white">
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-lg-8">
                                    <div class="rest-logo pull-left">
                                       <a class="restaurant-logo pull-left" href="#"><img src="images/cholebhature.png" alt="Food logo"></a>
                                    </div>
                                    <!-- end:Logo -->
                                    <div class="rest-descr">
                                       <h6><a href="#">Chole Bhature</a></h6>
                                       <p>Chole-Bhature, Naan-SaahiPaneer, Chole-Kulche, Lassi</p>
                                    </div>
                                    <!-- end:Description -->
                                 </div>
                                 <!-- end:col -->
                                 <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left">₹ 50</span> <a href="#" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal">&#43;</a> </div>
                              </div>
                              <!-- end:row -->
                           </div>
                           <!-- end:Food item -->
                           <div class="food-item">
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-lg-8">
                                    <div class="rest-logo pull-left">
                                       <a class="restaurant-logo pull-left" href="#"><img src="images/sahipaneer.png" alt="Food logo"></a>
                                    </div>
                                    <!-- end:Logo -->
                                    <div class="rest-descr">
                                       <h6><a href="#">Naan-SaahiPaneer</a></h6>
                                       <p> Chole-Bhature, Naan-SaahiPaneer, Chole-Kulche, Lassi</p>
                                    </div>
                                    <!-- end:Description -->
                                 </div>
                                 <!-- end:col -->
                                 <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left">₹  100</span> <a href="#" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal">&#43;</a> </div>
                              </div>
                              <!-- end:row -->
                           </div>
                           <!-- end:Food item -->
                           <div class="food-item white">
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-lg-8">
                                    <div class="rest-logo pull-left">
                                       <a class="restaurant-logo pull-left" href="#"><img src="images/cholekulche.png" alt="Food logo"></a>
                                    </div>
                                    <!-- end:Logo -->
                                    <div class="rest-descr">
                                       <h6><a href="#">Chole-Kulche</a></h6>
                                       <p>Chole-Bhature, Naan-SaahiPaneer, Chole-Kulche, Lassi</p>
                                    </div>
                                    <!-- end:Description -->
                                 </div>
                                 <!-- end:col -->
                                 <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left">₹  30</span> <a href="#" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal">&#43;</a> </div>
                              </div>
                              <!-- end:row -->
                           </div>
                           <!-- end:Food item -->
                           <div class="food-item">
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-lg-8">
                                    <div class="rest-logo pull-left">
                                       <a class="restaurant-logo pull-left" href="#"><img src="images/Lassi.png" alt="Food logo"></a>
                                    </div>
                                    <!-- end:Logo -->
                                    <div class="rest-descr">
                                       <h6><a href="#">Lassi</a></h6>
                                       <p>Chole-Bhature, Naan-SaahiPaneer, Chole-Kulche, Lassi</p>
                                    </div>
                                    <!-- end:Description -->
                                 </div>
                                 <!-- end:col -->
                                 <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left">₹ 40 </span> <a href="#" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal">&#43;</a> </div>
                              </div>
                              <!-- end:row -->
                           </div>
                           <!-- end:Food item -->
                        </div>
                        <!-- end:Collapse -->
                     </div>
                     
                     <!-- end:Widget menu -->
                     <div class="menu-widget" id="2">
                           <div class="collapse in" id="popular2">
                           <div class="food-item">
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-lg-8">
                                    <div class="rest-logo pull-left">
                                       <a class="restaurant-logo pull-left" href="#"><img src="images/boondiraita.png" alt="Food logo"></a>
                                    </div>
                                    <!-- end:Logo -->
                                    <div class="rest-descr">
                                       <h6><a href="#">Boondi-Raita</a></h6>
                                       <p>Chole-Bhature, Naan-SaahiPaneer, Chole-Kulche, Lassi</p>
                                    </div>
                                    <!-- end:Description -->
                                 </div>
                                 <!-- end:col -->
                                 <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left">₹ 25</span> <a href="#" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal">&#43;</a> </div>
                              </div>
                              <!-- end:row -->
                           </div>
                           
                        </div>
                        <!-- end:Collapse -->
                     </div>
                     <!-- end:Widget menu -->
                     <div class="row m-t-30">
                        <div class="col-sm-12 col-xs-12">
                           <div class="panel">
                              <div class="panel-heading">
                                 <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="panel-toggle collapsed" href="#faq1" aria-expanded="false">Related To Shankar Chole-Bhature, Saket</a></h4>
                              </div>
                              <div class="panel-collapse collapse" id="faq1" aria-expanded="false" role="article" style="height: 0px;">
                                 <div class="panel-body">Shankar Chole-Bhature is a Popular North Indian Outlet. They have varities of dishes. Shankar Chole Bhature is a small eatery, with a few chairs and tables inside. They have a proper Inside Kitchen and Provide Quality Food, while Shankar oversees the operations. Once the meal is cooked, they serve on a proper neat and clean plates.</div>
                              </div>
                           </div>
                           <!--//panel-->
                           <div class="panel">
                              <div class="panel-heading">
                                 <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq2"><i class="ti-info-alt"></i>What is the best of Shankar Chole Bhature's?</a></h4>
                              </div>
                              <div class="panel-collapse collapse" id="faq2">
                                 <div class="panel-body">Shankar Chole Bhature has most delicious food in Dilli's Saket, Out of that <strong>Chole-Paneer-Bhature & Raita </strong> are best.</div>
                              </div>
                           </div>
                           <!--//panel-->
                           <div class="panel">
                              <div class="panel-heading">
                                 <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq3"><i class="ti-info-alt"></i>Do Shankar's Prepare Fresh meals?</a></h4>
                              </div>
                              <div class="panel-collapse collapse" id="faq3">
                                 <div class="panel-body">Shankar is Popular For their Food Quality & Taste, They give importance the cleanliness & Freshness of Meals.</div>
                              </div>
                           </div>
                           <!--//panel-->
                           
                           <!--//panel-->
                        </div>
                     </div>
                     <!--/row -->
                  </div>
                  <!-- end:Bar -->
                  <div class="col-xs-12 col-md-12 col-lg-3">
                     <div class="sidebar-wrap">
                        <div class="widget widget-cart">
                           <div class="widget-heading">
                              <h3 class="widget-title text-dark">
                                 Your Shopping Cart
                              </h3>
                              <div class="clearfix"></div>
                           </div>
                           <div class="order-row bg-white">
                              <div class="widget-body">
                                 <div class="title-row">Choose Your Quantity <a href="#"><i class="fa fa-trash pull-right"></i></a></div>
                                 <div class="form-group row no-gutter">
                                    <div class="col-xs-8">
                                       <select class="form-control b-r-0" id="exampleSelect1">
                                          <option>Size Quarter-1pc</option>
                                          <option>Size Half-2pc</option>
                                          <option>Size Full-3pc</option>
                                       </select>
                                    </div>
                                    <div class="col-xs-4">
                                       <input class="form-control" type="number" value="0" id="example-number-input"> 
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="order-row">
                              <div class="widget-body">
                                 <div class="title-row">Lassi <a href="#"><i class="fa fa-trash pull-right"></i></a></div>
                                 <div class="form-group row no-gutter">
                                    <div class="col-xs-8">
                                       <select class="form-control b-r-0">
                                          <option>Size 250ml</option>
                                          <option>Size 400ml</option>
                                          <option>Size 500ml</option>
                                       </select>
                                    </div>
                                    <div class="col-xs-4">
                                       <input class="form-control" value="0" id="quant-input"> 
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end:Order row -->
                           <div class="widget-delivery clearfix">
                              <form>
                                 <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6 b-t-0">
                                    <label class="custom-control custom-radio">
                                    <input id="radio4" name="radio" type="radio" class="custom-control-input" checked=""> <span class="custom-control-indicator"></span> <span class="custom-control-description">Delivery</span> </label>
                                 </div>
                                 <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6 b-t-0">
                                    <label class="custom-control custom-radio">
                                    <input id="radio3" name="radio" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Takeout</span> </label>
                                 </div>
                              </form>
                           </div>
                           <div class="widget-body">
                              <div class="price-wrap text-xs-center">
                                 <p>TOTAL</p>
                                 <h3 class="value"><strong>₹  25,49</strong></h3>
                                 <p>Free Shipping</p>
                                 <button onclick="location.href='checkout.html'" type="button" class="btn theme-btn btn-lg">Checkout</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end:Right Sidebar -->
               </div>
               <!-- end:row -->
            </div>
            <!-- end:Container -->
            
<?php require_once('includes/footer.php'); ?>