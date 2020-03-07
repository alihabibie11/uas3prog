<?php
include('koneksi.php');
if(isset($_POST['save'])){
	$query_input_barang="insert into t_barang (id_barang, nama_barang, kategory_id, satuan_id)
	values('".$_POST['id_barang']."',
			'".$_POST['nama_barang']."',
			'".$_POST['kategory_id']."',
			'".$_POST['satuan_id']."')";
	$proses_input_barang=mysqli_query($home,$query_input_barang);
	if($proses_input_barang){
		echo 'Input Data Berhasil!';
	}else{
		echo mysqli_error($home);
	}
}
?>
	<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<h2 align="center">UAS PEMROGRAMAN SEMESTER 3 </h2>
	<form method="post" action="">
	<table class="tablex" width="55%" align="center">
		<tr>
			<td>Id Barang</td>
			<td><input type="number" name="id_barang"></td>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td><input type="text" name="nama_barang"></td>
		</tr>
		<tr>
			<td>Id Kategori</td>
			<td><input type="number" name="kategory_id"></td>
		</tr>
		<tr>
			<td>Id Satuan</td>
			<td><input type="number" name="satuan_id"></td>
		</tr>
		</td>
		</table>
		<input type="submit" name="save">
	</form>
</body>
