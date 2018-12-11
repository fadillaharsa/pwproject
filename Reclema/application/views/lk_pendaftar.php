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
			<br><h2 class='judul'>Pendaftar</h2><br>	
			<center>
					<?php
					if ($dataketemu==0){
						echo "<br><br><p>Maaf, belum ada yang mendaftar pada perekrutan Anda, silakan promosikan perekrutan untuk mendapatkan pendaftar.</p><br><br>";
					}
					?>
			<center/>
			<table border='1px solid black' width='100%'>
				<tr>
					<th>No</th>
					<th>Rekrutmen</th>
					<th>NPM</th>
					<th>Email</th>
					<th>No. HP</th>
					<th>Posisi</th>
					<th>CV</th>
				</tr>
			<?php
				$c=1;
				$a=1;
				foreach($hslquery->result() as $row){
					echo"
				<tr>
					<td style='width: auto;'>".$a."</td>
					<td style='width: auto;'>".$row->nama_lowongan."</td>
					<td style='width: auto;'>".$row->npm."</td>
					<td style='width: auto;'>".$row->email_mahasiswa."</td>
					<td style='width: auto;'>".$row->no_hp_mahasiswa."</td>
					<td style='width: auto;'>".$row->posisi."</td>
					<td style='width: auto;'><a class='tombol tombolwarna2' href='".base_url()."upload/cv/".$row->cv."'>Lihat</a></td>
				</tr>";
				$a=$a+1;
				}?>
			</table>
		</div>
	</div>
</div>

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";
?>