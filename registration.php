<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php'); ?>
         <div class="page-wrapper">
            <div class="breadcrumb">
               <div class="container">
                  <ul>
                     <li><a href="#" class="active">Home</a></li>
                     <li><a href="#">Search results</a></li>
                     <li>Profile</li>
                  </ul>
               </div>
            </div>
            <section class="contact-page inner-page">
               <div class="container">
                  <div class="row">
                     <!-- REGISTER -->
                     <div class="col-md-8">
                        <div class="widget">
                           <div class="widget-body">
                           <?php user_signup(); ?>
                              <form action="" method="post">
                                    <div class="row">
                                    <div class="form-group col-sm-6">
                                       <label for="">First Name</label>
                                       <input class="form-control" type="text" name="fname" placeholder=" Enter First name" id="example-text-input" required> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="">Last Name</label>
                                       <input class="form-control" type="text" name="lname" placeholder="Enter Last name" id="example-text-input-2" required> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="">Email address</label>
                                       <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="useremail" placeholder="Enter email" required> <small id="emailHelp" class="form-text text-muted">We"ll never share your email with anyone else.</small> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="">Phone number</label>
                                       <input class="form-control" type="tel" placeholder="Enter Phone" pattern="[0-9]{4}[0-9]{4}[0-9]{3}" minlength=10 maxlength=11 name="mnum" id="example-tel-input-3" required> <small class="form-text text-muted">We"ll never share your phone no. with anyone else.</small> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="">Password</label>
                                       <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password" id="exampleInputPassword1" placeholder="Password" required> <small class="form-text text-muted">Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters.</small> 
                                    </div>
                                   
                                 <div class="row">
                                    <div class="col-sm-4">
                                       <button href="#" name="Signupbtn" class="btn theme-btn">Register</button> 
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <!-- end: Widget -->
                        </div>
                        <!-- /REGISTER -->
                     </div>
                     <!-- WHY? -->
                     <div class="col-md-4">
                        <h4>Registration is fast, easy, and free.</h4>
                        <p>Once you"re registered, you can:</p>
                        <hr>
                        <img src="images/Local.png" alt="" class="img-fluid">
                        <p></p>
                        <div class="panel">
                           <div class="panel-heading">
                              <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="panel-toggle collapsed" href="#faq1" aria-expanded="false"><i class="ti-info-alt" aria-hidden="true"></i>Order Your Favourite Food Here.</a></h4>
                           </div>
                           <div class="panel-collapse collapse" id="faq1" aria-expanded="false" role="article" style="height: 0px;">
                              <div class="panel-body"> All Local Cuisne are available here. Tasty and Quality dishes Guranteed. </div>
                           </div>
                        </div>
                        <!-- end:panel -->
                        <div class="panel">
                           <div class="panel-heading">
                              <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq2" aria-expanded="true"><i class="ti-info-alt" aria-hidden="true"></i>Delivery or Dine in?</a></h4>
                           </div>
                           <div class="panel-collapse collapse" id="faq2" aria-expanded="true" role="article">
                              <div class="panel-body"> We Serve thorugh both ways. Door step Delivery from your Favourite local Resturants and Dine in at your Favourite Resturants. </div>
                           </div>
                        </div>
                        <!-- end:Panel -->
                        <h4 class="m-t-20">Contact Customer Support</h4>
                        <p> If you're looking for more help or have a question to ask, please </p>
                        <p> <a href="contact.php" class="btn theme-btn m-t-15">contact us</a> </p>
                     </div>
                     <!-- /WHY? -->
                  </div>
               </div>
            </section>
            
            <?php require_once('includes/footer.php'); ?>