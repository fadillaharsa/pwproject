<?php
include "part/html_first.php";
include "part/header.php";
include "part/function_header.php";
?>


<!--MAIN-->
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3" style="background: #008080; color: white">
			<?php
				include "part/function_sidebar.php";
			?>
		</div>
		<div class="col-sm-9">
			<?php
			$c=1;
			foreach($hslquery->result() as $row){
					echo "<center><br><h2 class='judul'>Detail Rekrutmen<br>".$row->nama_lowongan."</h2><br></center>";
					echo "<table class=table>";
					echo "</td></tr><tr><th>Kategori</th><td>".$row->kategori_lowongan;
					echo "</td></tr><tr><th>Lingkup</th><td>".$row->lingkup_lowongan;
					echo "</td></tr><tr><th>Fakultas</th><td>".$row->fakultas_lowongan;
					echo "</td></tr><tr><th>Program Studi</th><td>".$row->prodi_lowongan;
					echo "</td></tr><tr><th>Deskripsi</th><td>".$row->deskripsi_lowongan;
					echo "</td></tr><tr><th>Kontak</th><td>".$row->kontak_lowongan;
					echo "</td></tr></table>";
			}?>
			<br><center><h2 class='judul'>Formulir Pendaftaran<br></center></h2>
				<?php
				   echo validation_errors();
				   if (isset($success))
				   echo '<p>'.$success.'</p>';
				?>
			<?php if($this->session->userdata('user_jenis') == 'mahasiswa' ){
				$id_lowongan=$_GET['id_lowongan'];
			echo"
			<p class='pemberitahuan'>*Pastikan bahwa Anda telah melengkapi data diri sebelum mendaftar untuk mempermudah lembaga kemahasiswaan/kepanitiaan perekrut dalam mengolah data.</p> 
			<form action = '".$actionku."?id_lowongan=".$id_lowongan."' enctype='multipart/form-data' method = 'post' accept-charset='utf-8'>
			<table class='table'>
					<tr>
						<th>Posisi yang diinginkan<br>*Wajib</th>
						<td><input style='border: 1px solid #ccc;' name='posisi' class='rcorners3' type ='text'   placeholder='Posisi'></td>
					</tr>
					<tr>
						<th>Upload CV (pdf)<br>*Wajib</th>
						<td><input style='border: 1px solid #ccc;' name='userfile' class='rcorners3' type = 'file'></td>
					</tr>
			</table>
			<button class='tombol tombolwarna2' type='submit'>Daftar</button><br><br></form>";

			}else{
				echo "<div class='pemberitahuan'><br><center>FORMULIR TIDAK DAPAT DITAMPILKAN<br>Maaf, Anda harus 'Masuk' atau 'Daftar' sebagai 'Mahasiswa' terlebih dahulu untuk mendaftar rekrutmen. </center><br></div>";
			}?>
		</div>
	</div>
</div>

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";
?>