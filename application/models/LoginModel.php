<?php
defined('BASEPATH') or exit('No direct script access allowed');
class LoginModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
        $this->load->helper('myhelper');
    }
    public function change_pwd($old_password, $new_pwd, $email)
    {
        $change_pwd = $this->db->get_where('user_table', array('email' => $email, 'status' => "Active"));
        if ($change_pwd->num_rows() == 1) {
            $change_pwd_row = $change_pwd->row();
            $old_pwd = $this->encryption->decrypt($change_pwd_row->password);
            if ($old_pwd == $old_password) {
                $this->db->where('email', $email);
                $this->db->update('user_table', array('password' => $new_pwd));
                $affected_rows = $this->db->affected_rows();
                return $affected_rows;
            } else {
                $affected_rows = 0;
                return $affected_rows;
            }
        } else {
            $affected_rows = 0;
            return $affected_rows;
        }
    }

}
