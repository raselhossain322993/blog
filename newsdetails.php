
<?php 
	require_once('function/function.php');
	get_header();


 ?>
 <!-- main-menu -->

	<!-- newsdetails background -->
	<div class="newsdetails-background section-overlay">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="newsdetails-background-caption">
						<h1 data-aos="fade-right"
     						data-aos-offset="300"
     						data-aos-easing="ease-in-sine" data-aos-duration="2000">স্বাগতম সংবাদ বিবরণ</h1>
					</div> <!-- find-job-caption -->
				</div> <!-- col-lg-12 -->
			</div> <!-- row -->
		</div> <!-- container -->
	</div> <!-- find-job -->
	<!-- newsdetails background -->
	
	<!-- newsdetails-section -->
	<div class="newsdetails-section">
		<div class="newsdetails-all-content container">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-news-2">

					<!-- tag-post -->
					<div class="tag-post">
						<div class="">
							<div class="card-body">
								<h3>নিউজ ট্যাগ</h3>
								<hr>
								
								<div class="select-news-item-1">
									<div class="all-news-button">
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" class="activejob" data-filter="all">সব</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".bangladesh">বাংলাদেশ</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".sports">খেলা</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".celebrity">উৎসব</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".entertainment">নির্বাচন</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".ict">আইসিটি</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".corona">করোনা</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".international">আন্তর্জাতিক</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".pabna">পাবনা</a>
										<a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".others">অন্যান্য</a>
									</div>
								</div> <!-- select-job-item-1 -->
							</div> <!-- card-body -->
						</div> <!-- card -->
					</div> <!-- tag-post -->
					<!-- tag-post -->

					<!-- recent-post -->
					<div class="recent-post">
						<div class="">
							<div class="card-body">
								<h3>সাম্প্রতিক খবর</h3>
								<hr>
                     			
                     			<div class="mymixcont">
								<?php 
                   					$sel="SELECT * FROM news ORDER BY news_id DESC LIMIT 10";
                   					$Q=mysqli_query($con,$sel);
                   					while($news=mysqli_fetch_assoc($Q)){
                 				?>
								<div class="media-post mix <?= $news['news_tag'];?>" style="width: 100%; height: auto; opacity: 1">
									<img src="admin/news/<?= $news['news_photo'];?>" alt="">
									<div class="post-title">
										<a class="mix <?= $news['news_tag'];?>" href="newsdetails.php?v= <?= $news['news_id'];?>">
											<h3><?= $news['news_title'];?></h3>
										</a>
										<p><?= $news['news_currenttime'];?></p>
									</div> <!-- post-title -->
								</div> <!-- media-post -->
							<?php } ?>
							</div> <!-- mymixcont -->
								
							</div> <!-- card-body -->
						</div> <!-- card -->
					</div> <!-- recent-post -->
					<!-- recent-post -->
				</div> <!-- col-news-2 -->

			<!-- col-news-1	 -->
			
				<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-news-1">
					<?php 
						  $id=$_GET['v'];
						  $sel="SELECT * FROM news WHERE news_id='$id'";
						  $Q=mysqli_query($con,$sel);
						  $news=mysqli_fetch_array($Q);
					 ?>
					<div class="news-img">
						<img src="admin/news/<?= $news['news_photo'];?>" alt="">
					</div> <!-- news-img -->
					<div class="news-title">
						<h1><?= $news['news_title'];?></h1>
					</div> <!-- news-title -->
					
					<div class="news-details">
						<p><?= $news['news_news'];?></p>
					</div> <!-- news-details -->
					

					<!-- people-comments -->
					<div class="people-comments">
						
							<div class="comments-number"><h4>মন্তব্যসমূহ</h4></div>
								<?php 
									$sel="SELECT * FROM comment ORDER BY comment_id DESC LIMIT 2";
									$query=mysqli_query($con,$sel);
									while($comment=mysqli_fetch_assoc($query)){
								 ?>
								<div class="comments-item">
									<div class="row">
										<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
											<div class="comments-img">
												<img src="admin/images/avatar.png" alt="">
											</div> <!-- comments-img -->
										</div>
										<div class="col-xl-10 col-lg-10 col-md-8 col-sm-8">
											
											<div class="comment-user">
												<h3>
												<?php echo $comment['comment_email']; ?>
												</h3>
											</div> <!-- comment-user -->
											<div class="comments-details">
												<h5>
												<?php echo $comment['comment_comment']; ?>
												</h5>
											</div><br><br> <!-- comments-details -->
											<div class="comments-time">
												<span>
												<?php echo $comment['comment_time']; ?>
												</span>
											</div> <!-- comments-time -->
											<div class="comments-replay">
												<a href="#replay">Replay</a>
											</div> <!-- comments-replay -->
										</div>
									</div> <!-- row -->
								</div> <!-- comments-item -->
							<?php } ?>
					</div> <!-- people-comments -->

				<hr>

				<!-- comments-replay -->
				<div class="row">
					<div class="comments-replay" id="comment">
						<h4 class="pb-3">নিউজ মন্তব্য ফরম</h4>
						<?php 
							if(!empty($_POST)){
						    $email=htmlentities($_POST['email'],ENT_QUOTES);
						    $comment=htmlentities($_POST['comment'],ENT_QUOTES);


						    $insert="INSERT INTO comment(comment_email,comment_comment)VALUES('$email','$comment')";

						      if(!empty($email)){
						        if(!empty($comment)){
						          if(mysqli_query($con,$insert)){
						            echo "Your comment successfull..! if you see your comment please reload website.";
						          }else{
						            echo "comment failed!";
						          }
						        }else{
						          echo "Please enter your comment!.";
						        }
						      }else{
						        echo "Please enter your email!.";
						      }
						  }
						 ?>
						<form action="" method="POST" enctype="multipart/form-data">
							
							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<input type="text" name="email" class="form-control" placeholder="Enter Your Emeil" on-focus>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<textarea name="comment" id="" class="form-control" cols="30" rows="6" placeholder="Comment" on-focus></textarea>
									</div>
								</div>
							</div>
							<div class="form-group pt-4">
								<button type="submit" class="btn btn-danger button-contact">MESSAGE</button>
							</div>
						</form>
					</div> <!-- comments-replay -->
					<div class="clear-fix"></div>	

				</div> <!-- row -->
				<!-- comments-replay -->
				</div> <!-- col-news-1 -->




				

			</div> <!-- row -->
		</div> <!-- newsdetails-all-content -->
	</div> <!-- newsdetails-section -->
	<!-- newsdetails-section -->


	<?php 
	require_once('function/function.php');
	get_footer();
 	?>