<?php 
	require_once('function/function.php');
	get_header();

	if(!empty($_POST)){
    $name=htmlentities($_POST['name'],ENT_QUOTES);
    $email=htmlentities($_POST['email'],ENT_QUOTES);

    $insert="INSERT INTO subscriber(subscriber_name,subscriber_email)VALUES('$name','$email')";


    if(!empty($name)){
    	if(!empty($email)){
    		if(mysqli_query($con,$insert)){
					echo "<script>alert('Subscribe sucessfull')</script>";
                  }else{
                    echo "Subscribe failed!";
                  }
    	}else{
    		echo "Enter your email!";
    	}
    }else{
    	echo "Enter your name!";
    }


  }

 ?>

		<div class="title">
			<div class="title-content container">
				<h1 data-aos="zoom-out-down" data-aos-duration="2000">লগইন পেজে আপনাকে স্বাগতম</h1>
			</div> <!-- title-content -->
		</div> <!-- title -->

		<!-- login section -->
		<div class="login-section" data-aos="flip-left"
    			 data-aos-easing="ease-out-cubic"
    			 data-aos-duration="2000">
			<div class="login-all-content container">
				<div class="row">
					<div class="col-3"></div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 p-5">
						<div class="card-body">
							<div class="card-header">
								<div class="card-title text-center">
									<h3>লগইন</h3>
								</div> <!-- card-title -->
							</div>	

								<form method="POST" action="" enctype="multipart/form-data">
									<div class="row form-group login pt-2">
										<label for="name" class="col-sm-5 col-md-5 col-lg-3 col-xl-3">আপনার নাম</label>
										<div class="col-sm-7 col-md-7 col-lg-9 col-xl-9">
											<input type="text" name="name" placeholder="Enter your Name" class="form-control">
										</div>
									</div>
									<div class="row form-group login pt-2">
										<label for="email" class="col-sm-5 col-md-5 col-lg-3 col-xl-3">আপনার ইমেইল</label>
										<div class="col-sm-7 col-md-7 col-lg-9 col-xl-9">
											<input type="email" name="email" placeholder="Enter your email" class="form-control">
										</div>
									</div>
									
									<div class="row form-group pt-2">
										<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 cookis">আপনি যদি নিবন্ধীকরণ না করে থাকেন তবে <a href="register.php">নিবন্ধীকরণ করুন</a></div>
										<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 cookis"><a href="">পাসওয়ার্ড ভুলে গেছেন?</a></div>
									</div>
									
									<div class="card-footer text-center">
										<input class="btn btn-primary" type="submit" name="submit" value="যুক্ত হন">
									</div>
									
								</form>
							</div> <!-- card-body -->
						</div> <!-- col-6 -->
					<div class="col-3"></div>
				</div> <!-- row -->
			</div> <!-- login-all-content -->
		</div> <!-- login-section -->
	<!-- login section -->


<?php 
	require_once('function/function.php');
	get_footer();
 ?>