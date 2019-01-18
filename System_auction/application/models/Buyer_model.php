<?php
class Buyer_model extends CI_Model 
{
	function buyer()
{
$this->load->database();

$array2=array("Bname"=>$this->input->post('txtname'),
			 "Bphone"=>$this->input->post('txtph'),
			 "Bemail"=>$this->input->post('txtmail'),
			 
			 "Bliability"=>$this->input->post('txtliability'),
			 "Bpass"=>$this->input->post('txtpass'),
			 "Approved"=>'No'
			  );
$this->db->insert("buyer",$array2);
return true;
}

	
	function buyerlog()
	{
		
		$this->load->database();
		$this->db->select("*");
		$this->db->from("buyer");
		$this->db->where("Bemail",$this->input->post('txtmail'));
		$this->db->where("Bpass",$this->input->post('txtpass'));
		$this->db->where("Approved",'Yes');
		
			$q=$this->db->get();
		if($q->num_rows()>0)
		{
			
			return true;
			
		}
		else
		{
			return false;	
		}
		
		
	}
		function Item_model()
	{
		$this->load->database();
		$re="SELECT a.Iid, a.Aid,a.High_price,
		a.Astartdate, 
		a.Aenddate, 
		i.Iid, i.iname, i.Ibaseprice 
		FROM auction a INNER JOIN auction_item i ON a.Iid=i.Iid";
		
		$t=$this->db->query($re);
		return $t->result();
		
	}

	function update_bidprice()
	{
			$this->load->database();
			$this->db->where("Aid",$this->input->post('txtbid'));
			$a=array("High_price"=>$this->input->post('txtownprice'));
			$this->db->update("auction",$a);
			return true;
	}
	
}
	


?>