<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginCtrl extends CI_Controller
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
        $this->load->model('LoginModel');
        $this->load->library('encryption');
        $this->load->helper('myhelper');
    }
    public function index()
    {
        $this->load->view('header');
        $this->load->view('user-login');
    }
    public function forgotPassword()
    {
        $this->load->view('header');
        $this->load->view('forgotPassword');
    }
    public function login()
    {

        $this->form_validation->set_message('required', 'The {field} field cannot be empty');
        $this->form_validation->set_rules('Username', 'Username', 'required');
        $this->form_validation->set_rules('Password', 'Password', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('header');
            $this->load->view('user-login');

        } else {

            $query = $this->db->get_where('user_table', array('email' => $this->input->post('Username'), 'status' => 'Active'));
            $plain_password = '';
            if (($query->num_rows() == 1)) {
                $user = $query->row();
                $plain_password = $this->encryption->decrypt($user->password);
            }
            if (($query->num_rows() == 1) && ($plain_password == $this->input->post('Password'))) {
                $user_session = $query->row();
                $this->session->set_userdata('logged_in', 1);
                $this->session->set_userdata('role_id', $user_session->role_id);
                $this->session->set_userdata('username', $user_session->name);
                $this->session->set_userdata('user_id', $user_session->id);
                $this->session->set_userdata('email', $user_session->email);
                $this->session->set_userdata('phone', $user_session->phone);

                if ($this->session->userdata('role_id') == "1") { //admin
                    $this->load->view('header');
                    $this->load->view('slider');
                    $this->load->view('admin/dashboard');
                } else if ($this->session->userdata('role_id') == "2") { //ngo
                    redirect(base_url('project_list'));
                } else {
                    $this->load->view('header');
                    $this->load->view('slider');
                    $this->load->view('admin/dashboard');
                }

            } else {
                $this->session->set_flashdata('msg', "0");
                redirect(base_url('admin'), 'refresh');
            }
        }
    }
    public function password_reset()
    {
        $email = $this->input->post('Username');
        $query = $this->db->get_where('user_table', array('email' => $email));
        if ($query->num_rows() == 1) {
            $get_user_details = $query->row();
            $plain_password = $this->encryption->decrypt($get_user_details->password);
            $Mail_Subject = "Requested Forgot Password";
            $Mail_Message = 'Dear Mr./Ms.' . $get_user_details->name . ',<br>
					Your password is reset successfully and Your Username : ' . $get_user_details->email . ' Password : ' . $plain_password . '.<br>
					Thank you,<br>
					Admin<br>
					Letzdonate';
            sendEmail($get_user_details->email, $Mail_Subject, $Mail_Message);
            $this->session->set_flashdata('msg', "1");
            redirect(base_url('forgotPassword'), 'refresh');
        } else {
            $this->session->set_flashdata('msg', "0");
            redirect(base_url('forgotPassword'), 'refresh');
        }
    }
    public function change()
    {
        $this->load->view('header');
        $this->load->view('slider');
        $this->load->view('changepassword');
    }
    public function change_password()
    {
        $this->form_validation->set_message('required', 'The {field} field cannot be empty ');
        $this->form_validation->set_rules('oldpassword', 'old password', 'required');
        $this->form_validation->set_rules('newpassword', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('confirmpass', 'Password Confirmation', 'trim|required|matches[newpassword]');
        $email = $this->session->userdata('email');
        $old_password = $this->input->post('oldpassword');
        $new_password = $this->input->post('newpassword');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('msg', "0");
            redirect(base_url('change'), 'refresh');
        } else {
            $new_pwd = $this->encryption->encrypt($new_password);
            $affected_rows = $this->LoginModel->change_pwd($old_password, $new_pwd, $email);
            if ($affected_rows == 1) {
                $this->session->set_flashdata('msg', "1");
                redirect(base_url('change'), 'refresh');
            } else {
                $this->session->set_flashdata('msg', "0");
                redirect(base_url('change'), 'refresh');
            }

        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('admin'));
    }
}
