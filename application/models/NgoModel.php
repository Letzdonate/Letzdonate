<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class NgoModel extends CI_Model	 {
	
 	 function __construct(){
     parent::__construct();
		 
	 }
	 function ngoinsert($data)
	{ 
		$this->db->insert('user_table',$data);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}
	function ngoupdate($data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update('user_table',$data);
		$affected_rows = $this->db->affected_rows();
		return $affected_rows;
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
		$this->db->update('user_table',array('kyc_status'=>$doc_status));
		$affected_rows = $this->db->affected_rows();
		return $affected_rows;
	}
	function get_ngo_list()
	{
		$query='select * from user_table';
		return $this->db->query($query)->result();	
	}
	
	
	
}
?>