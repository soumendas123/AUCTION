<?php
class Auction extends CI_Controller
{
function index()
{
$this->load->view("auction_view");
$this->load->view("auction_logo_view");
}
//seller registration view page/.
function sell()
{
$this->load->view("Seller_view");

}
function sell_regis()
{
$this->load->model("Seller_model");
$s=$this->Seller_model->seller();

if($s==true)
{
	$this->load->view("auction_view");
}
else
{
	echo  "not inserted!!";
	$this->load->view("Seller_view");
	
}



}

//Buyer registration view page/.


function SLogin()
{

$this->load->view("SellerLogin_view");


}

function SellerLogin()
{
	
$this->load->model("Seller_model");
$this->load->library("session");

$c=$this->Seller_model->sellerlog();

if($c==true)
{
	$se['mm']=$this->session->userdata('mail');
	$this->load->view("Item_view",$se);
	

}
else
{
	$this->load->view("SellerLogin_view");

	
}
}
function SellerLogOut()
{

$this->load->model("Seller_model");
$this->load->library("session");
$log=$this->Seller_model->sellerlogout();
if($log==true)
{
	$this->load->view("SellerLogin_view");
}
}


function Item_insert()
{
	$this->load->model("Seller_model");
	
	//$d['ss']=$this->Seller_model->Item();
//$this->load->view("Item_view",$d);

	 $d=$this->Seller_model->Item();
	 if($d==true)
	 {
		 $this->load->view("Item_view");
		 
	 }
	 else
	 {
		 echo "not";
	 }
}


function buy()
{
	
$this->load->view("Buyer_view");

}
//Buyer registration model page/.

function buy_regis()
{
$this->load->model("Buyer_model");
$b=$this->Buyer_model->buyer();

if($b==true)
{
	$this->load->view("auction_view");
}
else
{
	echo "not inserted!!";
$this->load->view("Buyer_view");
	
}

}

function BLogin()
{
$this->load->view("BuyerLogin_view");
}

function BuyerLogin()
{
	
	$this->load->model("Buyer_model");
	$q=$this->Buyer_model->buyerlog();
	if($q==true)
	{
			$this->ItemView();
	}
	else
	{
				$this->load->view("BuyerLogin_view");
	
	}
}

function ItemView()
{
	$this->load->model("Buyer_model");
	$t['h']=$this->Buyer_model->Item_model();
	$this->load->view("Items_view",$t);
}

function high_bid()

{

$this->load->model("Buyer_model");


	
if($this->input->post('txtbid')<$this->input->post('txtownprice'))
{
$d=$this->Buyer_model->update_bidprice();
if($d==true)
{
	$t['h']=$this->Buyer_model->Item_model();
		$this->load->view("Items_view",$t);
	
	
	}
else
{

    echo "not update!";
}

}

else
{
	$t['h']=$this->Buyer_model->Item_model();
$this->load->view("Items_view",$t);
$d['f']="not proceed";
$this->load->view("UpdateMsg_view",$d);
	//$t['f']="not proceed";
	//$this->load->view("Items_view",$t);
	
}

}

}


?>