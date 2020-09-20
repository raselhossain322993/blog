<?php 
	require_once('function/function.php');
	get_header();

  $id=$_GET['v'];
  $sel="SELECT * FROM post_job WHERE job_id='$id'";
  $Q=mysqli_query($con,$sel);
  $job=mysqli_fetch_array($Q);
 ?>

	<!-- job details background -->
	<div class="jobdetails-background section-overlay">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="jobdetails-background-caption">
						<h1 data-aos="fade-right"
     						data-aos-offset="300"
     						data-aos-easing="ease-in-sine" data-aos-duration="2000">স্বাগতম চাকরি বিবরণ</h1>
					</div> <!-- find-job-caption -->
				</div> <!-- col-lg-12 -->
			</div> <!-- row -->
		</div> <!-- container -->
	</div> <!-- find-job -->
	<!-- job details background -->
	<!-- jobdetails-section -->
	<div class="jobdetails-section">
		<div class="jobdetails-all-content container">
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
					<div class="col-number-1">
					<div class="feature-item" data-aos="zoom-out-down" data-aos-duration="2000">
							<div class="row">
								<div class="col-md-3">
									<div class="feature-image">
										<img width="40px" height="40px" src="admin/jobpic/<?= $job['job_pic'];?>" alt="">
									</div> <!-- feature-image -->
								</div> <!-- col-md-3 -->
							<div class="col-md-7">
								<div class="feature-title">
									<h3><a href=""><?= $job['job_name'];?></a></h3>
								</div> <!-- feature-title -->
								<div class="feature-left-content">		
								<div class="feature-subtitle">
									<ul>
										<li class="company-name"><?= $job['job_company'];?></li>
										<li class="address"><?= $job['job_location'];?></li>
										<li class="salary"><?= $job['job_salary'];?></li>
									</ul>

								</div> <!-- feature-subtitle -->
							</div> <!-- feature-left-content -->
							</div> <!-- col-md-9 -->
							<div class="col-md-2">
								<div class="feature-right-content">
									<div class="catagory">
										<?= $job['job_type'];?>
									</div> <!-- catagory -->
									<div class="time">
										<span><?= $job['job_currenttime'];?></span>
									</div> <!-- time -->
								</div> <!-- feature-right-content -->
							</div> <!-- col-md-3 -->
						</div> <!-- row -->
						</div> <!-- feature-item -->
						<div class="row">
							<div class="job-description" data-aos="fade-up"
     data-aos-duration="3000">
								<h3>চাকরির বিবরণ</h3>
								<p><?= $job['job_description'];?></p>
							</div> <!-- job-description -->
						</div> <!-- row -->

						<div class="row">
							<div class="job-required" data-aos="fade-up"
     data-aos-duration="3000">
								<h3>প্রয়োজনীয় জ্ঞান, দক্ষতা এবং ক্ষমতা</h3>

								<ul>
									<?php 
										$sel="SELECT * FROM post_job WHERE job_id='$id'";
  										$Q=mysqli_query($con,$sel);
  										$job=mysqli_fetch_array($Q);
									 ?>
                                   <li><?= $job['job_skill'];?></li>
                                   
                               </ul>
							</div> <!-- job-required -->
						</div> <!-- row -->

						<div class="row">
							<div class="job-required" data-aos="fade-up"
     data-aos-duration="3000">
								<h3>শিক্ষা + অভিজ্ঞতা</h3>
								
								 <ol>
								 	<?php 
										$sel="SELECT * FROM post_job WHERE job_id='$id'";
  										$Q=mysqli_query($con,$sel);
  										$job=mysqli_fetch_array($Q);
									 ?>
                                   <li><?= $job['job_experience'];?></li>
                                   
                               </ol>
							</div> <!-- job-required -->
						</div> <!-- row -->
				</div> <!-- col-number-1 -->
				</div>

				<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
					<div class="col-number-2">
						<div class="row">	
							<div class="card-body job-overview" data-aos="flip-right">
								<p>চাকরির ওভারভিউ</p>
								<ul>
									<li>Posted date : <span><?= $job['job_currenttime'];?></span></li>
									<li>Location : <span><?= $job['job_location'];?></span></li>
									<li>Vacancy : <span><?= $job['job_vacancy'];?></span></li>
									<li>Salary : <span><?= $job['job_salary'];?></span></li>
									<li>Aplication Last Date : <span><?= $job['job_lastdate'];?></span></li>
								</ul>
								
								<div class="apply-button">
									<a href="cvupload.php">আবেদন</a>
								</div> <!-- apply-button -->
							
							</div><!--  card-body -->
						
						<div class="company-information">
							<h4 data-aos="fade-left">কোম্পানির তথ্য</h4>
							<div class="company-name" data-aos="fade-right">
								<h5><?= $job['job_company'];?></h5>
							</div>
							<p data-aos="fade-left"><?= $job['job_companydescription'];?></p>
							<ul data-aos="zoom-in-down">
								<li>Name : <span><?= $job['job_company'];?></span></li>
								<li>Web : <span><?= $job['job_website'];?></span></li>
								<li>Email : <span><?= $job['job_email'];?></span></li>
							</ul>
						</div>

					</div> <!-- row -->
					</div> <!-- col-number-2 -->
				</div> <!-- col-number-2 -->
			</div> <!-- row -->
		</div> <!-- jobdetails-all-content -->
	</div> <!-- jobdetails-section -->
	<!-- jobdetails-section -->


<?php 
	require_once('function/function.php');
	get_footer();
 ?>