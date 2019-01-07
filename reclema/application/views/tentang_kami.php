<?php
include "part/html_first.php";
include "part/header.php";
include "part/function_header.php";
?>

<!--MAIN-->
<div class="container-fluid">
	<br><center><h2 class="judul">Tentang Kami</h2></center>
	<div class="row" style="height: 600px">
		<div class="col-sm-4" style="background-color: #ddd">
				<center>
				<br>
				<img style="border-radius: 50%; float: center" width="300px" height="300px" src="<?php echo base_url()?>/content/Arsa.jpg"><br>
				<div>
					<br><br>
					<h3>Muhammad Fadillah Arsa</h3>
					<p>S-1 Teknik Informatika<br>
					Universitas Padjadjaran</p>
				</div>	
				</center>					
		</div>
		<div class="col-sm-4" style="border: solid #dddd 3px;">
				<center>
				<br>
				<img style="border-radius: 50%; float: center" width="300px" height="300px" src="<?php echo base_url()?>/content/Siradj.jpg"><br>
				<div>
					<br><br>
					<h3>Muhammad Siradj Al Fauzi</h3>
					<p>S-1 Teknik Informatika<br>
					Universitas Padjadjaran</p>
				</div>	
				</center>					
		</div>
		<div class="col-sm-4" style="background-color: #ddd">
				<center>
				<br>
				<img style="border-radius: 50%; float: center" width="300px" height="300px" src="<?php echo base_url()?>/content/Johannes.jpg"><br>
				<div>
					<br><br>
					<h3>Johannes Lumbantoruan</h3>
					<p>S-1 Teknik Informatika<br>
					Universitas Padjadjaran</p>
				</div>	
				</center>					
		</div>
	</div>	
</div>

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";