<?php
include "part/html_first.php";
include "part/header.php";
include "part/function_header.php";
?>

<!--MAIN-->
<div class="container-fluid">
	<div class="row">
		<?php include "part/sidenav_mahasiswa.php"; ?>
		<div class="col-sm-9">
			<br><h2 class='judul'>Rekrutmen Lembaga Kemahasiswaan/Kepanitiaan yang Saya Ikuti</h2><br>
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
					echo "</td></tr><tr><th>ID Formulir</th><td>".$row->id_formulir;
					echo "</td></tr><tr><th>Kategori</th><td>".$row->kategori_lowongan;
					echo "</td></tr><tr><th>Lingkup</th><td>".$row->lingkup_lowongan;
					echo "</td></tr><tr><th>Fakultas</th><td>".$row->fakultas_lowongan;
					echo "</td></tr><tr><th>Program Studi</th><td>".$row->prodi_lowongan;
					echo "</td></tr><tr><th>Deskripsi</th><td>".$row->deskripsi_lowongan;
					echo "</td></tr><tr><th>Kontak</th><td>".$row->kontak_lowongan;
					echo "</td></tr><tr><th>CV</th><td>".$row->cv;
					echo "</td></tr><tr><th>Posisi yang diajukan</th><td>".$row->posisi;
					echo "</td></tr></table>";
					echo "<form action='".$actionHapus."' method='post' enctype='multipart/form-data'>";
					echo "<input name='id_formulir' type ='hidden' value='".$row->id_formulir."'>";
					echo "<button class='tombol tombolwarna2' type='submit' style='align:left'>Batal Mengikuti</button></form>";
					
					}
					?>
				<?php
					if ($dataketemu!=0 && $dataketemu>9){
						echo"<div class='col-sm-12 centercontainer' style='background:#006680ff; color:white; padding:10px'>".$pagination."</div>";
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