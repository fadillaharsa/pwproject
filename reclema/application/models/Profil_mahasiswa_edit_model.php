<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil_mahasiswa_edit_model extends CI_Model
{
    public function saveEdit($username,$namafile)
    {
		$data['nama_mahasiswa'] = $this->input->post('nama_mahasiswa');
		$data['email_mahasiswa'] = $this->input->post('email_mahasiswa');
		$data['password_mahasiswa'] = $this->input->post('password_mahasiswa');
		$data['no_hp_mahasiswa'] = $this->input->post('no_hp_mahasiswa');
		$data['prodi_mahasiswa'] = $this->input->post('prodi_mahasiswa');
		$data['fakultas_mahasiswa'] = $this->input->post('fakultas_mahasiswa');
		$data['angkatan_mahasiswa'] = $this->input->post('angkatan_mahasiswa');
		$data['alamat_mahasiswa'] = $this->input->post('alamat_mahasiswa');
		$data['foto_mahasiswa'] = $namafile;
		$data['kontak_mahasiswa'] = $this->input->post('kontak_mahasiswa');
		$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$this->db->where('npm', $username);
		$this->db->update('mahasiswa', $data);
    }
}