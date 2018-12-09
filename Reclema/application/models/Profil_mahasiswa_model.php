<?php
class Profil_mahasiswa_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function caridata($username_mahasiswa){
		$sqlstr="select * from mahasiswa where npm='".$username_mahasiswa."'";
		$hslquery=$this->db->query($sqlstr);
		return $hslquery;
	}
}
?>
