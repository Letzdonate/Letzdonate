<?php
/**
 * NgoRegCtrl Class
 *
 * PHP Version 7
 *
 * @category Class
 * @package  Controllers
 * @author   Suryanand <suryanand000@gmail.com>
 * @license  ignovatesolutions <www.ignovatesolutions.com>
 * @version  GIT: 7
 * @link     http://www.ignovatesolutions.com
 */
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
    }
    public function ngoreg_view()
    {
        $this->load->view('Admin/ngoreg');
    }
    public function ngoreg_insert_update()
    {
        $this->form_validation->set_message('required', 'The {field} field cannot be empty ');
        $this->form_validation->set_message('valid_email', 'The {field} field is not valid');
        $this->form_validation->set_message('numeric', 'The {field} field must be in number');
        $this->form_validation->set_rules('ngo_name', 'Organisation Name', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('ngo_regno', 'Organisation Register No', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'valid_email|required');
        $this->form_validation->set_rules('phone', 'Phone No.', 'required|min_length[10]|max_length[10]|numeric');
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

        if ($this->form_validation->run() == false) {
            $this->load->view('Admin/ngoreg');
        } else {
            $data['ngoinsert'] = array
                (
                'ngo_name' => $this->input->post('ngo_name'),
                'ngo_regno' => $this->input->post('ngo_regno'),
                'email' => $this->input->post('email'),
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
                'status' => "Pending",
                'log' => $log,
            );
            $insert_id = $this->NgoModel->ngoinsert($data['ngoinsert']);
            if ($insert_id) {
                if ($this->input->post('kycdoc') == "upload_doc") {$data['insert_id'] = $insert_id;
                    $this->load->view('Admin/doc_update', $data);
                }
            } else {

            }
        }
    }
    public function test()
    {
        $this->load->view('Admin/doc_update');
    }
    public function test_insert()
    {
        $ngoid = $this->input->post('userid');

        $get_ngo_name = $this->db->get_where('ngo_details', array('id' => $ngoid))->row();
        $pathToUpload = 'upload/' . $get_ngo_name->ngo_name;

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
            );
            $doc_id = $this->NgoModel->doc_upload($data['doc_upload']);
            if ($doc_id) {
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('proof_of_reg')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $this->upload->data("proof_of_reg");
                    $data = array('upload_data' => $this->upload->data());
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
            );
            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            $doc_id = $this->NgoModel->doc_upload($data['doc_upload']);
            if ($doc_id) {

                if (!$this->upload->do_upload('pan_ngo')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $this->upload->data("pan_ngo");
                    $data = array('upload_data' => $this->upload->data());
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
            );
            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            $doc_id = $this->NgoModel->doc_upload($data['doc_upload']);
            if ($doc_id) {

                if (!$this->upload->do_upload('labs')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $this->upload->data("labs");
                    $data = array('upload_data' => $this->upload->data());
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
            );
            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            $doc_id = $this->NgoModel->doc_upload($data['doc_upload']);
            if ($doc_id) {

                if (!$this->upload->do_upload('form_12A')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $this->upload->data("form_12A");
                    $data = array('upload_data' => $this->upload->data());
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
            );
            $doc_id = $this->NgoModel->doc_upload($data['doc_upload']);
            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            if ($doc_id) {

                if (!$this->upload->do_upload('fcra')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $this->upload->data("fcra");
                    $data = array('upload_data' => $this->upload->data());
                }
            }
        }
        $get_doc_rows = $this->db->get_where('ngo_doc_upload', array('ngoid' => $ngoid))->num_rows();
        if ($get_doc_rows >= 1) {
            $doc_status = "Updated";
            $this->NgoModel->ngo_doc_upload_status($doc_status, $ngoid);
        }
    }
    public function testssf()
    {

    }
}
