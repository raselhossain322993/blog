<?php 
require_once('function/function.php');

if(isset($_POST['submit'])){

	$name=mysqli_real_escape_string($_POST['name']);
	$email=mysqli_real_escape_string($_POST['email']);

	$query="INSERT INTO subscriber (subscriber_name,subscriber_email)VALUES('$name','$email')";
	$result=mysqli_query($con,$query);

	if(!$result){
		echo "Could not post data!";
	}else{
		header('Location:jobpost.php');
	}
}

 ?>