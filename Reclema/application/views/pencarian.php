<?php
include "part/html_first.php";
include "part/header.php";
include "part/function_header.php";
?>


<!--MAIN-->
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3" style="background: #008080; color: white">
			<?php
				include "part/function_sidebar.php";
			?>
		</div>
		<div class="col-sm-9">
			<h2>Daftar Recruitment Lembaga Kemahasiswaan Kepanitiaan</h2>
			
			<?php 
				echo heading($judulapp,2);
				?>
				<div class="row">				
					<?php
					$c=1;
					foreach($hslquery->result() as $row){
						echo "<div class='col-sm-4'><tr>";
						echo "<table style='width:100%;'><td>";
						echo "Nama Lowongan : ".$row->nama_lowongan;
						echo br();
						echo "Kategori : ".$row->kategori_lowongan;
						echo br();
						echo "Lingkup : ".$row->lingkup_lowongan;
						echo "</td>";
						echo "</tr></table><br></div>";
					}
					?>
					<div class="col-sm-12 centercontainer" style="background: red">
						<?php echo $pagination;?>
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