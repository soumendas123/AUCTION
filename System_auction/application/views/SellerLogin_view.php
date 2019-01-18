<!--
<html>
<head></head>
<body>
<form action="<?php //echo base_url();?>index.php/Auction/SellerLogin" method="post">
Email:
<input type="email" name="txtmail">
<br>
password:
<input type="password" name="txtpass">
<br><br>
<input type="submit" name="btnlogin" value="login">
</form>
</body>
</html>
-->









<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  
      <link rel="stylesheet" href="<?php  echo base_url();?>css/style.css">
<style>

body
{
	background:url('<?php echo base_url();?>3d_colorful_squares-wide.jpg');
	
}


</style>
</head>

<body>

  <div class="wrapper">
	<div class="container">
		

<h1>Seller Login</h1>
		
	<form action="<?php echo base_url();?>index.php/Auction/SellerLogin" method="post">
			<input type="text" placeholder="Username" name="txtmail" autocomplete="off" required>
			<input type="password" name="txtpass" placeholder="Password" autocomplete="off" required>
			<button type="submit" id="login-button">Login</button>
		</form>
	</div>
	
	

<ul class="bg-bubbles">
		<li></li>
		<li></li>
		

<li></li>
		<li></li>
		<li></li>
		<li></li>
		

<li></li>
		<li></li>
		<li></li>
		<li></li>
	

</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

   

</body>
</html>
