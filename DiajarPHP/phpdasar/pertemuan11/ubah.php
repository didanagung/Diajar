<?php
require 'functions.php';

// Ambil data di url
$id = $_GET["id"];
// query data hp berdasarkan id
// mengapa dibelakang dipake [0]?
// maksudnya adalah jika kita memanggil query langsung mengambil index ke-0 nya (elemen pertama)
$hp = query ("SELECT * FROM handphone WHERE id = $id")[0];

// cek apakah tombol submit sudah di tekan atau belom
if (isset($_POST["submit"])) {

// cek apakah data berhasil diubah atau tidak
	if(ubah ($_POST) > 0){
		echo "
		<script> 
			alert('Data Berhasil Diubah!');
			document.location.href = 'index.php'
		</script>
		";
	}else{
		echo "
		<script> 
			alert('Data Gagal Diubah!');
			document.location.href = 'index.php'
		</script>
		";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Handphone</title>
</head>
<body>
<h1>Ubah Data Handphone</h1>

<form action="" method="post">
	<input type="hidden" name="id" value="<?= $hp["id"]; ?>">
	<ul>
		<li>
			<!-- for pasangannya dengan id -->
			<label for="tipe">Tipe : </label>
			<input type="text" name="tipe" id="tipe" required value="<?= $hp["tipe"] ?>">
		</li>
		<li>
			<label for="merk">Merk : </label>
			<input type="text" name="merk" id="merk" required value="<?= $hp["merk"] ?>">
		</li>
		<li>
			<label for="processor">Processor : </label>
			<input type="text" name="processor" id="processor" required value="<?= $hp["processor"] ?>">
		</li>
		<li>
			<label for="garansi">Garansi : </label>
			<input type="text" name="garansi" id="garansi" required value="<?= $hp["garansi"] ?>">
		</li>
		<li>
			<label for="harga">Harga : </label>
			<input type="text" name="harga" id="harga" required value="<?= $hp["harga"] ?>">
		</li>
		<li>
			<label for="gambar">Gambar : </label>
			<input type="text" name="gambar" id="gambar" required value="<?= $hp["gambar"] ?>">
		</li>
		<li>
			<button type="submit" name="submit">Ubah Data!</button>
		</li>
	</ul>

</form>

</body>
</html>