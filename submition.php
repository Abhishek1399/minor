<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php'); ?>
         <div class="page-wrapper">
            <div class="breadcrumb">
               <div class="container">
                  <ul>
                     <li><a href="index.php" class="active">Home</a></li>
                     <li><a href="#">Search results</a></li>
                     <li>Profile</li>
                  </ul>
                  <div class="title text-xs-center m-b-30">
                    <h2>Register Your Self as Restaurant</h2>
                    <p class="lead">The easiest way to sell your food</p>
                </div>
               </div>
            </div>
            <section class="contact-page inner-page">
               <div class="container">
                  <div class="row">
                     <!-- REGISTER -->
                     <div class="col-md-8">
                        <div class="widget">
                           <div class="widget-body">
                              <form>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Full Name</label>
                                    <input class="form-control" type="text" value="" name="username" placeholder="Your Name" id="example-text-input" Maxlenth =20 required> 
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Outlet Name</label>
                                    <input class="form-control" type="text" value="" name="outletname" placeholder="Restaurant Name" id="example-text-input" Maxlenth =20 required> 
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" required> <small class="form-text text-muted">We"ll never share your email with anyone else.</small> 
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Phone number</label>
                                    <input class="form-control" type="tel" value="" name="phone" placeholder="Enter Phone" pattern="[0-9]{4}[0-9]{4}[0-9]{3}" minlength=10 maxlength=11 id="example-tel-input"> <small class="form-text text-muted">We"ll never share your phone number with anyone else.</small> 
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">URL</label>
                                    <input class="form-control" type="url" value="" name="url" placeholder="http://GoMeal.com" id="example-url-input"> 
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Open Hours</label>
                                    <input class="form-control" value="" name="ohours"> 
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Closing Hours</label>
                                    <input class="form-control" name="chours" value=""> 
                                 </div>
                                 <div class="form-group">
                                    <label>Open days</label>
                                    <br>
                                    <div class="btn-group" data-toggle="buttons">
                                       <label class="btn theme-btn active">
                                       <input type="checkbox" checked>Mon </label>
                                       <label class="btn theme-btn active">
                                       <input type="checkbox"> Tus </label>
                                       <label class="btn theme-btn active">
                                       <input type="checkbox"> Wen </label>
                                       <label class="btn theme-btn active">
                                       <input type="checkbox"> Thu </label>
                                       <label class="btn theme-btn active">
                                       <input type="checkbox"> Fri </label>
                                       <label class="btn btn-secondary">
                                       <input type="checkbox"> Sat </label>
                                       <label class="btn btn-secondary">
                                       <input type="checkbox"> San </label>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleSelect1">Select no. Of Days</label>
                                    <select class="form-control" name="ndays" id="exampleSelect1" required>
                                       <option>1</option>
                                       <option>2</option>
                                       <option>3</option>
                                       <option>4</option>
                                       <option>5</option>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleTextarea">Write About Your Restaurant</label>
                                    <textarea class="form-control" name="about" id="exampleTextarea" rows="3" required></textarea>
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputFile">Upload Your Outlet's photo</label>
                                    <input type="file" class="form-control-file" name="photo" id="exampleInputFile" aria-describedby="fileHelp" required> 
                                 </div>
                                 <div class="custom-controls-stacked m-b-20">
                                    <label class="custom-control custom-radio  m-b-10">
                                    <input id="radioStacked1"  name="prem" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Register as Premium Member</span> </label>
                                    <label class="custom-control custom-radio">
                                    <input id="radioStacked2" name="norm" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Register as Normal Member</span> </label>
                                 </div>
                                 <br><br><br>
                                                                
                                 <div>
                                   
                                 <p><button type="submit" name="restaurantbtn" class="btn theme-btn">Submit</button></p>
                                 
                                 </div>
                              </form>
                           </div>
                        </div>
                        <!-- end: Widget -->
                     </div>
                     <!-- /REGISTER -->
                     <!-- WHY? -->
                     <div class="col-md-4">
                        <h4>Registration is fast, easy, and free.</h4>
                        <p>Once you"re registered, you can:</p>
                        <hr>
                        <img src="images/Local.png" alt="" class="img-fluid">
                        <p></p>
                        <div class="panel">
                           <div class="panel-heading">
                              <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="panel-toggle collapsed" href="#faq1" aria-expanded="false"><i class="ti-info-alt" aria-hidden="true"></i>Delivery or Dine in?</a></h4>
                           </div>
                           <div class="panel-collapse collapse" id="faq1" aria-expanded="false" role="article" style="height: 0px;">
                              <div class="panel-body"> We Serve thorugh both ways. Door step Delivery from your Favourite local Resturants and Dine in at your Favourite Resturants. </div>
                           </div>
                        </div>
                        <!-- end:panel -->
                        <div class="panel">
                           <div class="panel-heading">
                              <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq2" aria-expanded="true"><i class="ti-info-alt" aria-hidden="true"></i>Contact Customer Support</a></h4>
                           </div>
                           <div class="panel-collapse collapse" id="faq2" aria-expanded="true" role="article">
                              <div class="panel-body"> If you're looking for more help or have a question to ask, please.</div>
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