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
			<br><h2 class='judul'>Daftar Recruitment Lembaga Kemahasiswaan Kepanitiaan</h2><br>
			<?php
				   echo validation_errors();
				   if (isset($success))
				   echo '<p>'.$success.'</p>';
			?>
			<form action = '<?php echo $editAction;?>' enctype='multipart/form-data' style="position: static"  method="post">
			<table class="table">
			<?php
			$c=1;
			foreach($hslquery->result() as $row);?>
			
					<form action = '<?php echo $editAction;?>' enctype='multipart/form-data'style="position: static; border: 1px solid #ccc;"  method="post">
					<tr>
						<th>Logo:</th>
						<td ><input style="border: 1px solid #ccc"  name="userfile" class="rcorners3" type = "file" value="<?php echo $row->logo_lembaga?>"></td>
					</tr>
					<tr>
						<th>Nama Lembaga Kemahasiswaan/Kepanitiaan:</th>
						<td><input style="border: 1px solid #ccc;" name="nama_lembaga" class="rcorners3" type = "text" size=40  value="<?php echo $row->nama_lembaga?>"></td>
					</tr>
					<tr>
						<th>Username:</th>
						<td><?php echo $row->username_lembaga?></td>
					</tr>
					<tr>
						<th>Password:</th>
						<td><input style="border: 1px solid #ccc;" name="password_lembaga" class="rcorners3" type = "password" size=40  value="<?php echo $row->password_lembaga?>"></td>
					</tr>
					<tr>
						<th>Email:</th>
						<td><input style="border: 1px solid #ccc;" name="email_lembaga" class="rcorners3" type = "text" size=40  value="<?php echo $row->email_lembaga?>"></td>
					</tr>
					<tr>
						<th>Fakultas:</th>
						<td><input style="border: 1px solid #ccc;" name="fakultas_lembaga" class="rcorners3" type = "text" size=40  value="<?php echo $row->fakultas_lembaga?>"></td>
					</tr>
					<tr>
						<th>Program Studi:</th>
						<td><input style="border: 1px solid #ccc;" name="prodi_lembaga" class="rcorners3" type = "text" size=40  value="<?php echo $row->prodi_lembaga?>"></td>
					</tr>
					<tr>
						<th>Kategori:</th>
						<td>	<input name="kategori_lembaga" type ="radio" value="lembaga"> Lembaga Kemahasiswaan<br>
								<input name="kategori_lembaga" type = "radio" value="kepanitiaan"> Kepanitiaan
						</td>
					</tr>
					<tr>
						<th>Lingkup:</th>
						<td><input style="border: 1px solid #ccc;" name="lingkup_lembaga" class="rcorners3" type = "text" size=40  value="<?php echo $row->lingkup_lembaga?>"></td>
					</tr>
					<tr>
						<th>Alamat:</th>
						<td><input style="border: 1px solid #ccc;" name="alamat_lembaga" class="rcorners3" type = "text" size=40  value="<?php echo $row->alamat_lembaga?>"></td>
					</tr>
					<tr>
						<th>Kontak:</th>
						<td><input style="border: 1px solid #ccc;" name="kontak_lembaga" class="rcorners3" type = "text" size=40  value="<?php echo $row->kontak_lembaga?>"></td>
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