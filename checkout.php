<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php'); ?>
        <div class="page-wrapper">
            <div class="top-links">
                <div class="container">
                    <ul class="row links">
                        <li class="col-xs-12 col-sm-3 link-item active"><span>1</span><a href="index-2.php">Choose Your Location</a></li>
                        <li class="col-xs-12 col-sm-3 link-item active"><span>2</span><a href="restaurants.php">Choose Restaurant</a></li>
                        <li class="col-xs-12 col-sm-3 link-item active"><span>3</span><a href="profile.php">Pick Your favorite food</a></li>
                        <li class="col-xs-12 col-sm-3 link-item"><span>4</span><a href="checkout.php">Order and Pay online</a></li>
                    </ul>
                </div>
            </div>
            <div class="container m-t-30">
                <div class="widget clearfix">
                    <!-- /widget heading -->
                    <div class="widget-heading">
                        <h3 class="widget-title text-dark">
                                        Cart summary
                                    </h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-body">
                        <form method="post" action="#">
                            <div class="row">
                                <div class="col-sm-6 margin-b-30">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>First Name*</label>
                                                <input type="text" class="form-control" placeholder="Abhi" required> </div>
                                            <!--/form-group-->
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Last Name*</label>
                                                <input type="text" class="form-control" placeholder="Karn" required> </div>
                                            <!--/form-group-->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Country*</label>
                                                <select class="form-control">
                                                    <option>India</option>
                                                    
                                                </select>
                                            </div>
                                            <!--/form-group-->
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Company Name</label>
                                                <input type="text" class="form-control" placeholder="Go Meal"> </div>
                                            <!--/form-group-->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Full Address*</label>
                                                <input type="text" class="form-control" placeholder="120, Vasant Kunj.." maxlength=50 required> </div>
                                            <!--/form-group-->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>City / State*</label>
                                                <input type="text" class="form-control" placeholder="Delhi" required> </div>
                                            <!--/form-group-->
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Zip/ Postal Code*</label>
                                                <input type="text" class="form-control" placeholder="110062" pattern="[0-9]{6}" required> </div>
                                            <!--/form-group-->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email Address*</label>
                                                <input type="email" class="form-control" placeholder="Abhi@gmail.com" required> </div>
                                            <!--/form-group-->
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Phone*</label>
                                                <input type="int" class="form-control" placeholder="9650039346" pattern="[0-9]{4}[0-9]{4}[0-9]{3}" minlength=10 maxlength=11 required> </div>
                                            <!--/form-group-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="cart-totals margin-b-20">
                                        <div class="cart-totals-title">
                                            <h4>Cart Summary</h4> </div>
                                        <div class="cart-totals-fields">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Cart Subtotal</td>
                                                        <td>₹ 29.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shipping &amp; Handling</td>
                                                        <td> ₹ 2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-color"><strong>Total</strong></td>
                                                        <td class="text-color"><strong>₹ 31.00</strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--cart summary-->
                                    <div class="payment-option">
                                        <ul class=" list-unstyled">
                                            <li>
                                                <label class="custom-control custom-radio  m-b-20">
                                                    <input id="radioStacked1" name="radio-stacked" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Payment on delivery</span>
                                                    <br> <span>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span> </label>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-radio  m-b-10">
                                                    <input name="radio-stacked" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Paypal <img src="images/paypal.jpg" alt="" width="90"></span> </label>
                                            </li>
                                        </ul>
                                        <p class="text-xs-center"> <a href="#" class="btn btn-outline-success btn-block">Pay now</a> </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <?php require_once('includes/footer.php'); ?>