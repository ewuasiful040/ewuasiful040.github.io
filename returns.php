<?php include("header.php"); ?>
<br>
<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
<center><div class ="baax">
	<form action="" method="post">
		 <center><h2>Dispatch</h2></center>
		 Order ID / AWB / Invoice No.: 
		 <input type="text" max="30" name="firstname" required> 
		 <br><br>
		 <input type="radio" name="gender" value="male" required> Ezmall
		 <input type="radio" name="gender" value="female" required> Naptol
		 <br><br>
		 
		 Retun Type: 
		 <input type="radio" name="Retun Type" value="male" required> RTO
		 <input type="radio" name="Retun Type" value="female" required> DTO
		 <input type="radio" name="Retun Type" value="Order Cancelled" required> Order Cancelled
		 <br/><br/>
		 <center><input type="submit" value="Submit"></center>
		 <br>
		 (You can either scan or manually fill up the form)
	 </form> 
</div></center>
<?php include("footer.php"); ?>