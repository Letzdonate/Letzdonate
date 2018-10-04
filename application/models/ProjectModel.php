<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ProjectModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }
    public function proj_insert($data)
    {
        $this->db->insert('project_details', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
	  public function update_proj($id,$data){
        $this->db->where('id', $id);
		$this->db->update('project_details',$data);
		$affected_rows = $this->db->affected_rows();
		return $affected_rows;
    }
	 public function upload_proj_img($data = array()){
        $insert = $this->db->insert_batch('proj_img',$data);
        return $insert?true:false;
    }
	 public function upload_proj_doc($data = array()){
        $insert = $this->db->insert_batch('proj_docs',$data);
        return $insert?true:false;
    }
}
