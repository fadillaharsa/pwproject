<?php
class Rekrutmen_saya_model extends CI_Model{
	function __construct(){
		parent::__construct();

		$this->load->database();
	}
	function getjrecord($username_mahasiswa){
		$jrec=$this->db->query("select DISTINCT * from lowongan, formulir where lowongan.id_lowongan=formulir.id_lowongan AND formulir.npm='".$username_mahasiswa."'")->num_rows();
		return $jrec;
	}
	function caridata($p=0,$jppage=3,$username_mahasiswa){
		$sqlstr="select DISTINCT * from lowongan, formulir where lowongan.id_lowongan=formulir.id_lowongan AND formulir.npm='".$username_mahasiswa."'";
		$sqlstr.="limit $p, $jppage ";
		$hslquery=$this->db->query($sqlstr);
		return $hslquery;
	}
	function hapusData($id_formulir){
		$this->db->where('id_formulir', $id_formulir);
		$this->db->delete('formulir');
	}
}
?>
