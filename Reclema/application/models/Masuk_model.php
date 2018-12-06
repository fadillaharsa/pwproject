<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Masuk_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function login(){
		$this->form_validation->set_rules('inputEmail', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('inputPassword', 'password', 'required');

		if ($this->form_validation->run() == true) {
			$required=array(
			'email_mahasiswa' => $this->input->post('inputEmail',true)
			,'password_mahasiswa' => $this->input->post('inputPassword',true)
			);
			$auth=$this->db->where($required)->get('mahasiswa');
			$data=$auth->row_array();

			if($auth->num_rows()==1){
				$this->session->set_userdata('user_has_login',true);
				$success=true;
			} else {
				$param=array(
				'email_mahasiswa' => $this->input->post('inputEmail',true)
				);
				$auth=$this->db->where($param)->get('mahasiswa');
				$data=$auth->row_array();

				if($required['email_mahasiswa'] == $data['email_mahasiswa']){
					$this->session->set_userdata('login_message','Maaf, Password Salah!');
					$this->session->set_userdata('login_valid',$required['email_mahasiswa']);
				} else{
					$this->session->set_userdata('login_message','Maaf, Email atau Password Salah!');
				}
				
				$success = false;
			}
		} else {
			$this->session->set_userdata('login_message','Maaf, Email atau Password Salah!');
			$success = false;
		}
		return $success;
	}
}