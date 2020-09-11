<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
	</head>
	<body>

	<div style="background-color: black; padding:33px;text-align:center;color:white;">
	  <h1>GMOIT Dropshipping Management System</h1>
	</div>
	
	<div class="topnav" id="myTopnav">
	<a href="index.php">Home</a>
		<div class="dropdown">
			<button class="dropbtn">Order Upload 
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="order_upload_excel.php">Upload By Excel</a>
				<a href="order_manual_ezmall.php">Manual Feeding (Ezmall)</a>
				<a href="order_manual_naptol.php">Manual Feeding (Naptol)</a>
			</div>
		</div> 
	<a href="dispatch.php">Dispatch</a>
	<a href="returns.php">Returns</a>
	  <div class="dropdown">
		<button class="dropbtn">Reports 
		  <i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
		  <a href="#">Manifest Print</a>
		  <a href="#">Stock Request</a>
		  <a href="#">Monthly Summary</a>
		  <a href="#">Daily Summary</a>
		</div>
	  </div> 
	  
	  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
	</div>