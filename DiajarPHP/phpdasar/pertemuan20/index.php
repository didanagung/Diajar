<?php 
session_start();

if (!isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

// untuk menghubungkan
require'functions.php';

$handphone = query("SELECT * FROM handphone");

// tombol cari di-klik
if (isset($_POST["cari"])) {
	$handphone = cari($_POST["keyword"]);
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<style>
		.loader{
			width: 100px;
			position: absolute;
			top: 120px;
			left: 215px;
			z-index: -1;
			display: none;
		}
	</style>

</head>
<body>

	<a href="logout.php">LOGOUT!</a>

<h1>Daftar Handphone</h1>

<a href="tambah.php">Tambah Data Handphone</a>
<br><br>

<form action="" method="post">
	
	<input type="text" name="keyword" size="25" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off" id="keyword">
	<button type="submit" name="cari" id="tombol-cari">Cari</button>
	<img src="img/loader.gif" class="loader">

</form>

<br>
<div id="container">
<table border="1" cellpadding="10" cellspacing=""0>
	
<tr>
	<th>No.</th>
	<th>Aksi</th>
	<th>Gambar</th>
	<th>Tipe</th>
	<th>Merk</th>
	<th>Processor</th>
	<th>Garansi</th>
	<th>Harga</th>
</tr>

<?php $i = 1; ?>
<?php  foreach ($handphone as $hp) : ?>
<tr>
	<td> <?= $i; ?> </td>
	<td>
		<a href="ubah.php?id=<?= $hp["id"]; ?>">Ubah</a>|
		<a href="hapus.php?id=<?= $hp["id"]; ?>" onclick = "return confirm('Anda Yakin Akan Menghapus Data?');">Hapus</a>
	</td>
	<td><img src="img/<?= $hp["gambar"]; ?> " width="50"></td>
	<td><?= $hp ["tipe"]; ?></td>
	<td><?= $hp ["merk"]; ?></td>
	<td><?= $hp ["processor"]; ?></td>
	<td><?= $hp ["garansi"]; ?></td>
	<td><?= $hp ["harga"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>

</table>
</div>
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>