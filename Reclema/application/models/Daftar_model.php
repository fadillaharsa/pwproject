<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftar_model extends CI_Model
{
    public function saveMahasiswa()
    {
		$data['npm'] = $this->input->post('npm');
		$data['nama_mahasiswa'] = $this->input->post('nama_mahasiswa');
		$data['email_mahasiswa'] = $this->input->post('email_mahasiswa');
		$data['password_mahasiswa'] = $this->input->post('password_mahasiswa');
		$this->db->insert('mahasiswa', $data);
		$this->session->set_userdata('user_has_login',true);
		$this->session->set_userdata('user_username',$data['npm']);
    }
}