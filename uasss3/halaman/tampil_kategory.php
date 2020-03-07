<?php
include('koneksi.php');
$tampil_kategory = mysqli_query($home,'select * from t_kategory');
?>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<h2 align="center">UAS PEMROGRAMAN SEMESTER 3 </h2>
	<form method="post" action="">
	<table class="tablex" align="center">
	<tr>
		<td>Id Kategory</td>
		<td>Nama Kategory</td>
	</tr>
<?php while($data = mysqli_fetch_array($tampil_kategory)) { ?>
	<tr>
		<td><?php echo $data['id_kategory']; ?></td>
		<td><?php echo $data['nama_kategory']; ?></td>
	</tr>
<?php } ?>
		</table>
	</form>
</body>