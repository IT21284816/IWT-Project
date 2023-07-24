<!DOCTYPE html>

<html lang="en" >
  <head>
  <link href="../head/head.css" rel="stylesheet">	
<?php include('../head/head.php') ;?>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="contactus.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">33/B Main Street</div>
          <div class="text-two">Colombo</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+94 777-987988</div>
          <div class="text-two">+94 111-434578</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">carpark@gmail.com</div>
          <div class="text-two">info.carpark@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p><h4>If you have any error or any types of questions about our system, you can send us to message from here. It's our pleasure to help you.</h4></p>
      <form action="#" onsubmit="myFunction()">
        <div class="input-box">
          <input type="text" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
          <textarea placeholder="Enter your message"></textarea>
        </div>
        <div>
          <button class ="button" type="submit" value="Send Now" style="vertical-align:middle"><span> Send Now</span> </button>

		</div>
      </form>
    </div>
    </div>
  </div>
<script>
	function myFunction() {
	alert("The Message was sended");
	}
</script>
</br>
</body>
</html>
	<link href="../footer/footer.css" rel="stylesheet">	
	<?php include('../footer/footer.php') ;?>
	



