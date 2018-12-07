<?php
include "part/html_first.php";
include "part/header.php";
include "part/function_header.php";
?>

<!--MAIN-->
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3" style="background: #008080; color: white">
			<ul>
				<li><a href="#profilsaya">Profil Saya</a></li>
				<li><a href="#profillembaga">Lembaga Kemahasiswaan yang saya daftar</a></li>
			</ul>
		</div>
		<div class="col-sm-9">
			<h1>Lembaga Kemahasiswaan yang saya daftar</h1>	
			<table border="1px solid black" width="auto">
				<tr>
					<th>No</th>
					<th>Logo Lembaga</th>
					<th>Lembaga yang di daftar</th>
				</tr>
				<tr>
					<td>1. </td>
					<td><img src="../content/himatif.png" width="100px" height="150px" align="left"></td>
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