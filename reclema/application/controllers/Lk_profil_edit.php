<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
   class Lk_profil_edit extends CI_Controller {
   
      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url'));
		 $this->load->model('Lk_profil_edit_model');
		 $this->load->model('Lk_profil_model');
      } 
	
	public function index(){
		$this->editprofil();
	}
	
	public function editprofil($data=array()) {
		$data['editAction'] = base_url('index.php/lk_profil_edit/process');
		$data['action_pencarian'] = base_url('index.php/pencarian/kustom');
		$data['logout_url'] = base_url('index.php/masuk/logout');
		$data['error']=(isset($data['error']))?$data['error']:"";
		$username_lembaga=$this->session->userdata('user_username');
		$data["hslquery"]=$this->Lk_profil_model->caridata($username_lembaga);
		$this->load->view('lk_profil_edit', $data);
	}
	
	public function process(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_lembaga', 'Nama Lembaga', 'required');	
		$this->form_validation->set_rules('password_lembaga', 'Password Lembaga', 'required');
		$this->form_validation->set_rules('email_lembaga', 'Email Lembaga', 'required');
			
		$config['upload_path']          = './upload/fotolk/';
		$config['allowed_types']        = 'png|jpg|gif';
		$config['overwrite']			= true;
		$config['max_size']             = 5000;

		$this->load->library('upload', $config);
		
		
         if ($this->form_validation->run() == FALSE) { 
			$data=[];
			$data['action_pencarian'] = base_url('index.php/pencarian/kustom');
			$data['logout_url'] = base_url('index.php/masuk/logout');
			$data['editAction'] = base_url('index.php/lk_profil_edit/process');
			$username_lembaga=$this->session->userdata('user_username');
			$data["hslquery"]=$this->Lk_profil_model->caridata($username_lembaga);
            $this->load->view('lk_profil_edit',$data); 
         } 
         else if (!$this->upload->do_upload()){
				$error = array('error' => $this->upload->display_errors());
				$this->editprofil($error);
			} else{
				$upload_data= $this->upload->data();
				$namafile = $upload_data['file_name'];
				$username=$this->session->userdata('user_username');
				$this->Lk_profil_edit_model->saveEdit($username,$namafile);
				redirect('lk_profil');
			}
			
		}
}