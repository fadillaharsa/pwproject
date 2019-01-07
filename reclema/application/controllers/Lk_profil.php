<?php
class Lk_profil extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
		$this->load->model("Lk_profil_model");
	}
	public function index(){
		$this->page();
	}
	function page(){
		$data=[];
		$data['action_pencarian'] = base_url('index.php/pencarian/kustom');
		$data['logout_url'] = base_url('index.php/masuk/logout');
		$username_lembaga=$this->session->userdata('user_username');
		$data["hslquery"]=$this->Lk_profil_model->caridata($username_lembaga);
		$this->load->view("lk_profil",$data);
	}
}