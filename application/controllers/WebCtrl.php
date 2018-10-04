<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WebCtrl extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ci = &get_instance();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('NgoModel');
        $this->load->library('encryption');
        $this->load->view('web/header');
        $this->load->helper('myhelper');
    }
    public function index()
    {
        $this->load->view('web/index');
        $this->load->view('web/footer');
    }
    public function stories()
    {
        $this->load->view('web/list_project');
        $this->load->view('web/footer');
    }
    public function single_project()
    {
        $this->load->view('web/single_project');
        $this->load->view('web/footer');
    }
    public function aboutus()
    {
        $this->load->view('web/aboutus');
        $this->load->view('web/footer');
    }
    public function contact()
    {
        $this->load->view('web/contact');
        $this->load->view('web/footer');
    }
    public function login()
    {
        $this->load->view('web/login');
        $this->load->view('web/footer');
    }
    public function ngo_web_register()
    {
        $this->load->view('web/ngo_register');
        $this->load->view('web/footer');
    } 
    public function donor_web_register()
    {
        $this->load->view('web/donor_register');
        $this->load->view('web/footer');
    } 
    public function donor_forgotpassword()
    {
        $this->load->view('web/donor_forgotpassword');
        $this->load->view('web/footer');
    } 
    public function uploaddoc()
    {
        $this->load->view('web/uploaddoc');
        $this->load->view('web/footer');
    } 
}
