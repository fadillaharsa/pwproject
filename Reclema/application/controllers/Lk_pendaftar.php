<?php
class Lk_pendaftar extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
		$this->load->model("Lk_pendaftar_model");
	}
	
	public function index(){
		$this->page();
	}

	function page($p=0){
		$data=[];
		$data['action_pencarian'] = base_url('index.php/pencarian/kustom');
		$data['logout_url'] = base_url('index.php/masuk/logout');
		$jppage=9;
		$this->load->library('pagination');
		$config['base_url'] = site_url().'/lk_pendaftar/page/';
		$username_lembaga=$this->session->userdata('user_username');
		$config['total_rows'] = $this->Lk_pendaftar_model->getjrecord($username_lembaga);
		$config['per_page'] = $jppage; 
		$this->pagination->initialize($config); 
		$data["dataketemu"]= $config['total_rows'];
		$data["pagination"]=$this->pagination->create_links();
		$data["hslquery"]=$this->Lk_pendaftar_model->caridata($p,$jppage,$username_lembaga);
		$this->load->view("lk_pendaftar",$data);
	}
}