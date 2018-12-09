<?php
class Pencarian_model extends CI_Model{
	function __construct(){
		parent::__construct();

		$this->load->database();
	}
	
	function getjrecord(){
		$jrec=$this->db->count_all("lowongan");
		return $jrec;
	}
	
	function getjrecord2($pencarian,$kategori,$lingkup){
	$jrec=$this->db->query("select * from lowongan where lingkup_lowongan LIKE '%".$lingkup."%' AND kategori_lowongan LIKE '%".$kategori."%' AND nama_lowongan LIKE '%".$pencarian."%'")->num_rows();
		return $jrec;
	}
	
	function caridata($p=0,$jppage=2){
		$sqlstr="select * from lowongan ";
		$sqlstr.="limit $p, $jppage ";
		$hslquery=$this->db->query($sqlstr);
		return $hslquery;
	}
	
	function caridatakustom($p=0,$jppage=2,$pencarian,$kategori,$lingkup){
		$sqlstr="select * from lowongan where lingkup_lowongan LIKE '%".$lingkup."%' AND kategori_lowongan LIKE '%".$kategori."%' AND nama_lowongan LIKE '%".$pencarian."%'";
		$sqlstr.="limit $p, $jppage ";
		$hslquery=$this->db->query($sqlstr);
		return $hslquery;
	}
}
?>
