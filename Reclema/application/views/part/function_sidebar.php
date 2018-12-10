<div class="container-fluid" >
	<div>
		<form style="padding-top: 10px; padding-bottom: 10px" action="<?php echo $action_pencarian;?>" method="post" enctype="multipart/form-data">
			<br>
			<h2 style="color:white">Filter Pencarian</h2>
			<hr>
			Cari rekrutmen kustom:<br>
			<input type="search" name="pencarian" placeholder="Cari rekrutmen" class="rcorners1 lebarfull">
			<br><br>
			Cari berdasarkan kategori:<br>
			<select type="select" name="kategori" class="rcorners2 lebarfull">
				<option value="">-- Kategori</option>
				<option value="Kepanitiaan">Kepanitiaan</option>
				<option value="Lembaga">Lembaga Kemahasiswaan</option>				
			</select>
			<br><br>
			Cari berdasarkan lingkup:<br>
			<select type="select" name="lingkup" class="rcorners2 lebarfull">
				<option value="">-- Lingkup</option>
				<option value="Universitas">Universitas</option>
				<option value="Fakultas">Fakultas</option>
				<option value="Jurusan">Jurusan</option>					
			</select>
			<br><br>
			<input type="submit" value="Cari" class="tombolcari">
		</form>
	</div>
	<br>
</div>	