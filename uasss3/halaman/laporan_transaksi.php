<?php
include('koneksi.php');
$laporan_transaksi="select kte.id_kategory, kte.nama_kategory, brg.nama_barang, qty, harga, qty*harga as total 
				from t_transaksi as trx inner join t_barang as brg on trx.id_barang=brg.id_barang
				inner join t_kategory as kte on brg.kategory_id=kte.id_kategory				
				inner join t_satuan as stn on brg.satuan_id=stn.id_satuan";

$tampil_laptr = mysqli_query($home, $laporan_transaksi);
if($tampil_laptr ===FALSE){
	die(mysqli_error($home));
}
?>
	<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<h2 align="center">UAS PEMROGRAMAN SEMESTER 3 </h2>
	<form method="post" action="">
	<table class="tablex" align="center">
	<tr>
		<td>Id Kategory</td>
		<td>Nama Kategory</td>
		<td>Nama Barang</td>
		<td>Qty</td>
		<td>Harga</td>
		<td>Total</td>
	</tr>
<?php while($data = mysqli_fetch_array($tampil_laptr)){ ?>

	<tr>
		<td><?php echo $data['id_kategory']; ?></td>
		<td><?php echo $data['nama_kategory']; ?></td>
		<td><?php echo $data['nama_barang']; ?></td>
		<td><?php echo $data['qty']; ?></td>
		<td><?php echo $data['harga']; ?></td>
		<td><?php echo $data['total']; ?></td>
	</tr>
<?php } ?>
		</table>
	</form>
</body>