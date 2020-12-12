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
                          
         
                           <form class="" action="" method="post" enctype="multipart/form-data">
                           <?php login_user(); ?>
                           <div class="container">
                               <div class="form-group">
                              <label for=""><b>Email</b></label>
                              <input type="email" class="form-control" placeholder="Enter Email" name="useremail" required>
                                </div>
                                <div class="form-group">
                              <label for=""><b>Password</b></label>
                              <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                                </div>
                              <div class="clearfix">
                                    <button type="submit" name="submit" class="btn theme-btn">Login</button>
                              </div>
                              <label>
                                 <input type="checkbox" checked="checked" name="remember"> Remember me
                              </label>
                           </div>

                           <!-- <div class="container" style="background-color:#f1f1f1">
                              <button type="button" class="cancelbtn">Cancel</button>
                              <span class="psw">Forgot <a href="#">password?</a></span>
                           </div> -->
                           </form>
<div class="row">
                                   
                                 </div>
                              </form>
                           </div>
                           <!-- end: Widget -->
                        </div>
                        <!-- /REGISTER -->
                     </div>
</div>
</div>
                     <?php require_once('includes/footer.php'); ?>