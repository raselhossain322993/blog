<?php 
	$databaseName='ecommerce_job';
	$username='root';
	$host='localhost';
	$password='';

	$con=mysqli_connect($host,$username,$password,$databaseName);

	if(!$con){
		echo "Database connection failed!";
	}
 ?>