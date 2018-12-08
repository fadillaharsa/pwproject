<?php
class Pencarian extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
		$this->load->model("Pencarian_model");
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
		$config['base_url'] = site_url().'/pencarian/page/';
		$config['total_rows'] = $this->Pencarian_model->getjrecord();
		$config['per_page'] = $jppage; 
		$this->pagination->initialize($config); 

		$data["pagination"]=$this->pagination->create_links();
		$data["hslquery"]=$this->Pencarian_model->caridata($p,$jppage);
		$data["judulapp"]="Baca Tabel Dengan Pagination ";
		$this->load->view("pencarian",$data);
	}
	
	function kustom($p=0){
		$data=[];
		$data['action_pencarian'] = base_url('index.php/pencarian/kustom');
		$data['logout_url'] = base_url('index.php/masuk/logout');
		$jppage=9;
		$pencarian=$this->input->post('pencarian');
		$kategori=$this->input->post('kategori');
		$lingkup=$this->input->post('lingkup');
		$this->load->library('pagination');
		$config['base_url'] = site_url().'/pencarian/page/';
		$config['total_rows'] = $this->Pencarian_model->getjrecord2($pencarian,$kategori,$lingkup);
		$config['per_page'] = $jppage; 
		$this->pagination->initialize($config); 
		$data["pagination"]=$this->pagination->create_links();
		$data["hslquery"]=$this->Pencarian_model->caridatakustom($p,$jppage,$pencarian,$kategori,$lingkup);
		$data["judulapp"]="Baca Tabel Dengan Pagination ";
		$this->load->view("pencarian",$data);
	}


}
