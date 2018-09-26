<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginCtrl extends CI_Controller {

	public function __construct()
        {
			parent::__construct();
			$this->ci =& get_instance();
			$this->load->library('session');
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->database();
			$this->load->library('form_validation');
			date_default_timezone_set('Asia/Kolkata');	
			//$this->load->model('insert');
			
		}
	public function index()
	{
		if ( $this->session->userdata('username'))
        { 
            redirect(base_url('form1'));
        }
		$this->load->view('header');
		$this->load->view('user-login');
	}
	public function login()
	{
		$this->form_validation->set_message('required', 'The {field} field cannot be empty');
		$this->form_validation->set_rules('Username', 'Username',  'required');
		$this->form_validation->set_rules('Password', 'Password',  'required');
	$authentication = $this->db->get_where('login', array('username' => $this->input->post('Username'),'password'=>$this->input->post('Password')))->row();
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view('user-login');
		}
		else
		{
			if($authentication != "")
			{
			$this->session->set_userdata('username' ,$authentication->username);
			redirect(base_url('form1'));
			}
			else
			{
				redirect(base_url('login'));
			}
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
	
	public function ngoreg_view()
	{
		$this->load->view('header');
		$this->load->view('slider');
		$this->load->view('Admin/ngoreg');
	}
	public function ngoreg_insert_update()
	{
		
		$data['ngoinsert']= array
			(
			'ngo_name'=>$this->input->post('ngo_name'),
			'ngo_regno'=>$this->input->post('ngo_regno'),
			'email'=>$this->input->post('email'),
			'phone'=>$this->input->post('phone'),
			'door'=>$this->input->post('door'),
			'street'=>$this->input->post('street'),
			'city'=>$this->input->post('city'),
			'state'=>$this->input->post('state'),
			'country'=>$this->input->post('country'),
			'pincode'=>$this->input->post('pincode'),
			'contact_person'=>$this->input->post('contact_person'),
			'contact_person_phone'=>$this->input->post('contact_person_phone'),
			'contact_person_role'=>$this->input->post('contact_person_role'),
			'fblink'=>$this->input->post('fblink'),
			'comments'=>$this->input->post('comments')
			);
			print_r($data['ngoinsert']);
	}
}
