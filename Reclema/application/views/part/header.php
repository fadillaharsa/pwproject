<div class="container-fluid">
	<div class="row" style="background: #006680ff; color: white">
		<div class="col-sm-2">
			<a href="<?php echo site_url()?>/home"><img src="<?php echo base_url()?>/content/reclema logo.png" width="200px" style="margin-top:10px; margin-bottom: 10px"></a>
		</div>
		<div class="col-sm-7">
			<p style="margin-top:15px; margin-bottom: 10px"><i>Rekrutmen Lembaga Mahasiswa Universitas Padjadjaran</i></p>
		</div>
		<div class="col-sm-3" align="right">
		
		<?php if($this->session->userdata('user_has_login') == true ){
		if ($this->session->userdata('user_jenis')== 'mahasiswa'){?>
		<a href="<?php echo site_url()?>/profil_mahasiswa" class="tombol tombolwarna1" style="margin-top: 10px; margin-bottom: 10px"><?php echo $this->session->userdata('user_username')?></a>
		<?php } else {?>
		<a href="<?php echo site_url()?>/lk_profil" class="tombol tombolwarna1" style="margin-top: 10px; margin-bottom: 10px"><?php echo $this->session->userdata('user_username')?></a>
		<?php }?>
		<a href="<?php echo $logout_url;?>" class="tombol tombolwarna2" style="margin-top: 10px; margin-bottom: 10px">Keluar</a>
		<?php } else {?>
		<a href="<?php echo site_url()?>/daftar" class="tombol tombolwarna1" style="margin-top: 10px; margin-bottom: 10px">Daftar</a>
		<a href="<?php echo site_url()?>/masuk" class="tombol tombolwarna2" style="margin-top: 10px; margin-bottom: 10px">Masuk</a>
		<?php } ?>

		</div>
	</div>
</div>	