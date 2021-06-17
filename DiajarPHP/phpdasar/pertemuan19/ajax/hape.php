<?php 
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM handphone 
			WHERE
				tipe LIKE '%$keyword%' OR
				merk LIKE '%$keyword%' OR
				processor LIKE '%$keyword%' OR
				garansi LIKE '%$keyword%' OR
				harga LIKE '%$keyword%'
				 ";
$handphone = query($query);
?>

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
<?php foreach ($handphone as $hp) : ?>
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