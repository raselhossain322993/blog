<?php 
	require_once('function/function.php');
	get_header();
	
 ?>
	
	<!-- cv sent part -->
	<div class="find-job section-overlay">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="find-job-caption">
						<h1 data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">আপনার চাকরি সন্ধান করুন</h1>
					</div> <!-- find-job-caption -->
				</div> <!-- col-lg-12 -->
			</div> <!-- row -->
		</div> <!-- container -->
	</div> <!-- find-job -->
	<!-- find-job sent part -->
	
	<!-- filter-job -->
	<div class="filter-job">
		<div class="filter-job-all-content container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xl-2">
					<div class="filter-title-1">
						<span><i class="fa fa-home"></i></span> <h4>আপনার চাকরির ট্যাগ নির্বাচন করুন</h4>
					</div> <!-- filter-title -->
				</div>
				<div class="col-lg-10 col-md-10 col-sm-10 col-xl-10">
							<div class="dropdown-catagory-1 p-2">

								<div class="select-job-item-1">
									<div class="all-job-button">
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" class="activejob" data-filter="all">সব</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".webdesign">ওয়েব ডিজাইন</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".webdevelopment">ওয়েব ডেভেলপমেন্ট</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".graphics">গ্রাফিক্র</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".marketing">মার্কেটিং</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".dataentry">ডাটা এন্ট্রি</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".maintenance">মেইন্টেন্যন্স</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".teachers">শিক্ষকতা</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".contentwriting">কন্টেন্ট রাইটিং</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".engineering">ইন্জিনিয়ারিং</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".defence">সৌনিক</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".company">কম্পানী</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".others">অন্যান্য</a>
									</div>
								</div> <!-- select-job-item-1 -->
							</div> <!-- dropdown-catagory -->
				</div> <!-- col_all -->
			</div> <!-- row -->
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                     <div class="mymixcont">

						<?php 
                          $sel="SELECT * FROM post_job ORDER BY job_id DESC LIMIT 5";
                          $Q=mysqli_query($con,$sel);
                          while($job=mysqli_fetch_assoc($Q)){
                        ?>
                     <div class="mix <?= $job['job_class'];?>" style="width: 100%; height: auto; opacity: 1">
					<div class="job-item">
							<div class="row">
								<div class="col-md-3">
									<div class="job-image">
										<img width="50px" height="40px" src="admin/jobpic/<?= $job['job_pic'];?>" alt="">
									</div> <!-- job-image -->
								</div> <!-- col-md-3 -->
							<div class="col-md-6">
								<div class="job-title">
									<h3 class=""><a href="jobdetails.php?v= <?= $job['job_id'];?>"><?= $job['job_name'];?></a></h3>
								</div> <!-- job-title -->
								<div class="job-left-content">		
								<div class="job-subtitle">
									<ul>
										<li class="company-name"><?= $job['job_company'];?></li>
										<li class="address"><?= $job['job_location'];?></li>
										<li class="salary"><?= $job['job_salary'];?></li>
									</ul>

								</div> <!-- job-subtitle -->
							</div> <!-- job-left-content -->
							</div> <!-- col-md-9 -->
							<div class="col-md-3">
								<div class="job-right-content">
									<div class="type">
										<?= $job['job_type'];?>
									</div> <!-- catagory -->
									<div class="time">
										<span><?= $job['job_currenttime'];?></span>
									</div> <!-- time -->
								</div> <!-- job-right-content -->
							</div> <!-- col-md-3 -->
						</div> <!-- row -->
						</div> <!-- job-item -->
						</div> <!-- job class -->
							<?php } ?>
					</div> <!-- mymixcont -->

				</div> <!-- col-9 -->
			</div> <!-- row -->
		</div> <!-- filter-job-all-content -->
	</div> <!-- filter-job -->
	<!-- filter-job -->


<?php 
	require_once('function/function.php');
	get_footer();
 ?>