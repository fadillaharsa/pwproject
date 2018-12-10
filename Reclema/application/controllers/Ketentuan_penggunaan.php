<?php
	class Ketentuan_penggunaan extends CI_Controller {
	public function index(){
		$data=[];
		$data['action_pencarian'] = base_url('index.php/pencarian/kustom');
		$data['logout_url'] = base_url('index.php/masuk/logout');
		$this->load->view('ketentuan_penggunaan',$data);
		}
	}