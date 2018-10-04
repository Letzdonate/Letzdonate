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
    public function register_insert(){
        $this->form_validation->set_message('required', 'The {field} field cannot be empty ');
        $this->form_validation->set_message('valid_email', 'The {field} field is not valid');
        $this->form_validation->set_message('numeric', 'The {field} field must be in number');
        $this->form_validation->set_message('is_unique', 'The {field} already exists');
        $this->form_validation->set_rules('firstname', 'FirstName', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'valid_email|required|is_unique[user_table.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('cfmpassword', 'Confirm Password', 'required|matches[password]');
        $now = new DateTime();
        $log = "Via_Web_". $this->input->post('firstname') . "_". $now->format('Y-m-d H:i:s');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $pwd = $this->encryption->encrypt($password);
        $data['donor_insert_update'] = array
            (
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'role_id' => 3,
            'email' => $email,
            'phone' => $this->input->post('phone'),
            'password' => $pwd,
            'status' => 'Active',
            'log' => $log
            );
            if ($this->form_validation->run() == false) {
                    $this->load->view('web/donor_register', $data);
                    $this->load->view('web/footer');
            } else {
                $insert_id = $this->NgoModel->ngoinsert($data['donor_insert_update']);
                if ($insert_id) {
                    $this->session->set_flashdata('msg', "1");
                    redirect(base_url('stories'));
                }else{
                    $this->session->set_flashdata('msg', "0");
                    $this->load->view('web/donor_register', $data);
                    $this->load->view('web/footer');
                }
            }
    }
    public function ngo_web_register()
    {
        $data['id'] = "";
        $data['ngo_insert_update'] = array(
            'name' => "",
            'ngo_regno' => "",
            'email' => "",
            'phone' => "",
            'door' => "",
            'street' => "",
            'area' => "",
            'city' => "",
            'state' => "",
            'country' => "",
            'pincode' => "",
            'contact_person' => "",
            'contact_person_phone' => "",
            'contact_person_role' => "",
            'fblink' => "",
            'comments' => "",
            'kycdoc' => "",
            'status' => "",
        );
        $this->load->view('web/ngo_register',$data);
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
    public function generateRandomString($length = 8)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$&';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
