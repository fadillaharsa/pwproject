<?php
include "part/html_first.php";
include "part/header.php";
include "part/function_header.php";
?>

<script>
window.onload=function(){
document.getElementById("defaultOpen").click(); 	
}
</script>
<!--MAIN-->

<div class="container">
	<div class="row centercontainer " align="center">
		<div class="col-sm-8">
			<h2 align="center" style="padding-top:20px">Daftar</h2>
			<p align="center" style="padding-buttom:20px">Daftarkan dirimu sebagai Mahasiswa untuk dapat mendaftar pada rekrutmen yang tersedia, atau sebagai Lemabaga Kemahasiswaan untuk dapat membuka rekrutmen anggota.</p>
		</div>
	</div>
	<div class="row centercontainer " align="center">
		<div class="col-sm-8">
			<button class="tablink radiuskiri" onclick="openPage('mahasiswa', this, '#008080')" id="defaultOpen">Lembaga Kemahasiswaan</button>
			<button class="tablink radiuskanan" onclick="openPage('lembagakemahasiswaan', this, '#008080')">Mahasiswa</button>
			<div id="mahasiswa" class="tabcontent">
					<div id="form" style="color: white; padding: 10px; margin-top: 10px;margin-bottom: 10px">
					<form style="position: static">					
						Pilih:<br>									<input type = radio name = radioPilih value=l> Lembaga Kemahasiswaan
																	<input type = radio name = radioPilih value=p> Kepanitiaan	<br><br>
						Nama Lembaga Kemahasiswaan:<br> 			<input class="rcorners" type = text name = txtNama size=40>		<br>
						Username:<br> 								<input class="rcorners" type = text name = txtNama size=40>		<br>
						Email:<br>								 	<input class="rcorners" type = text name = txtEmail size=40>		<br>
						Password:<br> 								<input class="rcorners" type = text name = txtPassword size=40>	<br>
						Ketik Ulang Password:<br>					<input class="rcorners" type = text name = txtRePassword size=40>	<br><br>
					<input type = Daftar value = Daftar class="tombol tombolwarna2">
					</form>
				</div>
			</div>

			<div id="lembagakemahasiswaan" class="tabcontent">
				<div id="form" style="color: white; padding: 10px; margin-top: 10px;margin-bottom: 10px">
				<form style="position: static" >
					Nama Lengkap: <br> 						<input class="rcorners" type = text name = txtNama size=40 >		<br>
					NPM: <br> 								<input class="rcorners" type = text name = txtNPM size=40>		<br>
					Email: <br>								<input class="rcorners" type = text name = txtEmail size=40>		<br>
					Password: <br> 							<input class="rcorners" type = text name = txtPassword size=40>	<br>
					Ketik Ulang Password: <br>				<input class="rcorners" type = text name = txtRePassword size=40>	<br><br>
		
				<input type = Daftar value= Daftar class="tombol tombolwarna2">
				</form>
				</div>
			</div>
		</div>
	</div>
</div>


<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";
?>