<?php 
	require_once('function/function.php');
	get_header();

	if(!empty($_POST)){
    $username=htmlentities($_POST['username'],ENT_QUOTES);
    $email=htmlentities($_POST['email'],ENT_QUOTES);
    $number=htmlentities($_POST['number'],ENT_QUOTES);
    $password=htmlentities($_POST['password'],ENT_QUOTES);
    $repassword=htmlentities($_POST['repassword'],ENT_QUOTES);
    $photo=$_FILES['photo'];
    $photoName='';

    if($photo['name']!=''){
      $photoName='register_'.time().'_'.rand(100000,10000000).'.'.pathinfo($photo['name'],PATHINFO_EXTENSION);
    }

    $insert="INSERT INTO register(register_username,register_email,register_number,register_password,register_photo)VALUES('$username','$email','$number','$password','$photoName')";


    if(!empty($username)){
      if(!empty($email)){
        if(!empty($number)){
            if(!empty($password)){
                if(!empty($photo)){
                  if($password===$repassword){
                    if(mysqli_query($con,$insert)){
                      move_uploaded_file($photo['tmp_name'],'admin/register/'.$photoName);
                      echo "Registration succesfully.";
                  }else{
                    echo "Registration failed!";
                  }
                }else{
                  echo "Your password didn't match!";
                }
              }else{
                echo "Please select your photo!";
              }
            }else{
              echo "Enter your password!";
            }
        }else{
          echo "Enter your number!";
        }
      }else{
        echo "Enter your email!";
      }
    }else{
      echo "Enter your username!";
    }


  }
 ?>


		<div class="title">
			<div class="title-content container">
				<h1 data-aos="zoom-out-down" data-aos-duration="2000">নিবন্ধীকরণ পেজে আপনাকে স্বাগতম</h1>
			</div> <!-- title-content -->
		</div> <!-- title -->

		<!-- registration section -->
		<div class="registration-section p-4">
			<div class="registration-all-content container">
				<div class="row">
					<div class="col-3"></div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
							<div class="card-header">
								<div class="card-title text-center">
									<h3>নিবন্ধীকরণ</h3>
								</div> <!-- card-title -->
							</div>
							<div class="card-body">
								
								<form method="POST" action="" enctype="multipart/form-data">
									<div class="row form-group registration pt-2">
										<label for="username" class="col-sm-5 col-md-5 col-lg-3 col-xl-3">আপনার নাম</label>
										<div class="col-sm-7 col-md-7 col-lg-9 col-xl-9">
											<input type="text" name="username" placeholder="Enter your Username" class="form-control" autofocus>
										</div>
									</div>
									<div class="row form-group registration pt-2">
										<label for="email" class="col-sm-5 col-md-5 col-lg-3 col-xl-3">আপনার ইমেইল</label>
										<div class="col-sm-7 col-md-7 col-lg-9 col-xl-9">
											<input type="email" name="email" placeholder="Enter your email" class="form-control" autofocus>
										</div>
									</div>
									<div class="row form-group registration pt-2">
										<label for="mobile" class="col-sm-5 col-md-5 col-lg-3 col-xl-3">মোবাইল নম্বর</label>
										<div class="col-sm-7 col-md-7 col-lg-9 col-xl-9">
											<input type="number" name="number" placeholder="Enter your mobile (optional)" class="form-control" autofocus>
										</div>
									</div>
									<div class="row form-group registration pt-2">
										<label for="password" class="col-sm-5 col-md-5 col-lg-3 col-xl-3">পাসওয়ার্ড</label>
										<div class="col-sm-7 col-md-7 col-lg-9 col-xl-9">
											<input type="password" name="password" placeholder="Enter your password" class="form-control" autofocus>
										</div>
									</div>
									<div class="row form-group registration pt-2">
										<label for="password" class="col-sm-5 col-md-5 col-lg-3 col-xl-3">পুনরায় পাসওয়ার্ড</label>
										<div class="col-sm-7 col-md-7 col-lg-9 col-xl-9">
											<input type="password" name="repassword" placeholder="Enter your confirm password" class="form-control" autofocus>
										</div>
									</div>
									<div class="row form-group registration pt-2">
										<label for="photo" class="col-sm-5 col-md-5 col-lg-3 col-xl-3">ছবি</label>
										<div class="col-sm-7 col-md-7 col-lg-9 col-xl-9">
											<input type="file" name="photo" placeholder="" class="" autofocus>
										</div>
									</div>
									<div class="row form-group pt-2">
										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 cookis">আপনি যদি নিবন্ধীকরণ করে থাকেন তবে <a href="login.php">লগইন</a></div>
										
									</div>
									
									<div class="card-footer text-center">
										<button type="submit" class="btn btn-primary btn-lg">নিবন্ধীকরণ</button>
									</div>
									
								</form>
							</div> <!-- card-body -->
					</div> <!-- col-6 -->
					<div class="col-3"></div>
				</div> <!-- row -->
			</div> <!-- registration-all-content -->
		</div> <!-- registration-section -->
	<!-- registration section -->


<?php 
	require_once('function/function.php');
	get_footer();
 ?>