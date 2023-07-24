<!DOCTYPE html>
<html lang="en">
<head>
	    
   <link href="../head/head.css" rel="stylesheet">	
<?php include('../head/head.php') ;?>

<?php

	$Name = $_POST['Name'];
	$Email = $_POST['Email'];

	

	//$servername = "localhost";
	//$username = "root";
	//$password = " ";
	//$database = "system";
	

	$link = mysqli_connect("localhost", "root", "", "system");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
	
	//$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
	//$Email = mysqli_real_escape_string($link, $_REQUEST['Email']);
 
// Attempt insert query execution
	$sql = "INSERT INTO payment (Name, Email) VALUES ('$Name', '$Email')";
if(mysqli_query($link, $sql)){
    //echo "Records added successfully.";
} else{
    //echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>



<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  
}
</style>


</head>
<body">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	//function myFunction() {
	//alert("The form was submitted");
	//}
 swal({
  title: "Payment Success!",
  text: "Check youe email for details",
  icon: "success",
  button: "Continue",
});
</script>
</br>
<img src="images/thankyou.jpg"></img>

</br></br></br></br></br></br></br></br>

<link href="../footer/footer.css" rel="stylesheet">
	<?php include('../footer/footer.php') ;?>
</body>	
</html>