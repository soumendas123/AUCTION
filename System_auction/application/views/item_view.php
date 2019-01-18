
<html>
	<head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>/css/form.css">
        <style>
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

.module
{
	
width:500px;	
}
.logout
{
width:100px;
height:60px;
text-align:center;
font-size:36px;
}
.logout:hover
{
background:silver;
box-shadow: 0 0 2px 3px pink;	
}

        </style>
    </head>
    <body>
	<div id="div1">
<div id="div2">
<a href="<?php echo base_url();?>index.php/Auction" id="a1"><img src="<?php echo base_url();?>plaggg.jpg" height="120px" width="100px" class="img2"></a>
</div>
ONLINE AUCTION
</div>



<a class="logout" href="<?php echo base_url();?>index.php/Auction/SellerLogOut" style="text-decoration:none; float:right;background:green; border-radius:6px; margin-right:20px;">logout</a>

        <div class="body-content">
        <div class="module">
      
    <h1 style="font-family:Imprint MT Shadow">..ITEMS DETAILS..</h1>
    <form class="form" action="<?php echo base_url(); ?>index.php/Auction/Item_insert" method="post" enctype="multipart/form-data" autocomplete="off">
       
      <input type="text" placeholder="Iteam Name" name="txtname" required /><br>
      <input type="text" placeholder="Iteam Details" name="txtdetails" required /><br>
      <input type="text" placeholder="Iteam Price" name="txtprice" autocomplete="new-password" required /><br>
      
      <div class="image">
	  <label>Select your Image Of Iteam: </label>
	  <input type="file" name="image" accept="image/*" required />
	  </div>
	  <br>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
      
    </form>
        </div>
    </div>
    </body>
</html>
<?php
if(isset($_POST['register']))
{
	extract($_POST);
	//$pic=$_FILES['image']['name'];
	$temp=$_FILES['image']['tmp_name'];
	move_uploaded_file($temp,"ItemImage/".$txtname);
	
}

?>
<?php



?>
