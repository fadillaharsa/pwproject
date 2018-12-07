<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
   class Daftar extends CI_Controller {
   
      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
      } 
	
      public function index() {
		  if($this->session->userdata('user_has_login') == true ){
			redirect('dashboard');
			}
         /* Load form validation library */ 
         $this->load->library('form_validation');
			
		 /* Validation rule */
		 $this->form_validation->set_rules('npm', 'NPM', 'required');	
		 $this->form_validation->set_rules('nama_mahasiswa', 'Nama', 'required');
		 $this->form_validation->set_rules('email_mahasiswa', 'Email', 'required|valid_email|callback_check_mahasiswa');
		 $this->form_validation->set_rules('password_mahasiswa', 'Password', 'required|min_length[6]|max_length[15]');
		 
			
         if ($this->form_validation->run() == FALSE) { 
            $this->load->view('daftar'); 
         } 
         else { 
                    $this->load->model('Daftar_model');
		    $this->Daftar_model->saveMahasiswa();
			redirect('home');
         }
      }
	  public function check_mahasiswa($email_mahasiswa)
	   {
	         $query = $this->db->where('email_mahasiswa', $email_mahasiswa)->get("mahasiswa");
		 if ($query->num_rows() > 0)
		    {
			 $this->form_validation->set_message('check_mahasiswa','The '.$email.' belongs to an existing account');
		        return FALSE;
		    }
		  else 
			  return TRUE;
	  }	
   }