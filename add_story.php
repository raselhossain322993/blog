<?php 
  require_once('function/function.php');
  get_header();


  if(!empty($_POST)){
    $title=$_POST['title'];
    $story=$_POST['story'];
    $tag=$_POST['tag'];
    $name=$_POST['name'];
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
            header('Location:story.php');
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
                            <form method="POST" action="" enctype="multipart/form-data">

                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Title:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="title" required>
                                        </div>
                                      </div>
                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Story:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="story" required>
                                        </div>
                                      </div> 
                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Story Class</label>
                                          <div class="col-sm-7">
                                            <select name="tag" class="form-control" id="">
                                              <option value="all">all</option>
                                              <option value="bangladesh">bangladesh</option>
                                              <option value="sports">sports</option>
                                              <option value="celebrity">celebrity</option>
                                              <option value="election">election</option>
                                              <option value="ict">ict</option>
                                              <option value="corona">corona</option>
                                              <option value="foregin">foregin</option>
                                              <option value="pabna">pabna</option>
                                              <option value="others">others</option>
                                            </select>
                                          </div>
                                      </div>
                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Name:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="name" required>
                                        </div>
                                      </div>
                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Photo:</label>
                                        <div class="col-sm-4">
                                          <input type="file" class="" id="" name="photo" required>
                                        </div>
                                      </div>
                                                                          
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-sm btn-dark submit_btn">Upload Story</button>
                                </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


