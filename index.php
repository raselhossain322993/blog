<?php 
	require_once('function/function.php');
	get_header();

 //count visitor************************************************************
	//new visitor
	$visitor_ip=$_SERVER['REMOTE_ADDR'];


	//cheking uniq visitor
	$query="SELECT * FROM visitor WHERE visitor_ipaddress='$visitor_ip'";
	$visitor=mysqli_query($con,$query);

	if(!$visitor){
		die("Retriving query error <br>".$query);
	}

	$total_visitors=mysqli_num_rows($visitor);
	if($total_visitors<1){
		$query="INSERT INTO visitor (visitor_ipaddress)VALUES('$visitor_ip')";
		$visitor=mysqli_query($con,$query);
	}


	//database query
	$query="SELECT * FROM visitor";
	$visitor=mysqli_query($con,$query);

	if(!$visitor){
		die("Retriving query error <br>".$query);
	}

	$total_visitors=mysqli_num_rows($visitor);

 //count visitor************************************************************

 ?>

	<!-- main-menu -->

	 <!-- slider Area Start-->
        <div class="slider-area">
           <div class="slideWiz" style="width: 100%; height: 600px;"></div>   
        </div> <!-- slider-area -->
        <!-- slider Area End-->
	
	

	<!-- cv sent part -->
	<div class="cv section-overlay">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="cv-caption" data-aos="fade-up"
     					data-aos-anchor-placement="top-center">
     					<!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    						<div id="player"><iframe width="300" height="300" src="https://www.youtube.com/embed/7Gj8WJ48Qhk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
     					<!-- visitor count -->
     					<div class="incremental-counter" data-value="2000"></div>
     					<!-- visitor count --><h1><?php echo $total_visitors ?></h1>

						<p data-aos="flip-right">আমাদের ওয়েবসাইটে যোগদান করুন</p>
						<h2 data-aos="flip-left">আপনি যদি আমাদের ওয়েবসাইটে যোগদান করেন, তবে আপনি চাকরি খুঁজতে পারবেন এবং আপনার গল্প পোস্ট করতে পারবেন এবং সর্বশেষ খবরটি পড়তে পারবেন।</h2>
							
						<div class="cv-btn" data-aos="flip-right">
							<form action="work.php" method="POST" enctype="mulipart/form-data">
								<a href="login.php">যুক্ত</a>
							</form>
						</div>
					</div> <!-- cv-caption -->
				</div> <!-- col-lg-12 -->
			</div> <!-- row -->
		</div> <!-- container -->
	</div> <!-- cv -->
	<!-- cv sent part -->

	<!-- feature-job -->
	<div class="feature-job">
		<div class="feature-all-content container">
			<h1 data-aos="fade-down-right">নতুন চাকরি</h1>
			<h5 data-aos="fade-up-left">আপনার চাকরি নির্বাচন করুন তারপর আবেদন করুন।</h5>
			<div class="row">
				<div class="col-lg-12">
					<div class="feature-content">
						<?php 
                          $sel="SELECT * FROM post_job ORDER BY job_id DESC LIMIT 5";
                          $Q=mysqli_query($con,$sel);
                          while($job=mysqli_fetch_assoc($Q)){
                        ?>

						<div class="feature-item" data-aos="fade-left">
							<div class="row">
								<div class="col-md-3">
									<div class="feature-image">
										<img width="50px" height="40px" src="admin/jobpic/<?= $job['job_pic'];?>" alt="">
									</div> <!-- feature-image -->
								</div> <!-- col-md-3 -->
							<div class="col-md-7">
								<div class="feature-title">
									<h3><a href="jobdetails.php?v= <?= $job['job_id'];?>"><?= $job['job_name'];?></a></h3>
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

						<?php } ?>

					</div> <!-- feature-content -->
				</div> <!-- col-lg-12 -->
			</div> <!-- row -->
		</div> <!-- feature-all-content -->
	</div> <!-- feature-job -->
	<!-- feature-job -->
	

	<!-- Aply process -->
	<div class="process">
		<div class="process-all-content container">
			<h4 data-aos="flip-right">কার্য প্রক্রিয়া</h4>
			<div class="process-title" data-aos="flip-left" data-aos-duration="2000">
				<h1>এটি যেভাবে কাজ করে</h1>
			</div> <!-- process-title -->
			<div class="row">

				<?php 
                   $sel="SELECT * FROM working_process ORDER BY process_id ASC LIMIT 4";
                   $Q=mysqli_query($con,$sel);
                   while($process=mysqli_fetch_assoc($Q)){
                 ?>

				<div class="span_1_of_4 process-span" data-aos="flip-up" data-aos-duration="2000">
					<div class="span-content">
						<span><i class="fa fa-home"></i></span>
						<h2><?php echo $process['process_id'];?>. <?php echo $process['process_working'];?></h2>
						<p class="pragraph"><?php echo $process['process_description'];?></p>
					</div>
				</div> <!-- process-span -->
				<?php } ?>
			</div> <!-- row -->
		</div><!--  process-all-content -->
	</div> <!-- process -->
	<!-- Aply process -->

	

	<!-- doing section -->
	<div class="doing">
		<div class="doing-all-content container">
			<div class="row">
				<?php 
					$sel="SELECT * FROM doing WHERE doing_id";
					$Q=mysqli_query($con,$sel);
					$doing=mysqli_fetch_assoc($Q);
				 ?>
				<div class="span_1_of_2">
					<div class="span-content-1">
						<h4 data-aos="zoom-in" data-aos-duration="2000"><?= $doing['doing_doing'];?></h4>
						<h1 data-aos="zoom-out" data-aos-duration="2000"><?= $doing['doing_title'];?></h1>
						<div class="p1" data-aos="zoom-in-up"><?= $doing['doing_p1'];?></div>
						<div class="p2" data-aos="zoom-in-down"><?= $doing['doing_p2'];?></div>

						<a href="#visitor" class="btn" data-aos="flip-left" data-aos-duration="2000">আমাদের ওয়েবসাইট ভিজিটর</a>
					</div> <!-- span-content-1 -->
				</div> <!-- span_1_of_2 -->

				<div class="span_1_of_2">
					<div class="doing-img" data-aos="flip-left" data-aos-duration="2000">
						<img src="admin/doing/<?= $doing['doing_photo']; ?>" alt="">
					</div> <!-- doing-img -->
					<div class="doing-img-content" data-aos="zoom-in">
						<p>থেকে</p>
						<h2><?= $doing['doing_since'];?></h2>
					</div>
				</div> <!-- span_1_of_2 -->
			</div> <!-- row -->
		</div> <!-- doing-all-content -->
	</div> <!-- doing -->
	<!-- doing section -->
	
	<!-- latest-blog -->
	<div class="latest-blog">
		<div class="latest-blog-all-content container">
			<h4>আমাদের সর্বশেষ ব্লগ</h4>
				<h1>আমাদের সাম্প্রতিক সংবাদ</h1>
			<div class="row">
				<?php 
                   $sel="SELECT * FROM news ORDER BY news_id DESC LIMIT 2";
                   $Q=mysqli_query($con,$sel);
                   while($news=mysqli_fetch_assoc($Q)){
                 ?>
				<div class="span_1_of_2 news-post" data-aos="fade-down-left">
					<div class="latest-blog-content">
							<img width="100%" height="400px" src="admin/news/<?= $news['news_photo'];?>" data-aos="zoom-in" data-aos-duration="2000" alt="">
						<div class="subtitle">
							Propertise
						</div> <!-- subtitle -->

						<div class="time">
							<span><?= $news['news_currenttime'];?></span>
						</div> <!-- time -->

						<div class="title">
							<a href="newsdetails.php?v= <?= $news['news_id'];?>"><?= $news['news_title'];?></a>
						</div> <!-- title -->

						<div class="read-more">
							<a href="<?= $news['news_id'];?>"> আরও পড়ুন >></a>
						</div> <!-- read more -->
					</div> <!-- latest-blog-content -->
				</div> <!-- span_1_of_2 -->
			<?php } ?>

				
			</div> <!-- row -->
		</div> <!-- latest-blog-all-content -->
	</div> <!-- latest-blog -->
	<!-- latest-blog -->

	
<?php 
	require_once('function/function.php');
	get_footer();
 ?>