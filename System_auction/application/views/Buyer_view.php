<html>
<head>
<style>

input[type=text], input[type=password],input[type=email],textarea
{
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #FF0066;
    box-sizing: border-box;
	background:black;
	color:white;
	font-size:20px;
	
}

input[type="text"]:hover,
input[type="password"]:hover,
input[type="email"]:hover,
textarea:hover 
{
 border-color: rgba(255, 255, 255, 0.5);

}
.divform{
background:linear-gradient(red, #003399); /* Standard syntax (must be last) */;
box-shadow:10px 10px 10px black;
width:90%;
color:white;
overflow: auto;

}
#t{

background:black;
box-shadow:10px 10px 0px black;
width:90%;
margin:40px;
color:white;
}


label
{
color:#FF0066;
font-size:20px;
font-family:Copperplate Gothic;
}
span
{
color:teal;
}

.divform
{
display:none;
overflow: auto;
}
.close
{
float:right;
padding:10px;
top:40px;
color:white;
cursor:pointer;

font-size:40px;
}
.close:hover
{
color:black;
background:#b30047;
text-shadow:0px 1px 0px yellow;

}
table
{

padding-top:60px;
padding-left:10px;
padding-bottom:60px;
width:70%;
}

.signupbtn
{
background:#FF0066;
padding:10px;
border:none;
border-radius:4px;
cursor:pointer;
font-size:30px;
box-shadow:1px 1px 2px  red;
width:100%;
text-align:center;
font-family:Colonna MT;
}
.signupbtn:hover
{
	text-shadow:2px 2px 2px black;
	box-shadow:6px 6px 6px  maroon;
}
.b
{
	color:red;
	width:200px;
	height:50px;
	background:linear-gradient(#ff66ff, #ffff33);
	font-size:30px;
	border-radius:8px ;
	color:white;
	 transition-duration: 0.4s;
}
.b:hover
{
	background:linear-gradient(green,skyblue);
	box-shadow:10px 10px 10px gray;
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
	font-family:Old English Text MT;
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
.img2
{
	border:1px solid gray;
	border-radius:8px;
	margin-left:30px;
	margin-top:10px;
}

#div1 #div2
{
	float:left;
}

body
{
	background:url('<?php echo base_url();?>3d_colorful_squares-wide.jpg');
	background-repeat:no-repeat;
	
	
}

</style>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</head>
<body>

<div id="div1">
<div id="div2">
<a href="<?php echo base_url();?>index.php/Auction" id="a1"><img src="<?php echo base_url();?>Online-Auction-Screenshot.jpg" height="120px" width="130px" class="img2"></a>
</div>
ONLINE AUCTION
</div>


<button onclick="document.getElementById('id01').style.display='block'" class="b">Sign Up</button>
<br><br>
      <center>
     <div id="id01" class="divform">
   <h2><p align="center" style="text-shadow:6px 6px 6px black;">BUYER REGISTRTION</p></h2>
<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
 <div id="t">
 
 <form action="<?php echo base_url(); ?>index.php/Auction/buy_regis" method="post" class="t">
       <table>
		<tr>
			<td>
                <label>
                Name<span class="req">*</span>
                </label>
            </td>
		</tr>
		<tr>
			<td>
			  <input type="text" required autocomplete="off" name="txtname" id="n"/>
            </td>
			</tr>
			
        
          
<tr>
<td>             
			 <label>
                
				Phone<span class="req">*</span>
              </label>
</td>
</tr>
<tr>
<td>    
	<input type="text"required autocomplete="off" name="txtph" id="m"/>
</td>
</tr>    
	
         

 <tr>
<td> 
            <label>
              Email Address<span class="req">*</span>
            </label>
</td>
</tr>
<tr>
<td>    
	<input type="email" required autocomplete="off" name="txtmail" id="o" />
    </td>
</tr>	
          
		  
	<tr>
<td>	
            <label>
              Liability<span class="req">*</span>
            </label>
</td>
</tr>
<tr>
<td>    
	<textarea name="txtliability" id="a"></textarea>
          
    </td>
</tr>
<tr>
<td>    
            <label>
              Set A Password<span class="req">*</span>
            </label>
</td>
</tr>
<tr>
<td>
            <input type="password" required autocomplete="off" name="txtpass" id="p" />
    </td>
</tr>    
<!--
<tr>
<td>
<input type="checkbox" checked="checked"><label> Remember me</label>
</td>
</tr>
<tr>
<td>
     <label> By creating an account you agree to our <a href="#" style="text-decoration:none;color:teal;">Terms & Privacy</a></label>

</td>
</tr>
-->
     <tr>
<td>     
<!--
<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
-->
<button type="submit" class="signupbtn" align=center;>Sign Up</button>
    </td>
</tr>	
</table>
          </form>
</div>
		  </div>
		 
</center>
		</body>
		</html>