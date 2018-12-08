<?php
include "part/html_first.php";
include "part/header.php";
include "part/function_header.php";
?>
<!--MAIN-->
<div class="container-fluid">
	<div class="row">
		<?php include "part/sidenav_lk.php"; ?>
			<div class="col-sm-9">
				<h2>Daftar Recruitment Lembaga Kemahasiswaan Kepanitiaan</h2>
					<table class="table">
					<form style="position: static; border: 1px solid #ccc;"  method="post" enctype="multipart/form-data">
					<tr>
						<th>Nama Lowongan:</th>
						<td><input style="border: 1px solid #ccc;" name="nama_lowongan" class="rcorners3" type ="text" size=40 placeholder="Nama Lowongan"></td>
					</tr>
					<tr>
						<th>Kategori:</th>
						<td>	<input name="kategori_lembaga" type ="radio" value="lembaga"> Lembaga Kemahasiswaan<br>
								<input name="kategori_lembaga" type = "radio" value="kepanitiaan"> Kepanitiaan
						</td>
					</tr>
					<tr>
						<th>Lingkup:</th>
						<td><input style="border: 1px solid #ccc;" name="lingkup_lowongan" class="rcorners3" type = "text" size=40  placeholder="Lingkup"></td>
					</tr>
					<tr>
						<th>Fakultas:</th>
						<td><input style="border: 1px solid #ccc;" name="fakultas_lowongan" class="rcorners3" type = "text" size=40  placeholder="Fakultas"></td>
					</tr>
					<tr>
						<th>Program Studi:</th>
						<td><input style="border: 1px solid #ccc;" name="prodi_lowongan" class="rcorners3" type = "text" size=40  placeholder="Program Studi"></td>
					</tr>
					<tr>
						<th>Deskripsi:</th>
						<td><input style="border: 1px solid #ccc;" name="deskripsi_lowongan" class="rcorners3" type = "text" size=40  placeholder="Deskripsi"></td>
					</tr>
					<tr>
						<th>Kontak:</th>
						<td><input style="border: 1px solid #ccc;" name="kontak_lowongan" class="rcorners3" type = "text" size=40  placeholder="Kontak"></td>
					</tr>

					</form>
			</table>
			<button class="tombol tombolwarna2" type="submit">Submit</button><br><br>	
		</div>					
	</div>
</div>

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";
?>