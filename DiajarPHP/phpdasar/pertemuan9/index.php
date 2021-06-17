<?php 
require'functions.php';
$handphone = query("SELECT * FROM handphone");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Handphone</h1>

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
		<a href="">Ubah</a>|
		<a href="">Hapus</a>
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