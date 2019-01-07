<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
		$this->load->model("Home_model");
	}
	
	public function index(){
		$data=[];
		$data['logout_url'] = base_url('index.php/masuk/logout');
		$data['action_pencarian'] = base_url('index.php/pencarian/kustom');
		$jdata=8;
		$data["hslquery"]=$this->Home_model->caridata($jdata);
		$this->load->view('home', $data);
	}
	
}