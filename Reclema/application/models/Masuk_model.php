<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Masuk_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function login(){
		$this->form_validation->set_rules('inputnpm', 'npm', 'required');
		$this->form_validation->set_rules('inputPassword', 'password', 'required');

		if ($this->form_validation->run() == true) {
			$required=array(
			'npm' => $this->input->post('inputnpm',true)
			,'password_mahasiswa' => $this->input->post('inputPassword',true)
			);
			$auth=$this->db->where($required)->get('mahasiswa');
			$data=$auth->row_array();

			if($auth->num_rows()==1){
				$this->session->set_userdata('user_has_login',true);
				$success=true;
			} else {
				$param=array(
				'npm' => $this->input->post('inputnpm',true)
				);
				$auth=$this->db->where($param)->get('mahasiswa');
				$data=$auth->row_array();

				if($required['npm'] == $data['npm']){
					$this->session->set_userdata('login_message','Maaf, Password Salah!');
					$this->session->set_userdata('login_valid',$required['npm']);
				} else{
					$this->session->set_userdata('login_message','Maaf, NPM atau Password Salah!');
				}
				
				$success = false;
			}
		} else {
			$this->session->set_userdata('login_message','Maaf, NPM atau Password Salah!');
			$success = false;
		}
		return $success;
	}
	
	function loginLK(){
		$this->form_validation->set_rules('inputUsernameLembaga', 'username_lembaga', 'required');
		$this->form_validation->set_rules('inputPasswordLembaga', 'password_lembaga', 'required');

		if ($this->form_validation->run() == true) {
			$required=array(
			'username_lembaga' => $this->input->post('inputUsernameLembaga',true)
			,'password_lembaga' => $this->input->post('inputPasswordLembaga',true)
			);
			$auth=$this->db->where($required)->get('lembaga');
			$data=$auth->row_array();

			if($auth->num_rows()==1){
				$this->session->set_userdata('user_has_login',true);
				$success=true;
			} else {
				$param=array(
				'username_lembaga' => $this->input->post('inputUsernameLembaga',true)
				);
				$auth=$this->db->where($param)->get('lembaga');
				$data=$auth->row_array();

				if($required['username_lembaga'] == $data['username_lembaga']){
					$this->session->set_userdata('login_message','Maaf, Password Salah!');
					$this->session->set_userdata('login_valid',$required['username_lembaga']);
				} else{
					$this->session->set_userdata('login_message','Maaf, Username atau Password Salah!');
				}
				
				$success = false;
			}
		} else {
			$this->session->set_userdata('login_message','Maaf, Username atau Password Salah!');
			$success = false;
		}
		return $success;
	}
}