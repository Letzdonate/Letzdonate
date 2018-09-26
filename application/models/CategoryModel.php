<?php
defined('BASEPATH') or exit('No direct script access allowed');
class CategoryModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

    }
    public function categinsert($data)
    {
        $this->db->insert('categ_master', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    public function get_categ_list(){
        $query='select * from categ_master';
		return $this->db->query($query)->result();	
    }
    public function del_categ_list($id){
        $this->db->delete('categ_master', array('id' => $id));
    }
}
