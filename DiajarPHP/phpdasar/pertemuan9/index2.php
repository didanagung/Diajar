<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//  ambil data dari tabel / query data
$result = mysqli_query($conn, "SELECT * FROM handphone");

// ambil data (fetch) dari objek result 
// mysqli_fetch_row() // mengembalikan array numerik (angka)
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengambil keduanya namun kekurangannya adalah data yang dihasilkan double antara numerik dan associative
// mysqli_fetch_object() // mengembalikan objek

// while ($hp = mysqli_fetch_assoc($result)) {
// var_dump($hp);
// }

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
<?php  while ($row = mysqli_fetch_assoc($result)) : ?>
<tr>
	<td> <?= $i; ?> </td>
	<td>
		<a href="">Ubah</a>|
		<a href="">Hapus</a>
	</td>
	<td><img src="img/<?= $row["gambar"]; ?> " width="50"></td>
	<td><?= $row ["tipe"]; ?></td>
	<td><?= $row ["merk"]; ?></td>
	<td><?= $row ["processor"]; ?></td>
	<td><?= $row ["garansi"]; ?></td>
	<td><?= $row ["harga"]; ?></td>
</tr>
<?php $i++; ?>
<?php endwhile; ?>

</table>

</body>
</html>