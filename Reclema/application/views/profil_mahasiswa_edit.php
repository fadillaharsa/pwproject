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
			<h2>Edit Profil</h2>
			<table class="table">
					<form style="position: static; border: 1px solid #ccc;"  method="post" enctype="multipart/form-data">
					<tr>
						<th>Foto:</th>
						<td ><input style="border: 1px solid #ccc"  name="foto_mahasiswa" class="rcorners3" type = "file" value="Browse"></td>
					</tr>
					<tr>
						<th>Nama:</th>
						<td><input style="border: 1px solid #ccc;" name="nama_mahasiswa" class="rcorners3" type = "text" size=40  placeholder="Nama Mahasiswa"></td>
					</tr>
					<tr>
						<th>NPM:</th>
						<td><input style="border: 1px solid #ccc;" name="npm" class="rcorners3" type = "text" size=40 placeholder="NPM"></td>
					</tr>
					<tr>
						<th>Password:</th>
						<td><input style="border: 1px solid #ccc;" name="password_mahasiswa" class="rcorners3" type = "password" size=40  placeholder="Password"></td>
					</tr>
					<tr>
						<th>Email:</th>
						<td><input style="border: 1px solid #ccc;" name="email_mahasiswa" class="rcorners3" type = "text" size=40  placeholder="Email"></td>
					</tr>
					<tr>
						<th>Jenis Kelamin:</th>
						<td>	<input name="jenis_kelamin" type ="radio" value="L"> Laki-laki<br>
								<input name="jenis_kelamin" type ="radio" value="P"> Perempuan
						</td>
					</tr>
					<tr>
						<th>Fakultas:</th>
						<td><input style="border: 1px solid #ccc;" name="fakultas_mahasiswa" class="rcorners3" type = "text" size=40  placeholder="Fakultas"></td>
					</tr>
					<tr>
						<th>Program Studi:</th>
						<td><input style="border: 1px solid #ccc;" name="prodi_mahasiswa" class="rcorners3" type = "text" size=40  placeholder="Program Studi"></td>
					</tr>
					
					<tr>
						<th>Alamat:</th>
						<td><input style="border: 1px solid #ccc;" name="alamat_mahasiswa" class="rcorners3" type = "text" size=40  placeholder="Alamat"></td>
					</tr>
					<tr>
						<th>No. HP:</th>
						<td><input style="border: 1px solid #ccc;" name="nohp_mahasiswa" class="rcorners3" type = "text" size=40  placeholder="No. HP"></td>
					</tr>
					<tr>
						<th>Kontak Lain:</th>
						<td><input style="border: 1px solid #ccc;" name="kontak_mahasiswa" class="rcorners3" type = "text" size=40  placeholder="Kontak Lain"></td>
					</tr>

					</form>
			</table>
			<button class="tombol tombolwarna2" type="submit">Simpan</button><br><br>		
		</div>
			
	</div>
</div>

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";
?>