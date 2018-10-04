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

class ProjectCtrl extends CI_Controller
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
        $this->load->model('ProjectModel');
		/* if ( ! $this->session->userdata('user_id'))
        { 
            redirect(base_url('login'));
        } */
    }
    public function project_view($id = false)
    {
       
        if ($id == "") {
            $data['id'] = "";
            $data['project_insert_update'] = array(
            'proj_name' => "",
            'proj_category' => "",
            'proj_desc' => "",
            'story_paragraph1' =>"",
            'story_paragraph2' =>"",
            'story_paragraph3' =>"",
			'proj_scope' =>"",
			'proj_amount' =>"",
			'proj_target_date' =>"",
            );
        } else {
            $data['id'] = $id;
            $data['project_insert_update'] = $this->db->get_where('project_details', array('id' => $id))->row_array();
			$data['proj_img_list']=$this->db->get_where('proj_img', array('proj_id'=> $id))->result();
			$data['proj_doc_list']=$this->db->get_where('proj_docs', array('proj_id'=> $id))->result();
        } 
		$data['proj_category'] = $this->db->get('categ_master')->result();
        $this->load->view('Admin/projectentry', $data);
    }
    public function project_insert_update($id = false)
    {
      
        $this->form_validation->set_message('required', 'The {field} field cannot be empty ');
        if ($id == "") {
            $this->form_validation->set_rules('proj_name', 'Project Name', 'required|min_length[2]|max_length[255]|is_unique[categ_master.categ_name]');
        } else {
            $this->form_validation->set_rules('proj_name', 'Project Name', 'required|min_length[2]|max_length[255]');
        }
		$data['id']=$id;
		$this->form_validation->set_rules('proj_category', 'Project Category', 'required|min_length[1]|max_length[500]'); 
		$this->form_validation->set_rules('proj_desc', 'Project Description', 'required|min_length[2]|max_length[500]'); 
		$this->form_validation->set_rules('paragraph1', 'Story Paragraph 1', 'required|min_length[2]|max_length[1500]'); 
		$this->form_validation->set_rules('paragraph2', 'Story Paragraph 2', 'required|min_length[2]|max_length[1500]'); 
		$this->form_validation->set_rules('proj_amount', 'Project Amount', 'required|min_length[2]|max_length[500]'); 
        $now = new DateTime();
        $userName = "kumaran"; //$this->session->userdata('userName');
        $log = $userName . "_" . $now->format('Y-m-d H:i:s');
		$proj_scope=$this->input->post('proj_scope');
		if($proj_scope == "Recurring")
		{
			$scope="Recurring";
		}
		else
		{
			$scope="Target";
			$this->form_validation->set_rules('proj_amount', 'Project Amount', 'required|min_length[2]|max_length[500]'); 
		}
		$data['proj_category'] = $this->db->get('categ_master')->result();
        $data['project_insert_update'] = array
            (
            'proj_category' => $this->input->post('proj_category'),
            'proj_desc' => $this->input->post('proj_desc'),
            'story_paragraph1' => $this->input->post('paragraph1'),
            'story_paragraph2' => $this->input->post('paragraph2'),
            'story_paragraph3' => $this->input->post('paragraph3'),
			'proj_scope' => $scope,
			'proj_amount' => $this->input->post('proj_amount'),
			'proj_target_date' => $this->input->post('proj_target_date'),
            'log' => $log,
        );
		if($id == "")
		{
		  $data['project_insert_update']['proj_name'] = $this->input->post('proj_name');
		}
		if($this->session->userdata('role_id') == 1){
			$data['project_insert_update']['status']="Active";
		}
		else{
			$data['project_insert_update']['status']="Pending";
		}
		 
         if ($this->form_validation->run() == false) {
            $data['id'] = "";
            $this->load->view('Admin/projectentry', $data);
        } else {
            if ($id == "") {
              
                $insert_id = $this->ProjectModel->proj_insert($data['project_insert_update']);
                if ($insert_id) {
                    $this->session->set_flashdata('msg', "1");
                   $this->proj_doc_upload_view($insert_id);
                } else {
                    $this->session->set_flashdata('msg', "0");
                    redirect(base_url('categentry'), 'refresh');
                }
            } else {
                $afftected_rows = $this->ProjectModel->update_proj($id, $data['project_insert_update']);
                if ($afftected_rows) {
                    $this->session->set_flashdata('msg', "1");
                    redirect(base_url('categentry'), 'refresh');
                } else {
                    $this->session->set_flashdata('msg', "0");
                    redirect(base_url('categentry'), 'refresh');
                }
            }
        } 
    }
    public function proj_doc_upload_view($id=false)
    {
		$data['id']="1";
        $this->load->view('Admin/project_doc_upload', $data);
    }
    public function proj_doc_upload()
    {
		$proj_id=$this->input->post('proj_id');
		
		$get_proj_name=$this->db->get_where('project_details', array('id'=> $proj_id))->row();
		
        $data = array();
        // If file upload form submitted
        if($this->input->post('action')) {
			if(!empty($_FILES['images']['name'])){
		$pathToUpload='upload/Project/'.$get_proj_name->proj_name.'/Image';
		
		if (!file_exists($pathToUpload))
		{
			mkdir($pathToUpload, 0777, TRUE);
		}
		$files = $_FILES;	
		$filesCount = count($_FILES['images']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['images']['name']     = $files['images']['name'][$i];
                $_FILES['images']['type']     = $files['images']['type'][$i];
                $_FILES['images']['tmp_name'] = $files['images']['tmp_name'][$i];
                $_FILES['images']['error']     = $files['images']['error'][$i];
                $_FILES['images']['size']     = $files['images']['size'][$i];
				$file_name = explode(".", $_FILES['images']['name']);
				$filename = $proj_id.'_'.reset($file_name);
        $config['upload_path'] = $pathToUpload;
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = 5024;
		$config['encrypt_name'] = false; 
		$config["file_name"] =$proj_id.'_'.$_FILES['images']['name'];
             
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                // Upload file to server
                if($this->upload->do_upload('images')){
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['filename'] = $fileData['file_name'];
					$uploadData[$i]['filename_without_ext'] = $filename;
                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
					$uploadData[$i]['fullPath'] = base_url($pathToUpload.'/'.$fileData['file_name']);
					$uploadData[$i]['proj_id'] = $proj_id;
					$uploadData[$i]['status'] = "Active";
					
                }
			}
			  if(!empty($uploadData)){
                // Insert files data into the database
                $insert = $this->ProjectModel->upload_proj_img($uploadData);
                
                // Upload status message
                $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
            }
			}
			if(!empty($_FILES['document']['name'])){
				$pathToUpload='upload/Project/'.$get_proj_name->proj_name.'/Documents';
		
		if (!file_exists($pathToUpload))
		{
			mkdir($pathToUpload, 0777, TRUE);
		}
		 $files = $_FILES;
            $filesCount = count($_FILES['document']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['document']['name']     = $files['document']['name'][$i];
                $_FILES['document']['type']     = $files['document']['type'][$i];
                $_FILES['document']['tmp_name'] = $files['document']['tmp_name'][$i];
                $_FILES['document']['error']     = $files['document']['error'][$i];
                $_FILES['document']['size']     = $files['document']['size'][$i];
               $file_name = explode(".", $_FILES['document']['name']);
				$filename = $proj_id.'_'.reset($file_name);
        $config1['upload_path'] = $pathToUpload;
		$config1['allowed_types'] = 'pdf|docx|doc';
		$config1['max_size'] = 5024;
		$config1['encrypt_name'] = false; 
		$config1["file_name"] =$proj_id.'_'.$_FILES['document']['name'];
             
                // Load and initialize upload library
                $this->load->library('upload', $config1);
                $this->upload->initialize($config1);
                
                // Upload file to server
                if($this->upload->do_upload('document')){
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData1[$i]['filename'] = $fileData['file_name'];
					$uploadData1[$i]['filename_without_ext'] = $filename;
                    $uploadData1[$i]['uploaded_on'] = date("Y-m-d H:i:s");
					$uploadData1[$i]['fullPath'] = base_url($pathToUpload.'/'.$fileData['file_name']);
					$uploadData1[$i]['proj_id'] = $proj_id;
					$uploadData1[$i]['status'] = "Active";
					
                }
			}
			  if(!empty($uploadData1)){
                // Insert files data into the database
                $insert = $this->ProjectModel->upload_proj_doc($uploadData1);
                
                // Upload status message
                $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                $this->session->set_flashdata('msg',$statusMsg);
            }
			}
			
    }
	}
	function proj_list_view(){
		$data['get_proj_active_list']=$this->db->get_where('project_details', array('status'=>'Active'))->result();
		$data['get_proj_pending_list']=$this->db->get_where('project_details', array('status'=>'Pending'))->result();
		$data['get_proj_completed_list']=$this->db->get_where('project_details', array('status'=>'Completed'))->result();
		$this->load->view('Admin/projectlist',$data);
	}
}
