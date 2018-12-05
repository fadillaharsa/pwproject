<?php
include "part/html_first.php";
include "part/header.php";
include "part/function_header.php";
?>
<div class="container-fluid">	
<!--MAIN-->


 <button class="tablink" onclick="openPage('Home', this, 'red')">Home</button>
<button class="tablink" onclick="openPage('News', this, 'green')" id="defaultOpen">News</button>
<button class="tablink" onclick="openPage('Contact', this, 'blue')">Contact</button>
<button class="tablink" onclick="openPage('About', this, 'orange')">About</button>

<div id="Home" class="tabcontent">
  <h3>Home</h3>
  <p>Home is where the heart is..</p>
</div>

<div id="News" class="tabcontent">
  <h3>News</h3>
  <p>Some news this fine day!</p>
</div>

<div id="Contact" class="tabcontent">
  <h3>Contact</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="About" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div> 











		<div class="row centercontainer" align="center">
			<div class="col-sm-8">
				<div style="background-color: #008080; color: white; padding: 10px; margin-top: 10px;margin-bottom: 10px">Lembaga Kemahasiswaan</div>
				<div id="form" style="background-color: #006680ff; color: white; padding: 10px; margin-top: 10px;margin-bottom: 10px">

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
		</div>

		<div class="row centercontainer" align="center">
			<div class="col-sm-8">
				<div style="background-color: #008080; color: white; padding: 10px; margin-top: 10px;margin-bottom: 10px">Mahasiswaan</div>
				<div id="form" style="background-color: #006680ff; color: white; padding: 10px; margin-top: 10px;margin-bottom: 10px">
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
<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";
?>