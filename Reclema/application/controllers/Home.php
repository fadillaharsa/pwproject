<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller{
	public function index(){
		$data['logout_url'] = base_url('index.php/masuk/logout');
		$this->load->view('home', $data);
	}
}