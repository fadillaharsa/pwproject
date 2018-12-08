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
					<?php
					   echo validation_errors();
					   if (isset($success))
					   echo '<p>'.$success.'</p>';
					?>
					<form style="position: static" action="<?php echo $daftar_actionLK;?>" method="post" enctype="multipart/form-data">					
						Kategori:<br>								<input name="kategori_lembaga" type ="radio" value="lembaga"> Lembaga Kemahasiswaan
																	<input name="kategori_lembaga" type = "radio" value="kepanitiaan"> Kepanitiaan	<br><br>
						Nama Lembaga Kemahasiswaan/Kepanitiaan:<br> <input name="nama_lembaga" class="rcorners" type = "text" size=40 value="<?php echo set_value('inputnamalembaga'); ?>" placeholder="Nama Lembaga">		<br>
						Username:<br> 								<input name="username_lembaga" class="rcorners" type = "text" size=40 value="<?php echo set_value('inputusernamelembaga'); ?>" placeholder="Username">		<br>
						Email:<br>								 	<input name="email_lembaga" class="rcorners" type = "text" size=40 value="<?php echo set_value('inputemailembaga'); ?>" placeholder="Email">		<br>
						Password:<br> 								<input name="password_lembaga" class="rcorners" type = "password" size=40 value="<?php echo set_value('inputpasswordlembaga'); ?>" placeholder="Password">	<br><br>
					<button class="tombol tombolwarna2" type="submit">Daftar</button>
					</form>
				</div>
			</div>

			<div id="lembagakemahasiswaan" class="tabcontent">
				<div id="form" style="color: white; padding: 10px; margin-top: 10px;margin-bottom: 10px">
				<?php
				   echo validation_errors();
				   if (isset($success))
				   echo '<p>'.$success.'</p>';
				?>
				<form style="position: static" action="<?php echo $daftar_action;?>" method="post" enctype="multipart/form-data">
				
					Nama Lengkap: <br> 						<input name="nama_mahasiswa" class="rcorners" type = "text" value="<?php echo set_value('inputnamamahasiswa'); ?>" placeholder="Nama Lengkap" size=40 >		<br>
					NPM: <br> 								<input name="npm" class="rcorners" type = "text" value="<?php echo set_value('inputnpm'); ?>" placeholder="Nomor Pokok Mahasiswa" size=40>		<br>
					Email: <br>								<input name="email_mahasiswa" class="rcorners" type = "text" value="<?php echo set_value('inputemailmahasiswa'); ?>" placeholder="Email" size=40>		<br>
					Password: <br> 							<input name="password_mahasiswa" class="rcorners" type = "password" value="<?php echo set_value('inputpasswordmahasiswa'); ?>" placeholder="Password" size=40>	<br><br>
				<button class="tombol tombolwarna2" type="submit">Daftar</button>
				</form>	
				</div>
			</div>
		</div>
	</div>
</div>
<br>


<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";
?>