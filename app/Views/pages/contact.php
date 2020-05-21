<!DOCTYPE html>
<html lang="en">

<?php 
	$session = \Config\Services::session();
	include_once(APPPATH.'Views/inc/heads.php');
?>
	<body>
	<?php include_once(APPPATH.'Views/inc/header.php');?>
	<!-- Main Banner Starts -->
		<section class="main-banner text-center-xs">
		<!-- Nested Container Starts -->
			<div class="container text-lite-color">
				<h2 class="text-medium">Contact Us</h2>
			</div>
		<!-- Nested Container Ends -->
		</section>
	<!-- Main Banner Ends -->
	<!-- Breadcrumb Starts -->
		<div class="container text-center-xs">
			<ol class="breadcrumb flat">
				<li><a href="<?=base_url('pages/home');?>">Home</a></li>
				<li class="active">Contact Us</li>
			</ol>
		</div>
	<!-- Breadcrumb Ends -->	
	<!-- Main Container Starts -->
		<div class="main-container container text-center-xs">
		<!-- Nested Row Starts -->
			<div class="row">
			<!-- Mainarea Starts -->
				<div class="col-sm-8 col-xs-12">
					<h4 class="main-heading-1 text-spl-color text-uppercase text-normal">Get in Touch</h4>
				<!-- Contact Form Wrap Starts -->
					<div class="contact-form-wrap">
					<!-- Contact Form Starts -->
						<?php 
							if($session->has('thank_msg') && $session->get('thank_msg')==1){
						?>
							<div class="alert alert-success"><strong><center>Our associates will get in touch with you soon</center></strong></div>
						<?php	
							$session->remove('thank_msg');
							}else{
						?>
						
						<form id="main-contact-form" class="" name="" method="post" action="<?=base_url('ContactController/submit');?>" role="form">
						<!-- Nested Row Starts -->
							<div class="row">
							<!-- First Name Filed Starts -->
								<div class="col-sm-6 col-xs-12">
									<div class="form-group">
										<label for="name" class="sr-only">Name: </label>
										<input type="text" class="form-control flat" name="name" id="name" required="required" placeholder="Your Name">
									</div>
								</div>
							<!-- First Name Filed Ends -->
							<!-- E-mail Filed Starts -->
								<div class="col-sm-6 col-xs-12">
									<div class="form-group">
										<label for="email" class="sr-only">Email ID: </label>
										<input type="email" class="form-control flat" name="email" id="email" required="required" placeholder="Your E-mail">
									</div>
								</div>
							<!-- E-mail Filed Ends -->

								<div class="col-sm-6 col-xs-12">
									<div class="form-group">
										<label for="phone" class="sr-only">Mobile No: </label>
										<input type="text" class="form-control flat" name="phone" id="phone" required="required" placeholder="Your Mobile No">
									</div>
								</div>
								<div class="col-sm-6 col-xs-12">
									<div class="form-group">
										<label for="category" class="sr-only">Category: </label>
										<select class="form-control flat" name="category" id="category" placeholder="Your Category" required="required">
											<option value="" class="text-light">-Your Category-</option>
											<option value="Salaried">Salaried</option>
											<option value="Business">Business</option>
											<option value="Professional">Professional</option>
										</select>
									</div>
								</div>

							<!-- Message Filed Starts -->
								<div class="col-xs-12">
									<div class="form-group">
										<label for="message" class="sr-only">Message: </label>
										<textarea class="form-control flat" rows="5" name="message" id="message" required="required" placeholder="Message"></textarea>
									</div>
								</div>
							<!-- Message Filed Ends -->
							<!-- Send Button Starts -->
								<div class="col-xs-12">
									<input type="submit" class="btn btn-secondary btn-big animation" value="Send Message">
								</div>
							<!-- Send Button Ends -->
							</div>
						<!-- Nested Row Ends -->
						</form>
							<?php } ?>
					<!-- Contact Form Ends -->
					</div>
				<!-- Contact Form Wrap Ends -->
				</div>
			<!-- Mainarea Ends -->
			<!-- Spacer For Extra Small Screen Starts -->
				<div class="col-xs-12 hidden visible-xs">
					<p class="spacer-small"></p>
				</div>
			<!-- Spacer For Extra Small Screen Ends -->
			<!-- Sidearea Starts -->
				<div class="col-sm-4 col-xs-12">
				<!-- Headquarters Starts -->
					<div class="sblock-2">
						<h5>Headquarters</h5>
						<ul class="list-unstyled address-list">
							<li class="clearfix">
								<i class="fa fa-map-marker"></i> <strong>Address</strong> :<br>
								 B-65 404 Jaydeep Shantinagar CHSL, Sector 1, Opp. TMT Bus Stop, Mira Road East, Thane 
							</li>
							<li>
								<i class="fa fa-phone"></i> <strong>Phone</strong> :<br>
								+91 8320109552 / 8369082068
							</li>
							<li>
								<i class="fa fa-envelope"></i> <strong>Email</strong> :<br>
								<a href="mailto:incometax@diligentaccountec.co.in">incometax@diligentaccountec.co.in</a>
							</li>
						</ul>
					</div>
				<!-- Headquarters Ends -->
				<!-- Follow Us Starts -->
					<h5 class="sub-heading-2 text-normal">Follow Us</h5>
					<ul class="list-unstyled list-inline contact-sm-links animation">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
					</ul>
				<!-- Follow Us Ends -->
				</div>
			<!-- Sidearea Ends -->
			</div>
		<!-- Nested Row Ends -->
		</div>
	<!-- Main Container Ends -->
	<!-- Map Starts -->
		<div class="contact-page-map"></div>
	<!-- Map Ends -->
    <?php 
	    include_once(APPPATH.'Views/inc/footer.php')
    ?>
	</body>
</html>


<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false"></script>