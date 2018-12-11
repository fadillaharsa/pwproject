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
			<br><h2 class='judul'>Edit Profil</h2><br>
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
			
				<tr>
					<th>Foto:</th>
					<td ><input style="border: 1px solid #ccc"  name="userfile" class="rcorners3" type = "file" value="<?php echo $row->foto_mahasiswa?>"></td>
				</tr>
				<tr>
					<th>Nama:<br>*Wajib</th>
					<td><input style="border: 1px solid #ccc;" name="nama_mahasiswa" class="rcorners3" type = "text" size=40  value="<?php echo $row->nama_mahasiswa?>"></td>
				</tr>
				<tr>
					<th>NPM:</th>
					<td><?php echo $this->session->userdata('user_username') ?></td>
				</tr>
				<tr>
					<th>Password:<br>*Wajib</th>
					<td><input style="border: 1px solid #ccc;" name="password_mahasiswa" class="rcorners3" type = "password" size=40  value="<?php echo $row->password_mahasiswa?>"></td>
				</tr>
				<tr>
					<th>Email:<br>*Wajib</th>
					<td><input style="border: 1px solid #ccc;" name="email_mahasiswa" class="rcorners3" type = "text" size=40  value="<?php echo $row->email_mahasiswa?>"></td>
				</tr>
				<tr>
					<th>Jenis Kelamin:</th>
					<?php $jk = $row->email_mahasiswa; ?>
					<td>	<input name="jenis_kelamin" type ="radio" value="L" <?php echo ($jk == 'L') ? "checked": "" ?>> Laki-laki<br>
							<input name="jenis_kelamin" type ="radio" value="P" <?php echo ($jk == 'P') ? "checked": "" ?>> Perempuan
					</td>
				</tr>
				<tr>
					<th>Fakultas:</th>
					<td><input style="border: 1px solid #ccc;" name="fakultas_mahasiswa" class="rcorners3" type = "text" size=40  value="<?php echo $row->fakultas_mahasiswa?>"></td>
				</tr>
				<tr>
					<th>Program Studi:</th>
					<td><input style="border: 1px solid #ccc;" name="prodi_mahasiswa" class="rcorners3" type = "text" size=40  value="<?php echo $row->prodi_mahasiswa?>"></td>
				</tr>
				<tr>
					<th>Angkatan:</th>
					<td><input style="border: 1px solid #ccc;" name="angkatan_mahasiswa" class="rcorners3" type = "text" size=40  value="<?php echo $row->angkatan_mahasiswa?>"></td>
				</tr>
				<tr>
					<th>Alamat:</th>
					<td><input style="border: 1px solid #ccc;" name="alamat_mahasiswa" class="rcorners3" type = "text" size=40  value="<?php echo $row->alamat_mahasiswa?>"></td>
				</tr>
				<tr>
					<th>No. HP:</th>
					<td><input style="border: 1px solid #ccc;" name="no_hp_mahasiswa" class="rcorners3" type = "text" size=40  value="<?php echo $row->no_hp_mahasiswa?>"></td>
				</tr>
				<tr>
					<th>Kontak Lain:</th>
					<td><input style="border: 1px solid #ccc;" name="kontak_mahasiswa" class="rcorners3" type = "text" size=40  value="<?php echo $row->kontak_mahasiswa?>"></td>
				</tr>

				</table>
				<button class="tombol tombolwarna2" type="submit">Simpan</button><br><br>				
				</form>
			
					
		</div>
			
	</div>
</div>

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";
?>