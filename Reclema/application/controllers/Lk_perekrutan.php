<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
   class Lk_perekrutan extends CI_Controller {
   
      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
      } 
	
	public function index(){
		$this->rekrut();
	}
		
      public function rekrut() {
		$dataku=[];
		$dataku['rekrutAction'] = base_url('index.php/Lk_perekrutan/process');
		$dataku['action_pencarian'] = base_url('index.php/pencarian/kustom');
		$dataku['logout_url'] = base_url('index.php/masuk/logout');
		$this->load->view('lk_perekrutan', $dataku);
	}
	  
		public function process(){
			         /* Load form validation library */ 
         $this->load->library('form_validation');
		
		/* Validation rule */
		$this->form_validation->set_rules('nama_lowongan', 'Nama Lowongan', 'required');	
		$this->form_validation->set_rules('kategori_lowongan', 'Kategori', 'required');
		$this->form_validation->set_rules('lingkup_lowongan', 'Lingkup', 'required');
		$this->form_validation->set_rules('prodi_lowongan', 'Program Studi', 'required');
		$this->form_validation->set_rules('fakultas_lowongan', 'Fakultas', 'required');
		$this->form_validation->set_rules('deskripsi_lowongan', 'Deskripsi', 'required');
		$this->form_validation->set_rules('kontak_lowongan', 'Kontak', 'required');				 
			
         if ($this->form_validation->run() == FALSE) { 
			$dataku=[];
			$dataku['rekrutAction'] = base_url('index.php/Lk_perekrutan/process');
			$dataku['action_pencarian'] = base_url('index.php/pencarian/kustom');
			$dataku['logout_url'] = base_url('index.php/masuk/logout');
            $this->load->view('lk_perekrutan',$dataku); 
         } 
         else {
			$username=$this->session->userdata('user_username');
            $this->load->model('Lk_perekrutan_model');
		    $this->Lk_perekrutan_model->savePerekrutan($username);
			redirect('lk_info_perekrutan');
         }
			
		}
}