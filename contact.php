<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php'); ?>
        <div class="page-wrapper">
            <!-- top Links -->
            <div class="top-links">
                <div class="container">
                    <ul class="row links">
                        <li class="col-xs-12 col-sm-3 link-item active"><span>1</span><a href="#">Choose Your Location</a></li>
                        <li class="col-xs-12 col-sm-3 link-item"><span>2</span><a href="#">Choose Restaurant</a></li>
                        <li class="col-xs-12 col-sm-3 link-item"><span>3</span><a href="#">Pick Your favorite food</a></li>
                        <li class="col-xs-12 col-sm-3 link-item"><span>4</span><a href="#">Order and Pay online</a></li>
                    </ul>
                </div>
            </div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <section class="bg-image space-md" data-image-src="images/image01.jpg">
                <div class="profile">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4  col-lg-4 profile-img">
                                <h1 class="font-white">Contact us page</h1> </div>
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
                        <li>Contact</li>
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
                            <?php// send_message(); ?>
                              <form action="" method="post">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                       <label for="">First Name</label>
                                       <input class="form-control" type="text" name="fname" placeholder=" Enter First name" id="example-text-input" maxlength=10 required> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="">Last Name</label>
                                       <input class="form-control" type="text" name="lname" placeholder="Enter Last name" id="example-text-input-2" maxlength=10 required> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="">Email address</label>
                                       <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email" required> <small id="emailHelp" class="form-text text-muted">We"ll never share your email with anyone else.</small> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="">Phone number</label>
                                       <input class="form-control" type="tel" placeholder="Enter Phone" name="phone" id="example-tel-input-3" pattern="[0-9]{4}[0-9]{4}[0-9]{3}" minlength=10 maxlength=11  required> <small class="form-text text-muted">We"ll never share your phone number with anyone else.</small> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="">Subject</label>
                                       <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" maxlength=25 required> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="">Message</label>
                                       <textarea  class="form-control"  id="message" name="messages" rows="10" placeholder="Message *" required></textarea> 
                                    </div>
                                    </div>
                                 <div class="row">
                                    <div class="col-sm-4">
                                       <button href="#" type="submit" name="sendContBtn" class="btn theme-btn">Send Message</button> 
                                       
                                    </div>
                                 </div>
                                 
                              </form>
                              </div>
                              </div>
                           <!-- end: Widget -->
                        </div>
                        <!-- /REGISTER -->
                     </div>
                    </div>
                </div>
            </section>
            <section>
            <div class="container">
                  <div class="row">
                     
                     <div class="col-md-5">
                        <div class="widget">
                           <div class="widget-body">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2cb06e1" data-id="2cb06e1" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-1d18ac8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1d18ac8" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-e6d8b91" data-id="e6d8b91" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-8ba7e01 elementor-widget elementor-widget-heading" data-id="8ba7e01" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h3 class="elementor-heading-title elementor-size-default"><b>Headquarter</b></h3>		</div>
				</div>
				<div class="elementor-element elementor-element-0f550d7 elementor-widget elementor-widget-text-editor" data-id="0f550d7" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"><p>New Delhi<br />South-East Region<br />G-10/93 Sangam Vihar<br />Monday &#8211; Friday, 9:30 am – 11:30 pm<br /><br /><a href="https://g.page/booqs-dot-in?share"><strong>Get Directions</strong></a></p></div>
				</div>
				</div>
				<div class="elementor-element elementor-element-574ca98 elementor-widget elementor-widget-google_maps" data-id="574ca98" data-element_type="widget" data-widget_type="google_maps.default">
				<div class="elementor-widget-container">
			<div align="center" class="elementor-custom-embed"><iframe width ="379" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.9704922977635!2d77.24697051455671!3d28.51053549634399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce11894f1f107%3A0xf3d367352125cf0b!2sBooQs%20Dot%20In!5e0!3m2!1sen!2sin!4v1607592369032!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  </div>		</div>
                
            </div>
						</div>
					</div>
		</div>
								</div>
					</div>
                    </div>
                           <!-- end: Widget -->
                        </div>
                        <!-- /REGISTER -->
                     </div>
                    </div>
                </div>
            </section>   
                <div>
                    <div>  
                        <!-- WHY? -->
                        <div class="col-md-4">
                            <h4>Registration is fast, easy, and free.</h4>
                            <p>Once you"re registered, you can:</p>
                            <ul class="list-check list-unstyled">
                                <li>Buy, sell, and interact with other members.</li>
                                <li>Save your favorite searches and get notified.</li>
                                <li>Watch the status of up to 200 items.</li>
                                <li>View yourinformation from any computer in the world.</li>
                            </ul>
                            <hr>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="panel-toggle collapsed" href="#faq1" aria-expanded="false"><i class="ti-info-alt" aria-hidden="true"></i>Delivery or Dine in?</a></h4> </div>
                                <div class="panel-collapse collapse" id="faq1" aria-expanded="false" role="article" style="height: 0px;">
                                    <div class="panel-body">  We Serve thorugh both ways. Door step Delivery from your Favourite local Resturants and Dine in at your Favourite Resturants. </div>
                                </div>
                            </div>
                            <!-- end:panel -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq2" aria-expanded="true"><i class="ti-info-alt" aria-hidden="true"></i>Contact Customer Support</a></h4>
                                </div>
                                <div class="panel-collapse collapse" id="faq2" aria-expanded="true" role="article">
                                    <div class="panel-body">If you're looking for more help or have a question to ask, please send a message. </div>
                                </div>
                            </div>
                            <!-- end:Panel -->
                        </div>
                        <!-- /WHY? -->
                    </div>
                </div>
                </div>
            </section>     
         </div>
        </div>
 <?php require_once('includes/footer.php'); ?>