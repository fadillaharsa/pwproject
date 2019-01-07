<?php
class Mahasiswa extends CI_Controller {
	function index() {
		$this->load->view("profil_mahasiswa");
	}
}