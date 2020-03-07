<?php
include('koneksi.php');
$query_barang="select brg.id_barang, brg.nama_barang, ktg.id_kategory, ktg.nama_kategory, 
				stu.id_satuan, stu.nama_satuan from t_barang as brg 
				inner join t_kategory as ktg on brg.kategory_id=ktg.id_kategory
				inner join t_satuan as stu on brg.satuan_id=stu.id_satuan";
$tampil_barang = mysqli_query($home, $query_barang);
if($tampil_barang ===FALSE){
	die(mysqli_error($home));
}
?>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<h2 align="center">UAS PEMROGRAMAN SEMESTER 3 </h2>
	<form method="post" action="">
	<table class="tablex" align="center">
	<tr>
		<td>Id Barang</td>
		<td>Nama Barang</td>
		<td>Id Kategory</td>
		<td>Nama Kategory</td>
		<td>Id Satuan</td>
		<td>Nama Satuan</td>
	</tr>
<?php while($data = mysqli_fetch_array($tampil_barang)){ ?>

	<tr>
		<td><?php echo $data['id_barang']; ?></td>
		<td><?php echo $data['nama_barang']; ?></td>
		<td><?php echo $data['id_kategory']; ?></td>
		<td><?php echo $data['nama_kategory']; ?></td>
		<td><?php echo $data['id_satuan']; ?></td>
		<td><?php echo $data['nama_satuan']; ?></td>
	</tr>
<?php } ?>
		</table>
	</form>
</body>