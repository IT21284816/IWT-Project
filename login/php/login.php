
<!DOCKTYPE html>
<html>
    <head>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	    <title>login</title> 
	</head>
<body class= "body">
    <link href="css/head.css" rel="stylesheet">	
	<?php include('head.php') ;?>
<center>
    <script>
	
	var login;
	var date = new Date();
	var hour = date.getHours();
	
	 if (hour < 12) 
      { 
       welcome = "Hello Good Morning"; 
      }
    else if (hour < 17)
     {  
      welcome = "Hello Good Afternoon";  
     } 
    else 
    {  
      welcome = "Hello Good Evening";  
    }  
    document.write("<h1>" + "<font color='black'>" + welcome  +"<br>" + " Sign into your Account"+"</font>");
	</script>
</center>
<br>
<center>
<div class = "main">
    <form>
	<br>
        <center>
		<img src="../images/dpic11.png" alt="photo" width= "200" height="200">
		</center>
	<br>
	<br>
	<br>
	<label for="firstname"><b>User Name<b></label>
	<br>
	<input type="text" id ="firstname" name="firstname" placeholder="Enter your username">
	<br>
	<br>
	<br>
	<label for="pass"><b>Password<b></label>
	<br>
	<input type="text" id ="password" name="password" placeholder="Enter your password">
	<br>
	<br>
	<label for="rememb">Remember me</label>
	<input type="checkbox" name="remember">
	<br>
	<br>
	<input type="submit" value="sign in" onclick="getinfo()">
	<br>
	<!--registerliknknkn-->
	<br>
	<!--helpliknknkn-->
	<br>
	<label for="reglink">Don't you have an account?</label>
	<a href="../../register/php/register.php">Register</a>
	</form>
	</div>
	</center>
	<br>
	<br>
	<br>
	<link href="../../footer/footer.css" rel="stylesheet">	
	<?php include('../../footer/footer.php') ;?>
</body>	

</html>
	