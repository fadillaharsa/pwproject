<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lk_perekrutan_model extends CI_Model
{
    public function savePerekrutan($username)
    {
		$data['nama_lowongan'] = $this->input->post('nama_lowongan');
		$data['kategori_lowongan'] = $this->input->post('kategori_lowongan');
		$data['lingkup_lowongan'] = $this->input->post('lingkup_lowongan');
		$data['prodi_lowongan'] = $this->input->post('prodi_lowongan');
		$data['fakultas_lowongan'] = $this->input->post('fakultas_lowongan');
		$data['deskripsi_lowongan'] = $this->input->post('deskripsi_lowongan');
		$data['kontak_lowongan'] = $this->input->post('kontak_lowongan');
		$data['username_lembaga'] = $username;
		$this->db->insert('lowongan', $data);
    }
}