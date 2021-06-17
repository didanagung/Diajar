<?php 
// lingkup variabel / variable scope
// mun misalna urang nyieun variabel dina jero function, nu berlaku kur dina jero functionna hungkul samentawis nu diluar function teu dianggap.

// $d = 10;

// function tampild(){
// 	// bisa lamun misalna make tag "global" artina si system neangan variable anu luareun function
// 	global $d;
// 	echo $d;
// }

// tampild();
// SUPERGLOBALS ($_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV) kabeh termasuk array associative

// $_GET
// di request $_GET mah bisa langsung asupkeun datana lewat halamanna tinggal tambahan "?" jeung mun misalna ek nambahan kategori bisa make simbol "&".

$hape = [[
	"merk" => "Xiaomi", 
	"tipe" => "Redmi Note 7",
	"processor" => "Snapdragon 660",
	"garansi" => "TAM",
	"gambar" => "rn7.jpeg",
	"harga" => "Rp. 2.200.000"

], ["merk" => "Realme", 
	"tipe" => "Realme 2 Pro",
	"processor" => "Snapdragon 660",
	"garansi" => "Resmi",
	"gambar" =>"r2p.jpeg",
	"harga" => "Rp. 2.000.000"
	
], [
	"merk" => "Xiaomi", 
	"tipe" => "Redmi Note 8",
	"processor" => "Snapdragon 665",
	"garansi" => "Distributor",
	"gambar" => "rn8.jpeg",
	"harga" => "Rp. 2.499.000"
], [
	"merk" => "Realme", 
	"tipe" => "Realme 3 Pro",
	"processor" => "Snapdragon 710",
	"garansi" => "Resmi",
	"gambar" => "r3p.jpeg",
	"harga" => "Rp. 2.999.000"
], [
	"merk" => "Realme", 
	"tipe" => "Realme 6",
	"processor" => "Mediatek G90T",
	"garansi" => "Resmi",
	"gambar" => "r6.jpg",
	"harga" => "Rp. 3.299.000"
],];


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1> Daftar HP </h1>
<ul>
<?php foreach ($hape as $hp) : ?>
	<li>
		<a href="latihan2.php?tipe=<?= $hp["tipe"]; ?>&merk=<?= $hp["merk"]; ?>&processor=<?= $hp["processor"]; ?>&garansi=<?= $hp["garansi"]; ?>&harga=<?= $hp["harga"]; ?>&gambar=<?= $hp["gambar"]; ?>"> Tipe : <?= $hp["tipe"]; ?></a>
		</li>
<?php endforeach; ?>
</ul>
</body>
</html>