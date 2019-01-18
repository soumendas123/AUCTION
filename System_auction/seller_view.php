<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type="text"]:hover,
input[type="password"]:hover,
input[type="email"]:hover 
{
 border-color: rgba(255, 255, 255, 0.5);

}
/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn 
{
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {float:left;width:50%}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content 

{
    background-color: silver;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 80px;
    color: #000;
    font-size: 30px;
    background:teal;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
	
	}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

h2
{
text-shadow:yellow 1px 2px;
}
.bv
{
	
	padding:30px;
	border-radius:30px;
	font-weight:bold;
	font-family:Castellar;
	background:maroon;
	 transition-duration: 0.4s;
	}
	.bv:hover
	{
		box-shadow:2px 3px gray;
		
	}
	
#div1
{
	border-style:40px solid;
	width:90%;
	height:90px;
	margin-bottom:69px;
	margin-left:60px;
	background:transparent;
	box-shadow: 10px 10px 5px grey;
	padding-bottom:50px;
 	margin-top:40px;
	font-family:Colonna MT;
	text-align:center;
	
	font-size:50px;
}
#div1:hover
{
	   animation-name: example;
    animation-duration: 4s;

}
@keyframes example {
    0%   {background-color: #1a8cff;}
    25%  {background-color: #cc99ff;}
    50%  {background-color:  #66ff99;}
    100% {background-color: #ffbb33;}
}
body
{
	background:url('<?php echo base_url();?>High-Quality-Desktop-Wallpaper.jpg');
	
}


#div1 #div2
{
	float:left;
}

.img2
{
	border:1px solid gray;
	border-radius:8px;
	margin-left:30px;
	margin-top:10px;
}
body
{
	background:url('<?php echo base_url();?>3d_colorful_squares-wide.jpg');
	
}

</style>
<body>
<div id="div1">
<div id="div2">
<a href="<?php echo base_url();?>index.php/Auction" id="a1"><img src="<?php echo base_url();?>3d_colorful_squares-wide.jpg" height="120px" width="130px" class="img2"></a>
</div>
ONLINE AUCTION
</div>
<center>
<h2>**>Seller Registration>**</h2>
</center>
<button class="bv" onclick="document.getElementById('id1').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id1" class="modal">
  
<span onclick="document.getElementById('id1').style.display='none'" class="close" title="Close Modal">close</span>
  
  
<form class="modal-content" action="<?php echo base_url(); ?>index.php/Auction/sell_regis" method="post">
    
 <div class="container">
	
	<label><b>Name</b></label>
      <input type="text" placeholder="Plz Enter Name" name="txtname" required>
	
	<label><b>Phone</b></label>
      <input type="text" placeholder="Plz Enter Phone number" name="txtph" required>
    
	<label><b>Email</b></label>
      <input type="email" placeholder="Plz Enter Email" name="txtemail" required>


    <label><b>Password</b></label>
      <input type="password" placeholder="Plz Enter Password" name="txtpass" required>

      <input type="checkbox" checked="checked"> Remember me
      <p>By creating an account you agree to our <a href="#" style="text-decoration:none;">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="submit" class="signupbtn">Sign Up</button>
		<button type="button" onclick="document.getElementById('id1').style.display='none'" class="cancelbtn">Cancel</button>
        
	  </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id1');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>