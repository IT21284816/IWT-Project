<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
	
    <link href="css/payment.css" rel="stylesheet">
    
<link href="../head/head.css" rel="stylesheet">	
<?php include('../head/head.php') ;?>


<body>

    <div class="payform">
        <h2>Payment Form</h2>
<form action="paymentcomplete.php" method="POST" onsubmit="myFunction()">
<div class="inputgroup">
                <div class="inputbox">
 

<input type="radio" name="pay" id="bc1" checked class="radio">
                    <label for="bc1"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
                    <input type="radio" name="pay" id="bc" class="radio">
                    <label for="bc"><span><i class="fa fa-cc-paypal"></i> Paypal</span></label>
                </div>
</div>

<div class="inputgroup">
                <div class="inputbox">
                    <input name="Name" type="text" placeholder="Name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>

</div>
<div class="inputgroup">
                <div class="inputbox">
                    <input name="Email" type="email" placeholder="Email Adress" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
</div>


<div class="inputgroup">
                <div class="inputbox">
                    <input  type="tel" placeholder="Card Number" required class="name">
                    <i class="fa fa-credit-card icon"></i>
                </div>
</div>
<div class="inputgroup">
                <div class="inputbox">
                    <input type="tel" name="cvv"  placeholder="Card CVV" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
<div class="inputbox">
                    <select>
                        <option>Jan</option>
                        <option>Feb</option>
                        <option>Mar</option>
						<option>Apr</option>
						<option>May</option>
						<option>Jun</option>
						<option>Jul</option>
						<option>Aug</option>
						<option>Sep</option>
						<option>Oct</option>
						<option>Nov</option>
						<option>Dec</option>
                    </select> 
					
                    <select>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
						<option>2025</option>
						<option>2026</option>
						<option>2027</option>
						<option>2028</option>
						<option>2029</option>
						
                    </select>
                </div>
</div>
<div class="inputgroup">
                <div class="inputbox">
                    <button type="submit">PAY NOW</button>
                </div>
				
</div>
</form>
</div>

<script>
	//function myFunction() {
	//alert("The form was submitted");
	//}

</script>


	<link href="../footer/footer.css" rel="stylesheet">	
	<?php include('../footer/footer.php') ;?>
</body>
</html>
