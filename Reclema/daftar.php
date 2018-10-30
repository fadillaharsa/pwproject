<?php
include "part/html_first.php";
include "part/header.php";
include "part/function_header.php";
?>
	
<!--MAIN-->
		<div class="row">
			<div class="col-sm-8">
				<div style="background-color: #008080; color: white; padding: 10px; margin-top: 10px;margin-bottom: 10px">Lembaga Kemahasiswaan</div>
				<div id="form" style="background-color: #ffdddd; padding: 10px; margin-top: 10px;margin-bottom: 10px">

				<form style="position: static">
					Pilih:<br>									<input type = radio name = radioPilih value=l> Lembaga Kemahasiswaan
																<input type = radio name = radioPilih value=p> Kepanitiaan	<br><br>

					Nama Lembaga Kemahasiswaan:<br> 			<input type = text name = txtNama size=80>		<br>
					Username:<br> 								<input type = text name = txtNama size=80>		<br>
					Email:<br>								 	<input type = text name = txtEmail size=80>		<br>
					Password:<br> 								<input type = text name = txtPassword size=80>	<br>
					Ketik Ulang Password:<br>					<input type = text name = txtRePassword size=80>	<br><br>
				
				<input type = Daftar value = Daftar style="padding: 10px; background-color: #00CED1">
				</form>
				</div>
			</div>	
		</div>

		<div class="row">
			<div class="col-sm-8">
				<div style="background-color: #008080; color: white; padding: 10px; margin-top: 10px;margin-bottom: 10px">Mahasiswaan</div>
				<div id="form" style="background-color: #ffdddd; padding: 10px; margin-top: 10px;margin-bottom: 10px">
				<form style="position: static">
					Nama Lengkap: <br> 						<input type = text name = txtNama size=80>		<br>
					NPM: <br> 								<input type = text name = txtNPM size=80>		<br>
					Email: <br>								<input type = text name = txtEmail size=80>		<br>
					Password: <br> 							<input type = text name = txtPassword size=80>	<br>
					Ketik Ulang Password: <br>				<input type = text name = txtRePassword size=80>	<br><br>
		
				<input type = Daftar value= Daftar style="padding: 10px; background-color: #00CED1">
				</form>
				</div>
			</div>
		</div>	

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";
?>