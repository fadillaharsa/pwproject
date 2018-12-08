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
						<th>Logo:</th>
						<td ><input style="border: 1px solid #ccc"  name="logo_lembaga" class="rcorners3" type = "file" value="Browse"></td>
					</tr>
					<tr>
						<th>Nama Lembaga Kemahasiswaan/Kepanitiaan:</th>
						<td><input style="border: 1px solid #ccc;" name="nama_lembaga" class="rcorners3" type = "text" size=40  placeholder="Nama Lembaga"></td>
					</tr>
					<tr>
						<th>Username:</th>
						<td><input style="border: 1px solid #ccc;" name="username_lembaga" class="rcorners3" type = "text" size=40 placeholder="Username"></td>
					</tr>
					<tr>
						<th>Password:</th>
						<td><input style="border: 1px solid #ccc;" name="password_lembaga" class="rcorners3" type = "password" size=40  placeholder="Password"></td>
					</tr>
					<tr>
						<th>Email:</th>
						<td><input style="border: 1px solid #ccc;" name="email_lembaga" class="rcorners3" type = "text" size=40  placeholder="Email"></td>
					</tr>
					<tr>
						<th>Fakultas:</th>
						<td><input style="border: 1px solid #ccc;" name="fakultas_lembaga" class="rcorners3" type = "text" size=40  placeholder="Fakultas"></td>
					</tr>
					<tr>
						<th>Program Studi:</th>
						<td><input style="border: 1px solid #ccc;" name="prodi_lembaga" class="rcorners3" type = "text" size=40  placeholder="Program Studi"></td>
					</tr>
					<tr>
						<th>Kategori:</th>
						<td>	<input name="kategori_lembaga" type ="radio" value="lembaga"> Lembaga Kemahasiswaan<br>
								<input name="kategori_lembaga" type = "radio" value="kepanitiaan"> Kepanitiaan
						</td>
					</tr>
					<tr>
						<th>Lingkup:</th>
						<td><input style="border: 1px solid #ccc;" name="lingkup_lembaga" class="rcorners3" type = "text" size=40  placeholder="Lingkup"></td>
					</tr>
					<tr>
						<th>Alamat:</th>
						<td><input style="border: 1px solid #ccc;" name="alamat_lembaga" class="rcorners3" type = "text" size=40  placeholder="Alamat"></td>
					</tr>
					<tr>
						<th>Kontak:</th>
						<td><input style="border: 1px solid #ccc;" name="prodi_lembaga" class="rcorners3" type = "text" size=40  placeholder="Kontak"></td>
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