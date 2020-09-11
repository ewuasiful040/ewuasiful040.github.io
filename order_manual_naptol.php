<?php include("header.php"); ?>
<br>
<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
<center><div class ="bax">
	<form action="Iteration1.php" method="post">
		 <center><h2>Manual Order Entry Form (Naptol)</h2></center>
		Order ID: 
		 <input type="text" max="30" name="firstname" required> 
		 <br><br>
		Logistics Name: 
		 <input type="text" max="30" name="lastname" required> 
		<br><br>
		Cargo Request ID:
		<input type="text" max="30" name="lastname"> 
		<br><br>
		Payment Mode:
		<input type="text" max="30" name="lastname"> 
		<br><br>
		Order Status:
		<input type="text" max="30" name="lastname"> 
		<br><br>
		Product Name:
		<input type="text" max="30" name="lastname" required> 
		<br><br>
		fksellerinfoid:
		<input type="text" max="30" name="lastname"> 
		<br><br>
		Seller Name: 
		 <input type="number" max="10" name="mobilenumber"> 
		<br><br>
		Order Date:
		<input type="date" name="bday" text-align= "left">
		<br><br>
		Invoice Date:
		<input type="date" name="bday" text-align= "left">
		<br><br>
		Invoice Number:
		<input type="text" max="30" name="lastname"> 
		<br><br>
		Order Quantity:
		<input type="text" max="30" name="lastname"> 
		<br><br>
		Complain ID:
		<input type="text" max="30" name="lastname" required> 
		<br><br>
		Naaptol Complains:
		<input type="text" max="30" name="lastname"> 
		<br><br>
		Replacement Item to be Dispatched:
		<input type="text" max="30" name="lastname" required> 
		<br><br>
	 </form> 
</div><center>
<?php include("footer.php"); ?>