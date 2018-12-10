<?php
class Detail_lowongan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
		$this->load->model("Detail_lowongan_model");
	}
	public function index($id_lowongan = NULL){
		$data=[];
		$data['action_pencarian'] = base_url('index.php/pencarian/kustom');
		$data['logout_url'] = base_url('index.php/masuk/logout');
		$idLowongan=$_GET['id_lowongan'];
		$data["hslquery"]=$this->Detail_lowongan_model->caridata($idLowongan);
		$this->load->view("detail_lowongan",$data);
	}
}