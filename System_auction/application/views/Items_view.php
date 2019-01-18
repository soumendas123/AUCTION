<html>
<head>
<style>
#t1
{
  background: -webkit-linear-gradient(left, rgba(255,0,0,0), rgba(255,0,0,1)); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(right, rgba(255,0,0,0), rgba(255,0,0,1)); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(right, rgba(255,0,0,0), rgba(255,0,0,1)); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1)); /* Standard syntax (must be last) */
	width:300px;
	height:460px;
	padding:40px;
	text-align:center;
	float:left;
	margin-left:20px;
	border:6px pink double;
	border-radius:30px;
	box-shadow:20px 20px 20px gray;
	
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
	background:url('<?php echo base_url();?>OnlineAuction.jpg');
	
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
input[type="submit"]
{
	color:#00ffff;
	background:transparent;
	width:100px;
	height:30px;
	font-size:20px;
	
	cursor:pointer;
}
input[type="submit"]:hover
{
	
	box-shadow: 0 0 2px 3px pink;
}
body
{
	background:url('<?php echo base_url();?>plaggg.jpg');
	
}
.img
{
	border-radius:4px;
	border: 5px solid #ddd;
	
	
}

img:hover {
    box-shadow: 0 0 5px 7px rgba(0, 140, 186, 0.5);
}
p
{
text-align:left;
font-size:17px;	
color:white;
}
</style>
</head>
<body>
<div id="div1">
<div id="div2">
<a href="<?php echo base_url();?>index.php/Auction" id="a1"><img src="<?php echo base_url();?>OnlineAuction.jpg" height="120px" width="130px" class="img2"></a>
</div>
ONLINE AUCTION
</div>
<?php
//print_r($h);
foreach($h as $val)

{
?>

<div id="t1">
<form action="<?php echo base_url(); ?>/index.php/Auction/high_bid" method="post">
<img src="<?php echo base_url().'ItemImage/'.$val->iname ?>" height="100px" width="100px" class="img">

Auction ID:<input type="hidden" value="<?php echo $val->Aid;?>" name="txtaid">
<?php echo $val->Aid;?>

<p>Item ID: &nbsp; <?php echo $val->Iid;?></p>
<p>Item Name: &nbsp;<?php echo $val->iname;?></p>
<p>Item Price: &nbsp;  <?php echo $val->Ibaseprice;?></p>

last bidding high price:<input type="hidden" value="<?php echo $val->High_price;?>" name="txtbid"><?php echo $val->High_price;?>
<p>Start-Date: &nbsp;  <?php echo $val->Astartdate;?></p>
<p>End Date: &nbsp; <?php echo $val->Aenddate;?></p>
bid Prize:
<input type="text" name="txtownprice">

<input type="submit" value="bid" name="btnbid">
</form>

</div>

	
	<?php
}

?>
<!--
<div style="background:pink; height:200px; width:100px;">
<?php //if(isset($f)) {echo $f;} ?>
</div>
-->
</body>
</html>