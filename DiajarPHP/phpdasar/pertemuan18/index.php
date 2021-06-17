<?php 
session_start();

if (!isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

// untuk menghubungkan
require'functions.php';

// pagination
// konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM handphone"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
// ini adalah operator ternary
$halamanAktif = ( isset($_GET["hal"]) ) ? $_GET["hal"] : 1;
$awalData = ( $jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

// LIMIT logikanya angka pertama dimulai dari index ke berapa, angka kedua jumlah data yang ditampilkan
$handphone = query("SELECT * FROM handphone LIMIT $awalData, $jumlahDataPerHalaman");

// tombol cari di-klik
if (isset($_POST["cari"])) {
	$handphone = cari($_POST["keyword"]);
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<a href="logout.php">LOGOUT!</a>

<h1>Daftar Handphone</h1>

<a href="tambah.php">Tambah Data Handphone</a>
<br><br>

<form action="" method="post">
	
	<input type="text" name="keyword" size="25" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
	<button type="submit" name="cari">Cari</button>

</form>
<br>

<!-- navigasi -->

<?php if($halamanAktif > 1) : ?>
	<a href="?hal=<?= $halamanAktif - 1; ?>">&laquo;</a>
<?php endif; ?>

<?php for ($i = 1; $i <=$jumlahHalaman; $i++) : ?>
	<?php if($i == $halamanAktif ) : ?>
	<a href="?hal=<?= $i; ?>" style="font-weight: bold; color: red;" ><?= $i; ?></a>
	<?php else : ?>
	<a href="?hal=<?= $i; ?>"><?= $i; ?></a>
	<?php endif; ?>
<?php endfor; ?>

<?php if($halamanAktif < $jumlahHalaman) : ?>
	<a href="?hal=<?= $halamanAktif + 1; ?>">&raquo;</a>
<?php endif; ?>

<br>

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

</body>
</html>