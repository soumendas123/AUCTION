<?php
class Seller_model extends CI_Model
{
function seller()
{
$this->load->database();

$array=array("Sname"=>$this->input->post('txtname'),
			 "Sphone"=>$this->input->post('txtph'),
			 "Semail"=>$this->input->post('txtemail'),
			 "Spass"=>$this->input->post('txtpass'),
			  );
$this->db->insert("seller",$array);
return true;
}





function sellerlog()
	{
		
		$this->load->database();
		$this->db->select("*");
		$this->db->from("seller");
		$this->db->where("Semail",$this->input->post('txtmail'));
		$this->db->where("Spass",$this->input->post('txtpass'));
			$q=$this->db->get();
		if($q->num_rows()>0)
		{
			$this->session->set_userdata("mail",$this->input->post('txtmail'));
			return true;
			
		}
		else
		{
			return false;	
		}
		
		
	}
	
	function sellerlogout()
	{
		
	 $this->session->unset_userdata("mail");
		return true;
		
	}
	
	function Item()
	{
		$this->load->database();
		
		$arr=array("iname"=>$this->input->post('txtname'),
					 "Idesc"=>$this->input->post('txtdetails'),
					 "Ibaseprice"=>$this->input->post('txtprice')
				     
					);
					
		$this->db->insert("auction_item",$arr);	
		return true;
		
		/*
		$this->db->select("*");
		$this->db->from("auction_item");
		$this->db->where("iname",$this->input->post('txtname'));
	
			$qq=$this->db->get();
					return $qq->result();
		*/
	}
					

				

}
?>
					
