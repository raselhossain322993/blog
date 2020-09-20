<?php 
	require_once('function/function.php');

	if(!empty($_POST)){
		$name=htmlentities($_POST['name'],ENT_QUOTES);
		$email=htmlentities($_POST['email'],ENT_QUOTES);
		$subject=htmlentities($_POST['subject'],ENT_QUOTES);
		$cv=$_FILES['cv'];
		$cvs='';

		if($cv['name']!=''){
			$cvs='cv_'.time().'_'.rand(10000,100000).'.'.pathinfo($cv['name'], PATHINFO_EXTENSION);
		}

		$insert="INSERT INTO cv_upload(cv_name,cv_email,cv_subject,cv_file) VALUES('$name','$email','$subject','$cvs')";

		if(!empty($name)){
			if(!empty($email)){
				if(!empty($cv)){
					if(mysqli_query($con,$insert)){
						move_uploaded_file($cv['tmp_name'], 'cv/' .$cvs);
						header('Location:cvupload.php');
						echo "Your cv upload succesfully.";
						
					}else{
						echo "Your cv upload failed!";
					}
				}else{
					echo "Select your cv file";
				}
			}else{
				echo "Enter your email!";
			}
		}else{
			echo "Enter your name!";
		}
	}
 ?>