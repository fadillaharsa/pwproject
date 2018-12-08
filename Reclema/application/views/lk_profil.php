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
			<?php
			$c=1;
			foreach($hslquery->result() as $row){
					echo "<tr><th>Logo</th><td><img width='100px' src='".base_url()."/content/himatif.png'></td></tr>";
					echo "<tr><th>Nama Lembaga Kemahasiswaan/Kepanitiaan</th><td>".$row->nama_lembaga;
					echo "</td></tr><tr><th>Usename Lembaga Kemahasiswaan/Kepanitiaan</th><td>".$row->username_lembaga;
					echo "</td></tr><tr><th>Password</th><td>".$row->password_lembaga;
					echo "</td></tr><tr><th>Email</th><td>".$row->email_lembaga;
					echo "</td></tr><tr><th>Fakultas</th><td>".$row->fakultas_lembaga;
					echo "</td></tr><tr><th>Program Studi</th><td>".$row->prodi_lembaga;
					echo "</td></tr><tr><th>Kategori</th><td>".$row->kategori_lembaga;
					echo "</td></tr><tr><th>Lingkup</th><td>".$row->lingkup_lembaga;
					echo "</td></tr><tr><th>Alamat</th><td>".$row->alamat_lembaga;					
					echo "</td></tr><tr><th>Kontak</th><td>".$row->kontak_lembaga;
					echo "</td></tr>";
			}?>
			</table>
			<button class="tombol tombolwarna2" type="submit">Edit</button><br><br>			
		</div>
			
	</div>
</div>

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";
?>