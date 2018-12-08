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
					<tr>
						<th>Logo</th>
						<td><img width="100px" src="<?php echo base_url()?>/content/himatif.png"></td>
					</tr>

					<tr>
						<th>Nama Lembaga Kemahasiswaan/Kepanitiaan</th>
						<td>test</td>
					</tr>
					<tr>
						<th>Usename Lembaga Kemahasiswaan/Kepanitiaan</th>
						<td>safsdfasds da acadsdas  sadasdasdsac sada</td>
					</tr>
					<tr>
						<th>Password</th>
						<td>.</td>
					</tr>
					<tr>
						<th>Email</th>
						<td>.</td>
					</tr>
					<tr>
						<th>Fakultas</th>
						<td>.</td>
					</tr>
					<tr>
						<th>Program Studi</th>
						<td>.</td>
					</tr>
					<tr>
						<th>Kategori</th>
						<td>.</td>
					</tr>
					<tr>
						<th>Lingkup</th>
						<td>.</td>
					</tr>
					<tr>
						<th>Alamat</th>
						<td>.</td>
					</tr>
					<tr>
						<th>Kontak</th>
						<td>.</td>
					</tr>
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