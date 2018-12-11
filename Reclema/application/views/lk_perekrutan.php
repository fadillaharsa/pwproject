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
				<br><h2 class='judul'>Publikasi Perekrutan</h2><br>
				<?php
					
					   echo validation_errors();
					   if (isset($success))
					   echo '<p>'.$success.'</p>';
					?>
				<form style="position: static" action="<?php echo $rekrutAction;?>" method="post" enctype="multipart/form-data">
					<table class="table" style="border: 1px solid #ccc">
					<tr>
						<th>Nama Lowongan:</th>
						<td><input style="border: 1px solid #ccc;" name="nama_lowongan" class="rcorners3" type ="text" size=40 placeholder="Nama Lowongan"></td>
					</tr>
					<tr>
						<th>Kategori:</th>
						<td>	<input name="kategori_lowongan" type ="radio" value="Lembaga"> Lembaga Kemahasiswaan<br>
								<input name="kategori_lowongan" type = "radio" value="Kepanitiaan"> Kepanitiaan
						</td>
					</tr>
					<tr>
						<th>Lingkup:</th>
						<td>	<input name="lingkup_lowongan" type ="radio" value="Universitas"> Universitas<br>
								<input name="lingkup_lowongan" type = "radio" value="Fakultas"> Fakultas<br>
								<input name="lingkup_lowongan" type = "radio" value="Jurusan"> Jurusan
						</td>
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

					
			</table>
			<button class="tombol tombolwarna2" type="submit">Submit</button><br><br>
			</form>
	
		</div>					
	</div>
</div>

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";
?>