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
<div class="container" >
	<div class="row centercontainer " align="center">
		<div class="col-sm-8">
			<h2 align="center" style="padding-top:20px">Masuk</h2>
			<p align="center" style="padding-buttom:20px">Masuk sebagai Mahasiswa atau Lembaga Kemahasiswaan sesuai dengan NPM/Username dan Password yang telah didaftarkan.</p>
		</div>
	</div>
	<div class="row centercontainer " align="center" >
		<div class="col-sm-8">
			<button class="tablink radiuskiri" onclick="openPage('mahasiswa', this, '#008080')" id="defaultOpen">Lembaga Kemahasiswaan</button>
			<button class="tablink radiuskanan" onclick="openPage('lembagakemahasiswaan', this, '#008080')">Mahasiswa</button>
			<div id="mahasiswa" class="tabcontent">
				<div id="form" style="padding: 10px; margin-top: 10px;margin-bottom: 10px">
					<form style="position: static">	
				Username:<br> 								<input class="rcorners" type = text name = txtNama size=40>		<br>
				Password:<br> 								<input class="rcorners" type = text name = txtPassword size=40>	<br><br>
			<input type = Masuk value = Masuk class="tombol tombolwarna2">
			</form>
			</div>
			</div>

			<div id="lembagakemahasiswaan" class="tabcontent">
				<div id="form" style="padding: 10px; margin-top: 10px;margin-bottom: 10px">
					<form style="position: static">
						NPM: <br> 								<input class="rcorners" type = text name = txtNPM size=40>		<br>
						Password: <br> 							<input class="rcorners" type = text name = txtPassword size=40>	<br><br>
					<input type = Masuk value= Masuk class="tombol tombolwarna2">
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