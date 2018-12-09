<?php
class Profil_mahasiswa extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
		$this->load->model("Profil_mahasiswa_model");
	}
	public function index(){
		$this->page();
	}
	function page(){
		$data=[];
		$data['action_pencarian'] = base_url('index.php/pencarian/kustom');
		$data['logout_url'] = base_url('index.php/masuk/logout');
		$username_mahasiswa=$this->session->userdata('user_username');
		$data["hslquery"]=$this->Profil_mahasiswa_model->caridata($username_mahasiswa);
		$this->load->view("profil_mahasiswa",$data);
	}
}