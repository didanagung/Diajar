<?php 
// cek apakah tidak ada data di "$_GET"
// lamun misalna di klik tipe hpna bakal kanu halaman berikutna
// lamun ka halaman berikutna tanpa click maka bakal nambag
// inget pas tag "isset" kudu make simbol "!" lamun hanteu bakal tibalik.
if ( !isset($_GET["tipe"]) || 
	!isset($_GET["merk"]) ||
	!isset($_GET["processor"]) ||
	!isset($_GET["garansi"]) ||
	!isset($_GET["harga"])) {
	// redirect
	header("Location: latihan1.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail HP</title>
</head>
<body>

<ul>
	<li><img src="img/<?= $_GET["gambar"]; ?>"></li>
	<li>Tipe : <?= $_GET["tipe"]; ?></li>
	<li>Merk : <?= $_GET["merk"]; ?></li>
	<li>Processor : <?= $_GET["processor"]; ?></li>
	<li>Garansi : <?= $_GET["garansi"]; ?></li>
	<li>Harga : <?= $_GET["harga"]; ?></li>
</ul>

<a href="latihan1.php">Kembali ke Daftar Hp</a>

</body>
</html>