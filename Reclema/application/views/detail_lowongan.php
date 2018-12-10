<?php
include "part/html_first.php";
include "part/header.php";
include "part/function_header.php";
?>


<!--MAIN-->
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3" style="background: #008080; color: white">
			<?php
				include "part/function_sidebar.php";
			?>
		</div>
		<div class="col-sm-9">
			<h2>Daftar Recruitment Lembaga Kemahasiswaan Kepanitiaan</h2>
			<table class="table">
			<?php
			$c=1;
			foreach($hslquery->result() as $row){
					echo "<table class=table><tr><th>ID Lowongan</th><td>".$row->id_lowongan;
					echo "</td></tr><tr><th>Nama Lowongan</th><td>".$row->nama_lowongan;
					echo "</td></tr><tr><th>Kategori</th><td>".$row->kategori_lowongan;
					echo "</td></tr><tr><th>Lingkup</th><td>".$row->lingkup_lowongan;
					echo "</td></tr><tr><th>Fakultas</th><td>".$row->fakultas_lowongan;
					echo "</td></tr><tr><th>Program Studi</th><td>".$row->prodi_lowongan;
					echo "</td></tr><tr><th>Deskripsi</th><td>".$row->deskripsi_lowongan;
					echo "</td></tr><tr><th>Kontak</th><td>".$row->kontak_lowongan;
					echo "</td></tr></table>";
			}?>
			<table class="table">
					<tr>
						<th>Posisi yang diinginkan</th>
						<td><input style="border: 1px solid #ccc;" name="posisi_pendaftar" class="rcorners3" type ="text"   placeholder="Posisi"></td>
					</tr>
					<tr>
						<th>Upload CV</th>
						<td><input style="border: 1px solid #ccc;" name="cv_pendaftar" class="rcorners3" type = "file"></td>
					</tr>
			</table>
			<p>*Pastikan data diri anda sudah terisi di profil anda sebelum mendaftar.</p>
			<button class="tombol tombolwarna2" type="submit">Daftar</button><br><br>	
		</div>
	</div>
</div>

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";
?>