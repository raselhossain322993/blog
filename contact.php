<?php 
	require_once('function/function.php');
	get_header();

						if(!empty($_POST)){
						    $message=htmlentities($_POST['message'],ENT_QUOTES);
						    $email=htmlentities($_POST['email'],ENT_QUOTES);


						    $insert="INSERT INTO contact(contact_message,contact_email)VALUES('$message','$email')";

						      if(!empty($message)){
						        if(!empty($email)){
						          if(mysqli_query($con,$insert)){
						            echo "<script>alert('message send sucessfully.')</script>";
						          }else{
						            echo "Your message send failed!";
						          }
						        }else{
						          echo "Please enter your email!.";
						        }
						      }else{
						        echo "Please enter your message!.";
						      }
						  }
 ?>

	<!-- contact header background -->
	<div class="contact-background section-overlay">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="contact-background-caption">
						<h1 data-aos="flip-left"
     						data-aos-easing="ease-out-cubic"
    						 data-aos-duration="2000">যোগাযোগ পেজে আপনাকে স্বাগতম</h1>
					</div> <!-- find-job-caption -->
				</div> <!-- col-lg-12 -->
			</div> <!-- row -->
		</div> <!-- container -->
	</div> <!-- find-job -->
	<!-- contact header background -->

	<div class="google-map" data-aos="fade-up"
     data-aos-duration="3000">
		<div class="google-map-all-content container p-5">
			<div class="row">
				<div class="col-12">
					<div id="googleMap">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1412.6012275873413!2d89.55982150152535!3d24.09274217425839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe77777fb8be45%3A0x68bb65008665f04e!2zMjTCsDA1JzMzLjUiTiA4OcKwMzMnMzMuNCJF!5e1!3m2!1sen!2sbd!4v1588393244310!5m2!1sen!2sbd" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div> <!-- googleMap -->
				</div> <!-- col-12 -->
			</div> <!-- row -->
		</div> <!-- google-map-all-content -->
	</div> <!-- google-map -->

	<!-- get-in-touch -->
	<div class="get-in-touch" data-aos="zoom-in" data-aos="zoom-in-down">
		<div class="get-in-touch-all-content container">
			<div class="row">

				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 get-touch">
					<h1>যোগাযোগ করুন</h1>

					<form action="" method="POST" enctype="multipart/form-data">
						
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<textarea name="message" id="" class="form-control" cols="30" rows="6" placeholder="Enter Your Message" on-focus></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder="Enter Your Email" on-focus>
								</div>
							</div>
						</div>
						
						<div class="form-group text-center pt-4">
							<button type="submit" class="btn btn-danger button-contact">পাঠান</button>
						</div>
					</form>
				</div> <!-- get-touch -->
			</div> <!-- row -->
<hr>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 our-address">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
							<div class="contact-info">
								<span><img src="img/icons8-user-location-50.png" alt=""></i></span>
								<div class="location">
									<h5>সোনাতলা, সাঁথিয়া, পাবনা</h5>
									<h5>ঢাকা ধানমন্ডি 54/1</h5>
									
								</div> <!-- location-info -->
							</div> <!-- contact-info -->
						</div>
						<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
							<div class="contact-info">
								<span><img src="img/icons8-gmail-20.png" alt=""></i></span>
								<div class="location">
									<h5><a href="https://raselhossain3229@gmail.com">raselhossain3229@gmail.com</a></h5>
									<h5><a href="https://raselmiah322993@gmail.com">raselmiah322993@gmail.com</a></h5>
								</div> <!-- location-info -->
							</div> <!-- contact-info -->
						</div>
					</div> <!-- row -->
					<br>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
							<div class="contact-info">
								<span><img src="img/icons8-website-50-3.png" alt=""></span>
								<div class="location">
									<h5><a href="http://dipthofknowledge.epizy.com">www.dipthofknowledge.epizy.com</a></h5>
									<h5><a href="http://raselhossainblog.epizy.com">www.raselhossainblog.epizy.com</a></h5>
								</div> <!-- location-info -->
							</div> <!-- contact-info -->
						</div>
						<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
							<div class="contact-info">
								<span><img src="img/icons8-phone-50.png" alt=""></span>
								<div class="location">
									<h5>01785-237356</h5>
									<h5>01752-507019</h5>
								</div> <!-- location-info -->
							</div> <!-- contact-info -->
						</div>
					</div> <!-- row -->
				</div> <!-- our-address -->

		</div> <!-- get-in-touch-all-content -->
	</div> <!-- get-in-touch -->
	
<?php 
	require_once('function/function.php');
	get_footer();
 ?>