<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
   class Profil_mahasiswa_edit extends CI_Controller {
   
      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url'));
		 $this->load->model('Profil_mahasiswa_edit_model');
		 $this->load->model('Profil_mahasiswa_model');
      } 
	
	public function index(){
		$this->editprofil();
	}
	
	public function editprofil($data=array()) {
		$data['editAction'] = base_url('index.php/profil_mahasiswa_edit/process');
		$data['action_pencarian'] = base_url('index.php/pencarian/kustom');
		$data['logout_url'] = base_url('index.php/masuk/logout');
		$data['error']=(isset($data['error']))?$data['error']:"";
		$username_mahasiswa=$this->session->userdata('user_username');
		$data["hslquery"]=$this->Profil_mahasiswa_model->caridata($username_mahasiswa);
		$this->load->view('profil_mahasiswa_edit', $data);
	}
	
	public function process(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required');	
		$this->form_validation->set_rules('password_mahasiswa', 'Password Mahasiswa', 'required');
		$this->form_validation->set_rules('email_mahasiswa', 'Email Mahasiswa', 'required');
			
		$config['upload_path']          = './upload/fotomahasiswa/';
		$config['allowed_types']        = 'png|jpg|gif';
		$config['overwrite']			= true;
		$config['max_size']             = 5000;

		$this->load->library('upload', $config);
		
		
         if ($this->form_validation->run() == FALSE) { 
			$data=[];
			$data['action_pencarian'] = base_url('index.php/pencarian/kustom');
			$data['logout_url'] = base_url('index.php/masuk/logout');
			$data['editAction'] = base_url('index.php/Profil_mahasiswa_edit/process');
			$username_mahasiswa=$this->session->userdata('user_username');
			$data["hslquery"]=$this->Profil_mahasiswa_model->caridata($username_mahasiswa);
            $this->load->view('profil_mahasiswa_edit',$data); 
         } 
         else if (!$this->upload->do_upload()){
				$error = array('error' => $this->upload->display_errors());
				$this->editprofil($error);
			} else{
				$upload_data= $this->upload->data();
				$namafile = $upload_data['file_name'];
				$username=$this->session->userdata('user_username');
				$this->Profil_mahasiswa_edit_model->saveEdit($username,$namafile);
				redirect('profil_mahasiswa');
			}
			
		}
}