<?php
include "part/html_first.php";
include "part/header.php";
include "part/function_header.php";
?>		
<!--MAIN-->
<div class="container-fluid">	
	<div class="row centercontainer" align="center">
		<div class="col-sm-6">
			<div style="background-color: #008080; color: white; padding: 10px; margin-top: 10px;margin-bottom: 10px">Lembaga Kemahasiswaan</div>
			<div id="form" style="background-color: #ffdddd; padding: 10px; margin-top: 10px;margin-bottom: 10px">

			<form style="position: static">	
				Username:<br> 								<input type = text name = txtNama size=40>		<br>
				Password:<br> 								<input type = text name = txtPassword size=40>	<br><br>
			<input type = Masuk value = Masuk style="padding: 10px; background-color: #00CED1">
			</form>
			</div>
		</div>	
	</div>

	<div class="row centercontainer" align="center">
		<div class="col-sm-6">
			<div style="background-color: #008080; color: white; padding: 10px; margin-top: 10px;margin-bottom: 10px">Mahasiswaan</div>
			<div id="form" style="background-color: #ffdddd; padding: 10px; margin-top: 10px;margin-bottom: 10px">
			<form style="position: static">
				NPM: <br> 								<input type = text name = txtNPM size=40>		<br>
				Password: <br> 							<input type = text name = txtPassword size=40>	<br><br>
			<input type = Masuk value= Masuk style="padding: 10px; background-color: #00CED1">
			</form>
			</div>
		</div>
	</div>	
</div>

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";
?>