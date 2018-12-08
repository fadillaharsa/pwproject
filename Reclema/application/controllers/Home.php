<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
		$this->load->model("Pencarian_model");
	}
	
	public function index(){
		$this->beranda();
	}
	public function beranda(){
		$data=[];
		$data['logout_url'] = base_url('index.php/masuk/logout');
		$data['action_pencarian'] = base_url('index.php/home/caridata');
		$this->load->view('home', $data);
	}
	
	function caridata($p=0){
		$jppage=9;
		$this->load->library('pagination');
		$config['base_url'] = site_url().'/pencarian/page/';
		$pencarian=$this->input->post('pencarian');
		$kategori=$this->input->post('kategori');
		$lingkup=$this->input->post('lingkup');
		$config['total_rows'] = $this->Pencarian_model->getjrecord2($pencarian,$kategori,$lingkup);
		$config['per_page'] = $jppage; 
		$this->pagination->initialize($config); 

		$data["pagination"]=$this->pagination->create_links();
		$data["hslquery"]=$this->Pencarian_model->contohfilterteman($p,$jppage,$pencarian,$kategori,$lingkup);
		$data["judulapp"]="Baca Tabel Dengan Pagination ";
		$this->load->view("pencarian",$data);
	}
}