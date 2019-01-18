<?php
class Sellerlogin_model extends CI_Model 
{
	function sellerlog()
	{
		
		$this->load->database();
		$this->db->select("*");
		$this->db->from("seller");
		$this->db->where("Semail",$this->input->post('txtmail'));
		$q=$this->db->get();
		
		return $q->result();
	}
	
}


?>