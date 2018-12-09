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
			<br><h2>Rekrutmen Lembaga Kemahasiswaan/Kepanitiaan yang Diikuti</h2><br>
			<table border="1px solid black" width="auto">
				<tr>
					<th>No</th>
					<th>Logo Lembaga</th>
					<th style="width: 100%">Lembaga yang di daftar</th>
				</tr>
				<tr>
					<td style="width: auto;">1. </td>
					<td style="width: auto;"><img width="100px" src="<?php echo base_url()?>/content/himatif.png"></td>
					<td>
						<p align="left">
						Nama Lembaga<span style="white-space: pre;">			</span>: Himpunan Mahasiswa Teknik Informatika (HIMATIF)<br>
						Program Studi<span style="white-space: pre;">			</span>: Teknik Informatika<br>
						Fakultas<span style="white-space: pre;">					</span>: Fakultas Pengetahuan Alam dan Matematika (FMIPA)
						<br><br>
						</p>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";
?>