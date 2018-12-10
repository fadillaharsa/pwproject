<?php
include "part/html_first.php";
include "part/header.php";
include "part/function_header.php";
?>

<!--MAIN-->
	<div class="slider">
		<div><img src="<?php echo base_url()?>/content/img1.jpg"></div>
		<div><img src="<?php echo base_url()?>/content/img2.jpg"></div>
		<div><img src="<?php echo base_url()?>/content/img3.jpg"></div>
	</div>
	
<div class="container-fluid">	
	<div class="row">
		<div class="col-sm-12">
			<h2 align="center">REKRUTMEN TERBARU</h2><br>
		</div>
		<div class="col-sm-12">
				<div class="row">				
					<?php
					$c=1;
					foreach($hslquery->result() as $row){
						echo "<div class='col-sm-3'><tr>";
						echo "<table style='width:100%;'><td>";
						echo "Nama Lowongan : ".$row->nama_lowongan;
						echo br();
						echo "Kategori : ".$row->kategori_lowongan;
						echo br();
						echo "Lingkup : ".$row->lingkup_lowongan;
						echo br();
						$id_lowongan=$row->id_lowongan;
						echo "<br><a class='tombol tombolwarna2' href='".site_url()."/detail_lowongan?id_lowongan=".$id_lowongan."'>Detail dan Pendaftaran</a>";
						echo "</td>";
						echo "</tr></table><br></div>";
					}
					?>
				</div>
		<br>
		<center><a href="<?php echo site_url()?>/pencarian" class="tombol tombolwarna1">Lihat Semua Rekrutmen</a></center>
		</div>
	</div>
	<br>
</div>	
<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";
?>
