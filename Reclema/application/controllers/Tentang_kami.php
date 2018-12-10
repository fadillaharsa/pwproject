<?php
class Tentang_kami extends CI_Controller {
	function index() {
		$data=[];
		$data['action_pencarian'] = base_url('index.php/pencarian/kustom');
		$data['logout_url'] = base_url('index.php/masuk/logout');
		$this->load->view('tentang_kami',$data);
	}
}