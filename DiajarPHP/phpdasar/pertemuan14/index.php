<?php 
// untuk menghubungkan
require'functions.php';

// INGAAT URUTAN KODING MENENTUKAN ANDA BERHASIL ATAU TIDAK!!!!!!

// jika ingin menampilkan data yang terbaru paling atas maka gunakan perintah "DESC" itu artinya dari yang terbersar hingga terkecil
// dan jika ingin menampilkan data dari yang lama / id berjumlah kecil maka gunakan perintah "ASC"
// INGAT!!! query diatas digunakan jika anda memakai query "ORDER BY"
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
</head>
<body>

<h1>Daftar Handphone</h1>

<a href="tambah.php">Tambah Data Handphone</a>
<br><br>

<form action="" method="post">
	
	<input type="text" name="keyword" size="25" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
	<button type="submit" name="cari">Cari</button>

</form>

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