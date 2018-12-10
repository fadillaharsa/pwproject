<?php
include "part/html_first.php";
include "part/header.php";
include "part/function_header.php";
?>

<div class="container-fluid">
	<div class="row">
		<?php include "part/sidenav_lk.php"; ?>
		<div class="col-sm-9">
			<br><h2>Daftar Recruitment Saya</h2><br>
			<center>
					<?php
					if ($dataketemu==0){
						echo "<br><br><p>Maaf, Anda belum membuat perekrutan, silakan akses menu 'Perekrutan' di sidebar kiri..</p><br><br>";
					}
					?>
			<center/>
			
			<?php
				$c=1;
				foreach($hslquery->result() as $row){
					echo "<h5 align='left'>Nama Perekrutan: ".$row->nama_lowongan."</h5>";
					echo "<table class=table><tr><th>ID Lowongan</th><td>".$row->id_lowongan;
					echo "</td></tr><tr><th>Kategori</th><td>".$row->kategori_lowongan;
					echo "</td></tr><tr><th>Lingkup</th><td>".$row->lingkup_lowongan;
					echo "</td></tr><tr><th>Fakultas</th><td>".$row->fakultas_lowongan;
					echo "</td></tr><tr><th>Program Studi</th><td>".$row->prodi_lowongan;
					echo "</td></tr><tr><th>Deskripsi</th><td>".$row->deskripsi_lowongan;
					echo "</td></tr><tr><th>Kontak</th><td>".$row->kontak_lowongan;
					echo "</td></tr></table><br>";
					}?>
				<?php
					if ($dataketemu!=0){
						echo"<div class='col-sm-12 centercontainer' style='background:#006680ff; color:white; padding:10px'>";
						echo $pagination;
						echo "</div>";
					}
				?>			
		</div>
			
	</div>
</div>

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";
?>