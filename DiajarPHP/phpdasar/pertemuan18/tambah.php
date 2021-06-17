<?php
session_start();

if (!isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

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

<!-- Jika Anda Ingin menambahkan gambar, maka input gambar harus menggunakan tipe "file" dan menambahkan enctype="multipart/form-data" -->
<!-- Ada 5 buah array didalamnnya, yang pertama adalah name atau nama filenya, kedua type untuk mengetahaui nama filenya, ketiga tmp_name untuk tempat penyimpanan sementara, keempat error untuk menghasilkan angka misal 0 berarti tidak ada error, size untuk mengetahui ukuran gambar -->
<form action="" method="post" enctype="multipart/form-data" >
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
			<input type="file" name="gambar" id="gambar" >
		</li>
		<li>
			<button type="submit" name="submit">Tambah Data!</button>
		</li>
	</ul>

</form>

</body>
</html>