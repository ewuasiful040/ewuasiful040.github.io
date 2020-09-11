<?php include("header.php"); ?>
<br><br>
<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
	  <center><div class="baax">
		   <h2 align="center">Keep your data safe!!</h2><br />
		   <form method="post" enctype="multipart/form-data">
			<label >Select Excel File</label><br />
			<br>
			<input type="file" name="excel" /><br />
			<br />
			<input type="radio" name="gender" value="male"> Ezmall
		  <input type="radio" name="gender" value="female"> Naptol
		  <br/><br/>
			<center><input align="center" type="submit" name="import" class="btn btn-info" value="Import" /></center><br />
		   </form>
		  </div></center>

<?php include("footer.php"); ?>