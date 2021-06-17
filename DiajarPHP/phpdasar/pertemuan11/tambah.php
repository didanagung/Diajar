<?php
require 'functions.php';
// cek apakah tombol submit sudah di tekan atau belom
if (isset($_POST["submit"])) {

// cek apakah data berhasil ditambahkan atau tidak
	if(tambah ($_POST) > 0){
		echo "
		<script> 
			alert('Data Berhasil Ditambahkan!');
			document.location.href = 'index.php'
		</script>
		";
	}else{
		echo "
		<script> 
			alert('Data Gagal Ditambahkan!');
			document.location.href = 'index.php'
		</script>
		";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Handphone</title>
</head>
<body>
<h1>Tambah Data Handphone</h1>

<form action="" method="post">
	<ul>
		<li>
			<!-- for pasangannya dengan id -->
			<label for="tipe">Tipe : </label>
			<input type="text" name="tipe" id="tipe" required>
		</li>
		<li>
			<label for="merk">Merk : </label>
			<input type="text" name="merk" id="merk" required>
		</li>
		<li>
			<label for="processor">Processor : </label>
			<input type="text" name="processor" id="processor" required>
		</li>
		<li>
			<label for="garansi">Garansi : </label>
			<input type="text" name="garansi" id="garansi" required>
		</li>
		<li>
			<label for="harga">Harga : </label>
			<input type="text" name="harga" id="harga" required>
		</li>
		<li>
			<label for="gambar">Gambar : </label>
			<input type="text" name="gambar" id="gambar" required>
		</li>
		<li>
			<button type="submit" name="submit">Tambah Data!</button>
		</li>
	</ul>

</form>

</body>
</html>