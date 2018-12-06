<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

public function __construct(){
parent::__construct();
$this->load->library('form_validation');
$this->load->model('auth_model');
}

public function index(){

if($this->session->userdata('user_has_login') != true ){
redirect(base_url());
} else {
$this->session->unset_userdata('login_message');
}

$data['logout_url'] = base_url('index.php/auth/logout');
$this->load->view('Dashboard', $data);
}

}