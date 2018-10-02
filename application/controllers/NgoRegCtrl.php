<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NgoRegCtrl extends CI_Controller
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
        $this->load->view('header');
        $this->load->view('slider');
        $this->load->model('NgoModel');
        $this->load->library('encryption');
        $this->load->helper('myhelper');
    }
    public function ngoreg_view($id = false)
    {
		if (!$this->session->userdata('username'))
        { 
            redirect(base_url('admin'));
        }
        if ($id == "") {
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
            $data['ngo_doc_list'] = array();
        } else {
            $data['id'] = $id;
            $data['ngo_insert_update'] = $this->db->get_where('user_table', array('id' => $id))->row_array();
            $data['ngo_doc_list'] = $this->db->get_where('ngo_doc_upload', array('ngoid' => $id))->result();
        }
        $this->load->view('Admin/ngoreg', $data);
    }
    public function ngoreg_insert_update($id = false)
    {
		if (!$this->session->userdata('username'))
        { 
            redirect(base_url('admin'));
        }
        $this->form_validation->set_message('required', 'The {field} field cannot be empty ');
        $this->form_validation->set_message('valid_email', 'The {field} field is not valid');
        $this->form_validation->set_message('numeric', 'The {field} field must be in number');
        $this->form_validation->set_message('is_unique', 'The {field} already exists');
        if ($id == "") {
            $this->form_validation->set_rules('ngo_name', 'Organisation Name', 'required|min_length[2]|max_length[50]|is_unique[user_table.name]');
            $this->form_validation->set_rules('email', 'Email', 'valid_email|required|is_unique[user_table.email]');
            $this->form_validation->set_rules('phone', 'Phone No.', 'required|min_length[10]|max_length[10]|numeric|is_unique[user_table.phone]');
        } else {
            $this->form_validation->set_rules('ngo_name', 'Organisation Name', 'required|min_length[2]|max_length[50]');
            $this->form_validation->set_rules('email', 'Email', 'valid_email|required');
            $this->form_validation->set_rules('phone', 'Phone No.', 'required|min_length[10]|max_length[10]|numeric');
        }
        $this->form_validation->set_rules('ngo_regno', 'Organisation Register No', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('door', 'Door', 'required');
        $this->form_validation->set_rules('street', 'Street', 'required');
        $this->form_validation->set_rules('area', 'Area', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('pincode', 'Pincode', 'required|min_length[6]|max_length[6]|numeric');
        $this->form_validation->set_rules('contact_person', 'Contact Person', 'required');
        $this->form_validation->set_rules('contact_person_phone', 'Contact Person Phone No.', 'required|min_length[10]|max_length[10]|numeric');
        $this->form_validation->set_rules('contact_person_role', 'Contact Person Role', 'required');
        $this->form_validation->set_rules('fblink', 'fb link', 'required');
        $this->form_validation->set_rules('comments', 'Comments / Questions', 'required');

        $now = new DateTime();
        //$this->load->library('session');
        $userName = "kumaran"; //$this->session->userdata('userName');
        $log = $userName . "_" . $now->format('Y-m-d H:i:s');
        $data['id'] = $id;
        $ngo_name = $this->input->post('ngo_name');
        $email = $this->input->post('email');
        $password = $this->generateRandomString($length = 8);
        $pwd = $this->encryption->encrypt($password);
        $data['ngo_insert_update'] = array
            (
            'ngo_regno' => $this->input->post('ngo_regno'),
            'email' => $email,
            'phone' => $this->input->post('phone'),
            'door' => $this->input->post('door'),
            'street' => $this->input->post('street'),
            'area' => $this->input->post('area'),
            'city' => $this->input->post('city'),
            'state' => $this->input->post('state'),
            'country' => $this->input->post('country'),
            'pincode' => $this->input->post('pincode'),
            'contact_person' => $this->input->post('contact_person'),
            'contact_person_phone' => $this->input->post('contact_person_phone'),
            'contact_person_role' => $this->input->post('contact_person_role'),
            'fblink' => $this->input->post('fblink'),
            'comments' => $this->input->post('comments'),
            'kycdoc' => $this->input->post('kycdoc'),
            'kyc_status' => "Pending",
            'status' => $this->input->post('status'),
            'role_id' => "2", // role_id 2 indicates role of ngo
            'log' => $log,
        );
        if ($id == "") {
            $data['ngo_insert_update']['name'] = $ngo_name;
            $data['ngo_insert_update']['password'] = $pwd;
        }
        if ($this->form_validation->run() == false) {
            $this->load->view('Admin/ngoreg', $data);
        } else {
            if ($id == "") {
                $insert_id = $this->NgoModel->ngoinsert($data['ngo_insert_update']);
                if ($insert_id) {
                    if ($this->input->post('status') == "Active") {
                        $this->mailfunction_credential($ngo_name, $pwd, $email);
                    } else {
                        $this->mailfunction_notification($ngo_name, $email);
                    }
                    if ($this->input->post('kycdoc') == "upload_doc") {
                        $data['id'] = $insert_id;
                        $this->load->view('Admin/doc_update', $data);
                    }
                }
            } else {
                $check_status = $this->db->get_where('user_table', array('id' => $id, 'status' => "Active"))->num_rows();
                $this->NgoModel->ngoupdate($data['ngo_insert_update'], $id);
                if ($check_status == 1) {
                    $this->get_ngo_list();
                } else {
                    $this->mailfunction_credential($ngo_name, $pwd, $email);
                    $this->get_ngo_list();
                }
            }
        }
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
    public function ngo_doc_view($id)
    {
		if (!$this->session->userdata('username'))
        { 
            redirect(base_url('admin'));
        }
        $data['id'] = $id;
        $this->load->view('Admin/doc_update', $data);
    }
    public function ngo_doc_insert_update()
    {
		if (!$this->session->userdata('username'))
        { 
            redirect(base_url('admin'));
        }
        $ngoid = $this->input->post('userid');
        $get_ngo_name = $this->db->get_where('user_table', array('id' => $ngoid))->row();
        $pathToUpload = 'upload/' . $get_ngo_name->name;
        if (!file_exists($pathToUpload)) {
            mkdir($pathToUpload, 0777, true);
        }
        $config['upload_path'] = $pathToUpload;
        $config['allowed_types'] = 'jpg|png|jpeg|pdf|docx|doc';
        $config['max_size'] = 5024;
        $config['encrypt_name'] = false;
        if ($_FILES['proof_of_reg']['name']) {
            $ext = explode(".", $_FILES['proof_of_reg']['name']);
            $ext2 = end($ext);
            $filename = $ngoid . "_Proof_of_Registration";
            $config["file_name"] = $filename;
            $fullPath = base_url($pathToUpload . '/' . $filename . '.' . $ext2);
            $data['doc_upload'] = array(
                'ngoid' => $ngoid,
                'status' => 'Active',
                'fullpath' => $fullPath,
                'filename' => $filename . '.' . $ext2,
                'filename_without_ext' => $filename,
            );
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $check_file_exist = $this->db->get_where('ngo_doc_upload', array('ngoid' => $ngoid, 'filename_without_ext' => $filename));
            if ($check_file_exist->num_rows() <= 0) {
                $doc_id = $this->NgoModel->doc_upload($data['doc_upload']);
            } else {
                $doc_id = "";
            }
            if ($doc_id) {

                if (!$this->upload->do_upload('proof_of_reg')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $this->upload->data("proof_of_reg");
                    $data = array('upload_data' => $this->upload->data());
                }
            } else {
                $row_det = $check_file_exist->row();
                $doc_update = $this->NgoModel->doc_update($data['doc_upload'], $row_det->id, $row_det->ngoid);
                if ($doc_update) {
                    $file_pattern = $pathToUpload . '/' . $filename . '*'; // Assuming your files are named like profiles/bb-x62.foo, profiles/bb-x62.bar, etc.
                    array_map("unlink", glob($file_pattern));
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('proof_of_reg')) {
                        $this->upload->data("proof_of_reg");
                    }
                }
            }
        }
        if ($_FILES['pan_ngo']['name']) {
            $ext = explode(".", $_FILES['pan_ngo']['name']);
            $ext2 = end($ext);
            $filename = $ngoid . "_PAN_Card_of_the_NGO";
            $config["file_name"] = $filename;
            $fullPath = base_url($pathToUpload . '/' . $filename . '.' . $ext2);
            $data['doc_upload'] = array(
                'ngoid' => $ngoid,
                'status' => 'Active',
                'fullpath' => $fullPath,
                'filename' => $filename . '.' . $ext2,
                'filename_without_ext' => $filename,
            );
            $check_file_exist = $this->db->get_where('ngo_doc_upload', array('ngoid' => $ngoid, 'filename_without_ext' => $filename));
            if ($check_file_exist->num_rows() <= 0) {
                $doc_id = $this->NgoModel->doc_upload($data['doc_upload']);
            } else {
                $doc_id = "";
            }
            if ($doc_id) {
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('pan_ngo')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $this->upload->data("pan_ngo");
                    $data = array('upload_data' => $this->upload->data());
                }
            } else {
                $row_det = $check_file_exist->row();
                $doc_update = $this->NgoModel->doc_update($data['doc_upload'], $row_det->id, $row_det->ngoid);
                if ($doc_update) {
                    $file_pattern = $pathToUpload . '/' . $filename . '*'; // Assuming your files are named like profiles/bb-x62.foo, profiles/bb-x62.bar, etc.
                    array_map("unlink", glob($file_pattern));
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('pan_ngo')) {
                        $this->upload->data("pan_ngo");
                    }
                }
            }
        }
        if ($_FILES['labs']['name']) {
            $ext = explode(".", $_FILES['labs']['name']);
            $ext2 = end($ext);
            $filename = $ngoid . "_Latest_Audited_Balance_Sheet";
            $config["file_name"] = $filename;
            $fullPath = base_url($pathToUpload . '/' . $filename . '.' . $ext2);
            $data['doc_upload'] = array(
                'ngoid' => $ngoid,
                'status' => 'Active',
                'fullpath' => $fullPath,
                'filename' => $filename . '.' . $ext2,
                'filename_without_ext' => $filename,
            );
            $check_file_exist = $this->db->get_where('ngo_doc_upload', array('ngoid' => $ngoid, 'filename_without_ext' => $filename));
            if ($check_file_exist->num_rows() <= 0) {
                $doc_id = $this->NgoModel->doc_upload($data['doc_upload']);
            } else {
                $doc_id = "";
            }
            if ($doc_id) {
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('labs')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $this->upload->data("labs");
                    $data = array('upload_data' => $this->upload->data());
                }
            } else {
                $row_det = $check_file_exist->row();
                $doc_update = $this->NgoModel->doc_update($data['doc_upload'], $row_det->id, $row_det->ngoid);
                if ($doc_update) {
                    $file_pattern = $pathToUpload . '/' . $filename . '.*'; // Assuming your files are named like profiles/bb-x62.foo, profiles/bb-x62.bar, etc.
                    array_map("unlink", glob($file_pattern));
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('labs')) {
                        $this->upload->data("labs");
                    }
                }
            }
        }
        if ($_FILES['form_12A']['name']) {
            $ext = explode(".", $_FILES['form_12A']['name']);
            $ext2 = end($ext);
            $filename = $ngoid . "_Form_12_A_for_IT_Exemption";
            $config["file_name"] = $filename;
            $fullPath = base_url($pathToUpload . '/' . $filename . '.' . $ext2);
            $data['doc_upload'] = array(
                'ngoid' => $ngoid,
                'status' => 'Active',
                'fullpath' => $fullPath,
                'filename' => $filename . '.' . $ext2,
                'filename_without_ext' => $filename,
            );
            $check_file_exist = $this->db->get_where('ngo_doc_upload', array('ngoid' => $ngoid, 'filename_without_ext' => $filename));
            if ($check_file_exist->num_rows() <= 0) {
                $doc_id = $this->NgoModel->doc_upload($data['doc_upload']);
            } else {
                $doc_id = "";
            }
            if ($doc_id) {
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('form_12A')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $this->upload->data("form_12A");
                    $data = array('upload_data' => $this->upload->data());
                }
            } else {
                $row_det = $check_file_exist->row();
                $doc_update = $this->NgoModel->doc_update($data['doc_upload'], $row_det->id, $row_det->ngoid);
                if ($doc_update) {
                    $file_pattern = $pathToUpload . '/' . $filename . '*'; // Assuming your files are named like profiles/bb-x62.foo, profiles/bb-x62.bar, etc.
                    array_map("unlink", glob($file_pattern));
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('form_12A')) {
                        $this->upload->data("form_12A");
                    }
                }
            }
        }
        if ($_FILES['fcra']['name']) {
            $ext = explode(".", $_FILES['fcra']['name']);
            $ext2 = end($ext);
            $filename = $ngoid . "_FCRA_registration_if_applicable";
            $config["file_name"] = $filename;
            $fullPath = base_url($pathToUpload . '/' . $filename . '.' . $ext2);
            $data['doc_upload'] = array(
                'ngoid' => $ngoid,
                'status' => 'Active',
                'fullpath' => $fullPath,
                'filename' => $filename . '.' . $ext2,
                'filename_without_ext' => $filename,
            );
            $check_file_exist = $this->db->get_where('ngo_doc_upload', array('ngoid' => $ngoid, 'filename_without_ext' => $filename));
            if ($check_file_exist->num_rows() <= 0) {
                $doc_id = $this->NgoModel->doc_upload($data['doc_upload']);
            } else {
                $doc_id = "";
            }
            if ($doc_id) {
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('fcra')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $this->upload->data("fcra");
                    $data = array('upload_data' => $this->upload->data());
                }
            } else {
                $row_det = $check_file_exist->row();
                $doc_update = $this->NgoModel->doc_update($data['doc_upload'], $row_det->id, $row_det->ngoid);
                if ($doc_update) {
                    $file_pattern = $pathToUpload . '/' . $filename . '*'; // Assuming your files are named like profiles/bb-x62.foo, profiles/bb-x62.bar, etc.
                    array_map("unlink", glob($file_pattern));
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('fcra')) {
                        $this->upload->data("fcra");
                    }
                }
            }
        }
        $get_doc_rows = $this->db->get_where('ngo_doc_upload', array('ngoid' => $ngoid))->num_rows();
        if ($get_doc_rows >= 1) {
            $doc_status = "Updated";
            $this->NgoModel->ngo_doc_upload_status($doc_status, $ngoid);
        }
        $this->get_ngo_list();
        /**
        for delete a file with any extention
        $file_pattern = "profiles/bb-x62.*" // Assuming your files are named like profiles/bb-x62.foo, profiles/bb-x62.bar, etc.
        array_map( "unlink", glob( $file_pattern ) );
         */
    }
    public function get_ngo_list()
    {
		if (!$this->session->userdata('username'))
        { 
            redirect(base_url('admin'));
        }
        $data['get_ngo_active_list'] = $this->db->get_where('user_table', array('status' => 'Active'))->result();
        $data['get_ngo_pending_list'] = $this->db->get_where('user_table', array('status' => 'Pending'))->result();
        $data['get_ngo_hold_list'] = $this->db->get_where('user_table', array('status' => 'Hold'))->result();
        $data['get_ngo_inactive_list'] = $this->db->get_where('user_table', array('status' => 'Inactive'))->result();
        $this->load->view('Admin/ngolist', $data);
    }
    public function mailfunction_credential($ngo_name, $pwd, $email)
    {
        $plain_password = $this->encryption->decrypt($pwd);
        $Mail_Subject = "Letzdonate Login Credential";
        $Mail_Message = 'Dear M/S ' . $ngo_name . ',<br>
		Welcome to Letzdonate,<br>
		Your Username : ' . $email . ' Password : ' . $plain_password . '<br>
		Thank you,<br>
		Admin<br>
		Letzdonate';
        sendEmail($email, $Mail_Subject, $Mail_Message);
    }
    public function mailfunction_notification($ngo_name, $email)
    {
        $Mail_Subject = "Letzdonate Registration Notification";
        $Mail_Message = 'Dear M/S ' . $ngo_name . ',<br>
		Welcome to Letzdonate,<br>
		Your Account Registered successfully, once administrator activate your account,<br>
		you will get a username and password to your registered email address<br>
		Thank you,<br>
		Admin<br>
		Letzdonate';
        sendEmail($email, $Mail_Subject, $Mail_Message);
    }
}