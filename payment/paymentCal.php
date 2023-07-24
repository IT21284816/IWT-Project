<!DOCTYPE html>
<html lang="en">
<head>

    <link href="css/paymentCal.css" rel="stylesheet">
	
    <link href="../head/head.css" rel="stylesheet">	
<?php include('../head/head.php') ;?>

<script src ="js/paymentCal.js">


</script>
</head>
<body>

<Center>

<p><h3>Enter the Time Duration</h3><input class="input" id="time" ></p>

<p><h3>Enter Vehicle Type : Car = 1/ SUV = 2 / Van = 3</h3><input class="input" id="type"></p>


<button  onclick="cal()" class="cal">Calculate</button>

<p><h2>Total Amount</h2><input class="input" id="answer"></p>
</br><hr></br>
<a href="payment.php">
<button class="button" style="vertical-align:middle"><span>Pay Now</span></a>


</center>

</br>
<link href="../footer/footer.css" rel="stylesheet">
	<?php include('../footer/footer.php') ;?>
</body>
</html>