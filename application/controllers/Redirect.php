<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Redirect extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->view('admin/header');
        if($this->session->userdata('username') != null){
            $this->load->view('admin/slider');
        }
    }
    // NGO Registration Entry Start
    public function ngo_reg(){
        if($this->session->userdata('username') != null){
            $this->load->view('admin/ngo_reg');
        }else{
            $this->load->view('admin/admin_login');
        }
    }
    // NGO Registration Entry End
    // Categ Entry Start
    public function categ_entry(){
        if($this->session->userdata('username') != null){
            $this->load->view('admin/categ_entry');
        }else{
            $this->load->view('admin/admin_login');
        }
    }
    // Categ Entry End
    // Categ List Start
    public function categ_list(){
        if($this->session->userdata('username') != null){
            $this->load->view('admin/categ_list');
        }else{
            $this->load->view('admin/admin_login');
        }
    }
    // Categ List End
}