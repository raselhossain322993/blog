
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
                data-aos-easing="ease-in-sine" data-aos-duration="2000">গল্প পৃষ্ঠায় স্বাগতম</h1><br>
                <a href="#story" class="story-btn" style="background: teal; color: #fff; font-size: 15px; padding: 15px 40px; text-decoration: none;">আপনার গল্প পোস্ট করুন</a>
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
                <h3>গল্পের ট্যাগ</h3>
                <hr>
                
                <div class="select-news-item-1">
                  <div class="all-news-button">
                    <a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" class="activejob" data-filter="all">সব</a>
                    <a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".love">ভালোবাসা</a>
                    <a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".sad">দু: খ</a>
                    <a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".celebrity">উৎসব</a>
                    <a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".funny">হাস্যকর</a>
                    <a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".poetry">কবিতা</a>
                    <a type="button" style="background: teal; color: #fff; padding: 10px 20px; margin: 5px 0px; font-size: 15px;" data-filter=".Prose">গদ্য</a>
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
                <h3>সাম্প্রতিক গল্প</h3>
                <hr>
                          
                <div class="mymixcont">
                        <?php 
                            $sel="SELECT * FROM story ORDER BY story_id DESC LIMIT 10";
                            $Q=mysqli_query($con,$sel);
                            while($story=mysqli_fetch_assoc($Q)){
                        ?>
                <div class="media-post mix <?= $story['story_tag'];?>" style="width: 100%; height: auto; opacity: 1">
                  <img src="story/<?= $story['story_photo'];?>" alt="">
                  <div class="post-title">
                    <a class="mix <?= $story['story_tag'];?>" href="story.php?v= <?= $story['story_id'];?>">
                      <h3><?= $story['story_title'];?></h3>
                    </a>
                    <p><?= $story['story_currenttime'];?></p>
                  </div> <!-- post-title -->
                </div> <!-- media-post -->
              <?php } ?>
              </div> <!-- mymixcont -->
                
              </div> <!-- card-body -->
            </div> <!-- card -->
          </div> <!-- recent-post -->
          <!-- recent-post -->
        </div> <!-- col-news-2 -->

      <!-- col-news-1  -->
      
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-news-1">
          <?php 
            $id=$_GET['v'];
            $sel="SELECT * FROM story WHERE story_id='$id'";
            $Q=mysqli_query($con,$sel);
            $story=mysqli_fetch_array($Q);
          ?>
          <div class="news-img">
            <img src="story/<?= $story['story_photo'];?>" alt="">
          </div> <!-- news-img -->
          <div class="news-title">
            <h1><?= $story['story_title'];?></h1>
          </div> <!-- news-title -->
          
          <div class="news-details">
            <p><?= $story['story_story'];?></p>
          </div> <!-- news-details -->
          <ul class="blog-info-link mt-3 mb-4">
            <li><a href="#"><i class="fas fa-thumbs-up"></i> 06 Like</a></li>
            <li><a href="#replay"><i class="fa fa-comments"></i> 03 Comments</a></li>
          </ul>

        <hr>

        </div> <!-- col-news-1 -->




        

      </div> <!-- row -->
    </div> <!-- newsdetails-all-content -->
  </div> <!-- newsdetails-section -->
  <!-- newsdetails-section -->

<br><br><br>

                  <div class="container">
                    <div class="story-title bg-primary p-5" id="story"><h1 class="text-center">আপনার গল্প যোগ করুন</h1>
                    <p style="color: #fff; text-align: center; font-size: 15px">আপনি যদি আপনার গল্পটি পোস্ট করতে চান তবে ফর্ম পূরণ করুন।</p>
                    </div>
                    <br><br>
<?php 

  if(!empty($_POST)){
    $title=htmlentities($_POST['title'],ENT_QUOTES);
    $story=htmlentities($_POST['story'],ENT_QUOTES);
    $tag=$_POST['tag'];
    $name=htmlentities($_POST['name'],ENT_QUOTES);
    $photo=$_FILES['photo'];
    $photoName='';

    if($photo['name']!=''){
      $photoName='story_'.time().'_'.rand(100000,10000000).'.'.pathinfo($photo['name'],PATHINFO_EXTENSION);
    }

    $insert="INSERT INTO story(story_title,story_story,story_tag,story_name,story_photo)VALUES('$title','$story','$tag','$name','$photoName')";


    if(!empty($title)){
      if(!empty($photo)){
        if(!empty($tag)){
          if(mysqli_query($con,$insert)){
            move_uploaded_file($photo['tmp_name'],'story/'.$photoName);
            echo "succesfully.";
        }else{
          echo "failed!";
        }
        }else{
          echo "Enter your tag";
        }
      }else{
        echo "Select your photo!";
      }
    }else{
      echo "Enter your title!";
    }


  }
 ?>
                    <div class="row">
                        <div class="col-md-12 main_content"> 
                            <form method="POST" action="" enctype="multipart/form-data" class="border-1">

                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-2 col-form-label">গলেপর নাম:</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="" name="title" required>
                                        </div>
                                      </div>
                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-2 col-form-label">গল্প:</label>
                                        <div class="col-sm-10">
                                          <textarea name="story" class="form-control" id="" cols="30" rows="10" required></textarea>
                                        </div>
                                      </div> 
                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-2 col-form-label">গল্পের ট্যাগ</label>
                                          <div class="col-sm-10">
                                            <select name="tag" class="form-control" id="">
                                              <option value="all">all</option>
                                              <option value="love">love</option>
                                              <option value="sad">sad</option>
                                              <option value="celebrity">celebrity</option>
                                              <option value="funny">funny</option>
                                              <option value="poetry">poetry</option>
                                              <option value="poem">poem</option>
                                              <option value="others">others</option>
                                            </select>
                                          </div>
                                      </div>
                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-2 col-form-label">আপনার নাম:</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="" name="name" required>
                                        </div>
                                      </div>
                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-2 col-form-label">ছবি:</label>
                                        <div class="col-sm-4">
                                          <input type="file" class="" id="" name="photo" required>
                                        </div>
                                      </div>
                                                                          
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-sm btn-dark submit_btn">আপনার গল্প পোস্ট করুন</button>
                                </div>
                          </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




  <?php 
  require_once('function/function.php');
  get_footer();
  ?>