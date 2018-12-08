<?php
include "part/html_first.php";
include "part/header.php";
include "part/function_header.php";
?>

<!--MAIN-->
<div class="container-fluid">
	<div class="row">
		<?php include "part/sidenav_lk.php"; ?>
		<div class="col-sm-9">
			<h2>Pendaftar</h2>	
			<table border="1px solid black" width="100%">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>NPM</th>
					<th>Email</th>
					<th>No. HP</th>
					<th>Kontak Lain</th>
					<th>CV</th>
				</tr>
				<tr>
					<td style="width: auto;">1. </td>
					<td style="width: auto;">Test</td>
					<td style="width: auto;">14081017000</td>
					<td style="width: auto;">mail@gmail.com</td>
					<td style="width: auto;">08887888877</td>
					<td style="width: auto;">ID Line: lineID</td>
					<td style="width: auto;"><button class="tombol tombolwarna2" type="submit">View</button></td>
				</tr>
					<tr>
					<td style="width: auto;">2. </td>
					<td style="width: auto;">Test2</td>
					<td style="width: auto;">14081017001</td>
					<td style="width: auto;">mail@gmail.com</td>
					<td style="width: auto;">08887888879</td>
					<td style="width: auto;">ID Line: lineID</td>
					<td style="width: auto;"><button class="tombol tombolwarna2" type="submit">View</button></td>
				</tr>
			</table>
		</div>
	</div>
</div>

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";
?>