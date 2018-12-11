<?php
class Rekrutmen_saya extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
		$this->load->model("Rekrutmen_saya_model");
	}
	
	public function index(){
		$this->page();
	}

	function page($p=0){
		$data=[];
		$data['action_pencarian'] = base_url('index.php/pencarian/kustom');
		$data['actionHapus'] = base_url('index.php/rekrutmen_saya/hapus');
		$data['logout_url'] = base_url('index.php/masuk/logout');
		$jppage=3;
		$this->load->library('pagination');
		$config['base_url'] = site_url().'/Rekrutmen_saya/page/';
		$username_mahasiswa=$this->session->userdata('user_username');
		$config['total_rows'] = $this->Rekrutmen_saya_model->getjrecord($username_mahasiswa);
		$config['per_page'] = $jppage; 
		$this->pagination->initialize($config); 
		$data["dataketemu"]= $config['total_rows'];
		$data["pagination"]=$this->pagination->create_links();
		$data["hslquery"]=$this->Rekrutmen_saya_model->caridata($p,$jppage,$username_mahasiswa);
		$this->load->view("rekrutmen_saya",$data);
	}
	function hapus(){
		$id_formulir = $this->input->post('id_formulir');
		$this->Rekrutmen_saya_model->hapusData($id_formulir);
		redirect ('rekrutmen_saya');
	}

}