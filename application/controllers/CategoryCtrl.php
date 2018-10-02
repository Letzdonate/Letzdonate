<?php
/**
 * CategoryCtrl Class
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

class CategoryCtrl extends CI_Controller
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
        $this->load->model('CategoryModel');
    }
    public function categ_view($id = false)
    {
        if ($id == "") {
            $data['id'] = "";
            $data['categ_insert_update'] = array(
                'categ_name' => "",
                'categ_desc' => "",
            );
        } else {
            $data['id'] = $id;
            $data['categ_insert_update'] = $this->db->get_where('categ_master', array('id' => $id))->row_array();
        }
        $this->load->view('Admin/categ_entry', $data);
    }
    public function categ_insert_update($id = true)
    {
        
        $this->form_validation->set_message('required', 'The {field} field cannot be empty ');
        if($id == ""){
            $this->form_validation->set_rules('categ_name', 'Category Name', 'required|min_length[2]|max_length[255]|is_unique[categ_master.categ_name]');
        }else{
            $this->form_validation->set_rules('categ_name', 'Category Name', 'required|min_length[2]|max_length[255]');
        }$this->form_validation->set_rules('categ_desc', 'Category Description', 'required|min_length[2]|max_length[500]');
        $now = new DateTime();
        $userName = "kumaran"; //$this->session->userdata('userName');
        $log = $userName . "_" . $now->format('Y-m-d H:i:s');
        $data['categ_insert_update'] = array
        (
            'categ_desc' => $this->input->post('categ_desc'),
            'status' => 'Active',
            'log' => $log,
        );

        if ($this->form_validation->run() == false) {
            $data['id'] = "";
            $data['categ_insert_update']['categ_name']="";
            $this->load->view('Admin/categ_entry',$data);
        } else {
            if($id == ""){
                $data['categ_insert_update']['categ_name'] =  $this->input->post('categ_name');
                $insert_id = $this->CategoryModel->categinsert($data['categ_insert_update']);
                if ($insert_id) {
                    $this->session->set_flashdata('msg', "1");
                    $this->categ_view();
                } else {
                    $this->session->set_flashdata('msg', "0");
                    $this->categ_view();
                }
            } else{
              $afftected_rows= $this->CategoryModel->update_categ_list($id,$data['categ_insert_update']);
                if ($afftected_rows) {
                   $this->session->set_flashdata('msg', "1");
                  $this->categ_view();
                } else {
                    $this->session->set_flashdata('msg', "0");
                  $this->categ_view();
                }
            }
        }
    }
    public function categ_list()
    {
        $data['get_categ_list'] = $this->CategoryModel->get_categ_list();
        $this->load->view('Admin/categ_list', $data);
    }
    public function categ_delete($id = false)
    {
        $data['del_categ_list'] = $this->CategoryModel->del_categ_list($id);
        $data['get_categ_list'] = $this->CategoryModel->get_categ_list();
        $this->load->view('Admin/categ_list', $data);
    }
}
