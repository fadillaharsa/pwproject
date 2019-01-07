<?php
class Lk_info_perekrutan_model extends CI_Model{
	function __construct(){
		parent::__construct();

		$this->load->database();
	}
	function getjrecord($username_lembaga){
		$jrec=$this->db->query("select * from lowongan where username_lembaga='".$username_lembaga."'")->num_rows();
		return $jrec;
	}
	function caridata($p=0,$jppage=3,$username_lembaga){
		$sqlstr="select * from lowongan where username_lembaga='".$username_lembaga."'";
		$sqlstr.="limit $p, $jppage ";
		$hslquery=$this->db->query($sqlstr);
		return $hslquery;
	}
}
?>
