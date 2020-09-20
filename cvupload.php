<?php 
	require_once('function/function.php');
	get_header();



	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$cv = $_FILES['cv'];
		$to = "raselhossain3229@gmail.com";
		$headers = "From: $name<$email>";

	   $message="Name : $name \n\n Email : $email \n\n Subject : $subject \n\n Message : $cv";

	   if(mail($to, $subject, $message, $headers)){
	   	echo "mail sent";
	   }else{
	   	echo "try agin letter";
	   }
	}
 ?>

		<div class="title">
			<div class="title-content container">
				<h1 data-aos="zoom-out-down" data-aos-duration="2000">Welcome to cv upload section.</h1>
			</div> <!-- title-content -->
		</div> <!-- title -->

		<!-- cv-upload section -->
		<div class="cv-upload-section" data-aos="flip-left"
     		data-aos-easing="ease-out-cubic"
   		  data-aos-duration="2000">
			<div class="cv-upload-all-content container">
				<div class="row">
					<div class="col-3"></div>
					<div class="col-6">
							<div class="card-header">
								<div class="card-title text-center">
									<h3>cv-upload</h3>
								</div> <!-- card-title -->
							</div>
									
								<form method="POST" action="cvuploadfile.php" enctype="multipart/form-data">
									<div class="row form-group cv-upload pt-2">
										<label for="name" class="col-sm-5 col-md-5 col-lg-3 col-xl-3">Name</label>
										<div class="col-sm-7 col-md-7 col-lg-9 col-xl-9">
											<input type="text" name="name" placeholder="Enter your name" class="form-control">
										</div>
									</div>
									<div class="row form-group cv-upload pt-2">
										<label for="email" class="col-sm-5 col-md-5 col-lg-3 col-xl-3">Email</label>
										<div class="col-sm-7 col-md-7 col-lg-9 col-xl-9">
											<input type="email" name="email" placeholder="Enter your email" class="form-control">
										</div>
									</div>
									<div class="row form-group cv-upload pt-2">
										<label for="subject" class="col-sm-5 col-md-5 col-lg-3 col-xl-3">Subject</label>
										<div class="col-sm-7 col-md-7 col-lg-9 col-xl-9">
											<input type="text" name="subject" placeholder="Enter your subject" class="form-control">
										</div>
									</div>
									<div class="row form-group cv-upload pt-2">
										<label for="file" class="col-sm-5 col-md-5 col-lg-3 col-xl-3">CV</label>
										<div class="col-sm-7 col-md-7 col-lg-9 col-xl-9">
											<input type="file" name="cv" placeholder="" class="">
										</div>
									</div>
									<div class="row form-group pt-2">
										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 containts">Your CV must be PDF file and file size maximum 2 MB.</div>
										
									</div>
									
									<div class="card-footer text-center">
										<input type="submit" name="submit" value="SEND" class="btn btn-primary">
									</div>
									
								</form>
					</div> <!-- col-4 -->
					<div class="col-3"></div>
				</div>
			</div> <!-- cv-upload-all-content -->
		</div> <!-- cv-upload-section -->
	<!-- login section -->


<?php 
	require_once('function/function.php');
	get_footer();
 ?>