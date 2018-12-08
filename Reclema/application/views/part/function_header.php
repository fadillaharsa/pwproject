<div class="container-fluid" style="background: #00aad4ff; color: white; border-bottom: 1px solid #A9A9A9">
	<div>
		<form style="padding-top: 10px; padding-bottom: 10px" action="<?php echo $action_pencarian;?>" method="post" enctype="multipart/form-data">
			<input type="search" name="pencarian" placeholder="Cari rekrutmen" class="rcorners1 lebar1">
			<select type="select" name="kategori" class="rcorners2 lebar2">
				<option value="">-- Kategori</option>
				<option value="Kepanitiaan">Kepanitiaan</option>
				<option value="Lembaga">Lembaga Kemahasiswaan</option>				
			</select>
			<select type="select" name="lingkup" class="rcorners2 lebar2">
				<option value="">-- Lingkup</option>
				<option value="Universitas">Universitas</option>
				<option value="Fakultas">Fakultas</option>
				<option value="Jurusan">Jurusan</option>					
			</select>
			<input type="submit" value="Cari" class="tombolcari">
		</form>
	</div>
</div>	