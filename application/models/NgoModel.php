<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class NgoModel extends CI_Model	 {
	
 	 function __construct(){
     parent::__construct();
		 
	 }
	 function ngoinsert($data)
	{ 
		$this->db->insert('ngo_details',$data);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}
	
	 function doc_upload($data)
	{ 
		$this->db->insert('ngo_doc_upload',$data);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}
	function ngo_doc_upload_status($doc_status,$ngoid)
	{
		$this->db->where('id', $ngoid);
		$this->db->update('ngo_details',array('kyc_status'=>$doc_status));
		$affected_rows = $this->db->affected_rows();
		return $affected_rows;
	}
	
}
?>