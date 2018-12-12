<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lk_profil_edit_model extends CI_Model
{
    public function saveEdit($username,$namafile)
    {
		$data['nama_lembaga'] = $this->input->post('nama_lembaga');
		$data['email_lembaga'] = $this->input->post('email_lembaga');
		$data['password_lembaga'] = $this->input->post('password_lembaga');
		$data['prodi_lembaga'] = $this->input->post('prodi_lembaga');
		$data['fakultas_lembaga'] = $this->input->post('fakultas_lembaga');
		$data['lingkup_lembaga'] = $this->input->post('lingkup_lembaga');
		$data['alamat_lembaga'] = $this->input->post('alamat_lembaga');
		$data['kategori_lembaga'] = $this->input->post('kategori_lembaga');
		$data['kontak_lembaga'] = $this->input->post('kontak_lembaga');
		$data['logo_lembaga'] = $namafile;
		$this->db->where('username_lembaga', $username);
		$this->db->update('lembaga', $data);
    }
}