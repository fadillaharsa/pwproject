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
			<br><h2>Profil Saya</h2><br>
			<table class="table">
<<<<<<< HEAD
				<?php 
					echo "<tr><th>Foto</th><td>";

					<img width="100px" src="<?php echo base_url()?>/content/Foto.jpg>"></td>

					echo "</tr><tr><th>Nama</th><td>";
					
					test

					echo "</td></tr><tr><th>NPM</th><td>";

					safsdfasds da acadsdas  sadasdasdsac sada

					echo "</td></tr><tr><th>Password</th><td>";
					
					.

					echo "</td></tr><tr><th>Email</th><td>";

					.

					echo "</td></tr><tr><th>Jenis Kelamin</th><td>";

					.

					echo "</td></tr><tr><th>Fakultas</th><td>";

					.

					echo "</td></tr><tr><th>Program Studi</th><td>";

					.

					echo "</td></tr><tr><th>Alamat</th><td>";

					.

					echo "</td></tr><tr><th>No. HP</th><td>";

					.

					echo "</td></tr><tr><th>Kontak Lain</th><td>";

					.

=======
			<?php
			$c=1;
			foreach($hslquery->result() as $row){
					echo "<tr><th>Foto</th><td><img width='100px' src='".base_url()."/content/Foto.jpg'></td>";
					echo "</tr><tr><th>Nama</th><td>".$row->nama_mahasiswa;
					echo "</td></tr><tr><th>NPM</th><td>".$row->npm;
					echo "</td></tr><tr><th>Password</th><td>".$row->password_mahasiswa;
					echo "</td></tr><tr><th>Email</th><td>".$row->email_mahasiswa;
					echo "</td></tr><tr><th>Jenis Kelamin</th><td>".$row->jenis_kelamin;
					echo "</td></tr><tr><th>Fakultas</th><td>".$row->fakultas_mahasiswa;
					echo "</td></tr><tr><th>Program Studi</th><td>".$row->prodi_mahasiswa;
					echo "</td></tr><tr><th>Angkatan</th><td>".$row->angkatan_mahasiswa;
					echo "</td></tr><tr><th>Alamat</th><td>".$row->alamat_mahasiswa;
					echo "</td></tr><tr><th>No. HP</th><td>".$row->no_hp_mahasiswa;
					echo "</td></tr><tr><th>Kontak Lain</th><td>".$row->kontak_mahasiswa;
>>>>>>> f9fcd4c708d09777d59f12cf1f6f6c74bdca4aa0
					echo "</td></tr>";
			}?>	
				</table>
			<a class="tombol tombolwarna2" href="<?php echo site_url()?>/profil_mahasiswa_edit">Edit</a><br><br>	
		</div>
			
	</div>
</div>

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";
?>