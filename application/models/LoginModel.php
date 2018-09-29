<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginModel extends CI_Model	 {
	
 	 function __construct(){
     parent::__construct();
		 
	 }
	 function change_pwd($old_password,$new_pwd,$email)
	{
		$change_pwd = $this->db->get_where('login',array('email'=>$email,'password'=>$old_password)); 
		 if($change_pwd->num_rows() == 1)
		{
			$this->db->where('email',$email);
			$this->db->update('login',array('password'=>$new_pwd));
			$affected_rows = $this->db->affected_rows();
			return $affected_rows;
		}
	}
	
}
?>