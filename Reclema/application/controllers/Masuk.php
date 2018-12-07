<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Masuk extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('masuk_model');
	}
	public function index(){
		$this->login();
	}
	public function login(){
		$data=[];
		$data['title'] = "Sign In";
		$data['login_action'] = base_url('index.php/masuk/process');
		$data['register_url'] = base_url('index.php/masuk/register');
			if($this->session->userdata('user_has_login') == true ){
			redirect('dashboard');
			} else {
			$this->load->view('masuk', $data);
			}
		$this->session->unset_userdata('login_message');
	}

	public function process(){
		$process = $this->masuk_model->login();
		if($process ==true){
			redirect('dashboard');
			} else {
			redirect('masuk');
			}
	}

	public function logout(){
		$this->session->unset_userdata('user_has_login');
		$this->session->sess_destroy();
		redirect('home');
	}

}