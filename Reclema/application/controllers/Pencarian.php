<?php
class Pencarian extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
		$this->load->model("Pencarian_model");
	}
	
	public function index(){
		$this->pagepencarian();
	}

	function page($p=0){
		$data['logout_url'] = base_url('index.php/masuk/logout');
		$jppage=9;
		$this->load->library('pagination');
		$config['base_url'] = site_url().'/pencarian/page/';
		$config['total_rows'] = $this->Pencarian_model->getjrecord();
		$config['per_page'] = $jppage; 
		$this->pagination->initialize($config); 

		$data["pagination"]=$this->pagination->create_links();
		$data["hslquery"]=$this->Pencarian_model->gettemanpage($p,$jppage);
		$data["judulapp"]="Baca Tabel Dengan Pagination ";
		$this->load->view("pencarian",$data);
	}
	
	function pagepencarian($p=0){
		$data['logout_url'] = base_url('index.php/masuk/logout');
		$jppage=9;
		$this->load->library('pagination');
		$config['base_url'] = site_url().'/pencarian/page/';
		$config['total_rows'] = $this->Pencarian_model->getjrecord2();
		$config['per_page'] = $jppage; 
		$this->pagination->initialize($config); 

		$data["pagination"]=$this->pagination->create_links();
		$data["hslquery"]=$this->Pencarian_model->contohfilterteman($p,$jppage);
		$data["judulapp"]="Baca Tabel Dengan Pagination ";
		$this->load->view("pencarian",$data);
	}

}
