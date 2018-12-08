<?php
class Lk_profil_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function caridata($username_lembaga){
		$sqlstr="select * from lembaga where username_lembaga='".$username_lembaga."'";
		$hslquery=$this->db->query($sqlstr);
		return $hslquery;
	}
}
?>
