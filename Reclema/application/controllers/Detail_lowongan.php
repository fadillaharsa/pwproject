<?php
class Detail_lowongan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
		$this->load->model("Detail_lowongan_model");
	}
	public function index(){
		$this->showform();
	}
	function showform($data=array()) {
		$data['action_pencarian'] = base_url('index.php/pencarian/kustom');
		$data['logout_url'] = base_url('index.php/masuk/logout');
		$data['actionku'] = base_url('index.php/detail_lowongan/uploadfile');
		$data['error']=(isset($data['error']))?$data['error']:"";
		$id_lowongan=$_GET['id_lowongan'];
		$data["hslquery"]=$this->Detail_lowongan_model->caridata($id_lowongan);
		$this->load->view("detail_lowongan",$data);
	}
	
	function uploadfile (){
		$data=[];
		$data['action_pencarian'] = base_url('index.php/pencarian/kustom');
		$data['logout_url'] = base_url('index.php/masuk/logout');
		$data['actionku'] = base_url('index.php/detail_lowongan/uploadfile');
		$id_lowongan=$_GET['id_lowongan'];
		$data["hslquery"]=$this->Detail_lowongan_model->caridata($id_lowongan);
		$config['upload_path']          = './upload/cv/';
		$config['allowed_types']        = 'pdf';
		$config['overwrite']			= true;
		$config['max_size']             = 5000;
		$this->load->library('upload', $config);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('posisi', 'posisi', 'required');
		if ($this->form_validation->run() == FALSE) { 
            $this->load->view('detail_lowongan',$data); 
		}
		else {
			if (!$this->upload->do_upload()){
				$error = array('error' => $this->upload->display_errors());
				$this->showform($error);
			} else{
				$upload_data= $this->upload->data();
				$namafile = $upload_data['file_name'];
				$username=$this->session->userdata('user_username');
				$this->Detail_lowongan_model->saveFormulir($username,$id_lowongan,$namafile);
				redirect('Rekrutmen_saya');
			}
		}
	}
}