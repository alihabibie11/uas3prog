<?php
include('koneksi.php');
$tampil_satuan = mysqli_query($home,'select * from t_satuan');
?>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<h2 align="center">UAS PEMROGRAMAN SEMESTER 3 </h2>
	<form method="post" action="">
	<table class="tablex" align="center">
	<tr>
		<td>Id Satuan</td>
		<td>Nama Satuan</td>
	</tr>
<?php while($data = mysqli_fetch_array($tampil_satuan)) { ?>
	<tr>
		<td><?php echo $data['id_satuan']; ?></td>
		<td><?php echo $data['nama_satuan']; ?></td>
	</tr>
<?php } ?>
		</table>
	</form>
</body>
