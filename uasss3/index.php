<!DOCTYPE html>
<html>
<head>
	<title>UAS SUSULAN PEMROGRAMAN 3</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="content">
	<header>
		<h1 class="judul">WELCOME TO MY WEBSITE</h1>
		<h3 class="deskripsi">UAS SUSULAN PEMROGRAMAN 3</h3>
	</header>

	<div class="menu">
		<ul>
			<li><a href="index.php?page=barang">INPUT BARANG</a></li>
			<li><a href="index.php?page=satuan">INPUT SATUAN</a></li>
			<li><a href="index.php?page=kategori">INPUT KATEGORI</a></li>
			<li><a href="index.php?page=transaksi">INPUT TRANSAKSI</a></li>
			<li><a href="index.php?page=show_br">TAMPIL BARANG</a></li>
			<li><a href="index.php?page=show_st">TAMPIL SATUAN</a></li>
			<li><a href="index.php?page=show_kt">TAMPIL KATEGORI</a></li>
			<li><a href="index.php?page=show_tr">TAMPIL TRANSAKSI</a></li>
			<li><a href="index.php?page=report_tr">LAPORAN TRANSAKSI</a></li>

		</ul>
	</div>

	<div class="badan">


	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'barang':
				include "halaman/input_barang.php";
				break;
			case 'satuan':
				include "halaman/input_satuan.php";
				break;
			case 'kategori':
				include "halaman/input_kategory.php";
				break;	
			case 'transaksi':
				include "halaman/input_transaksi.php";
				break;
			case 'show_br':
				include "halaman/tampil_barang.php";
				break;
			case 'show_st':
				include "halaman/tampil_satuan.php";
				break;
			case 'show_kt':
				include "halaman/tampil_kategory.php";
				break;
			case 'show_tr':
				include "halaman/tampil_transaksi.php";
				break;
			case 'kategori':
				include "halaman/input_kategory.php";
				break;
			case 'report_tr':
				include "halaman/laporan_transaksi.php";
				break;					
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}

	 ?>

	</div>
</div>
</body>
</html>