<?php
include('koneksi.php');
if(isset($_POST['save'])){
	$query_input_kategory="insert into t_kategory (id_kategory, nama_kategory)
	values('".$_POST['id_kategory']."',
			'".$_POST['nama_kategory']."')";
	$proses_input_kategory=mysqli_query($home,$query_input_kategory);
	if($proses_input_kategory){
		echo 'Input Data Berhasil!';
	}else{
		echo mysqli_error($home);
	}
}
?>
<link rel="stylesheet" type="text/css" href="style.css">
<body bgcolor="#FF8C00">
	<h2 align="center">UAS PEMROGRAMAN SEMESTER 3 </h2>
	<form method="post" action="">
	<table class="tablex" align="center">
		<tr>
			<td>Id Kategory</td>
			<td><input type="number" name="id_kategory"></td>
		<tr>
			<td>Nama Kategory</td>
			<td><input type="text" name="nama_kategory"></td>
		</tr>
		<tr>
		</tr>
		</table>
		<td><input type="submit" name="save"></td>
	</form>
</body>