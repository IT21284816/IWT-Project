<?php
error_reporting(0); 

    $conn = mysqli_connect('localhost', 'root', '','user');
    
	
	
	$firstname     = $_POST['firstname'];
	$lastname      = $_POST['lastname'];
	$email         = $_POST['email'];
	$id            = $_POST['id'];
	$address       = $_POST['address'];
	$contactno     = $_POST['contactno'];
	$vehiclenumber = $_POST['vehiclenumber '];
	$vehicletype   = $_POST['vehicletype'];
	$password      = $_POST['password1'];
	$password      = $_POST['password2'];
	
	
	$sql = "INSERT INTO 'user' ('regno', 'firstname', 'lastname', 'email', 'id', 'address', 'contactno', 'vehiclenumber','vehicletype','password1') 
	VALUES ('0', '$firstname', '$lastname', '$email ', '$id', '$address', '$contactno', '$vehiclenumber ', '$vehicletype','$password ' );"
	


?>