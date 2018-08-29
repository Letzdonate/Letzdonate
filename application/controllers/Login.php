<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
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
    // admin login view start
    public function admin(){ 
        if($this->session->userdata('username') != null){
            $this->load->view('admin/ngo_reg');
        }else{
            $this->load->view('admin/admin_login');
        }
    }
    // admin login view end
    // admin login Check start
    public function login_check(){
        $this->form_validation->set_message('required', 'The {field} field cannot be empty');
		$this->form_validation->set_rules('Username', 'Username',  'required');
		$this->form_validation->set_rules('Password', 'Password',  'required');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('admin/admin_login');
		}
		else{
			$userName = $this->input->post('Username');
			$userPass = $this->input->post('Password');
			if($userName == "admin" && $userPass == "admin"){
                $this->session->set_userdata('username',$userName);
                redirect('ngo_reg', 'refresh');
			}
			else{
				$this->load->view('admin/admin_login');
			}
		}
        
    }
    // admin login Check end
}