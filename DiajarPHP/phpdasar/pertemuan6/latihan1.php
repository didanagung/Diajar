<?php 
// ieumah asupna ka array numerik
// $mahasiswa = [["Didan Agung Sergia", "A1.1800001", "Manajemen Informatika", "didansergia@gmail.com"],
// 			["Sandhika Galih", "A3.1800056", "Teknik Informatika", "sandhika@gmail.com"]
// ];


// array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri 
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
	"garansi" => "TAM",
	"gambar" => "r6.jpg",
	"harga" => "Rp. 3.000.000"
]];


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Handphone</title>
 </head>
 <body>
 <h1>Daftar Handphone di Didan Cell</h1>
<!-- 
 <ul>
 	<?php foreach($mahasiswa as $m) : ?>
 		<li><?= $m; ?></li>
 	<?php endforeach; ?>
 </ul> -->
<!-- atau -->
<?php foreach( $hape as $hp ): ?>
<ul>
	<li>
		<img src="img/<?= $hp["gambar"]; ?>">
	</li>
	<li>Tipe : <?= $hp["tipe"] ?></li>
	<li>Merk : <?= $hp["merk"] ?></li>
	<li>Processor : <?= $hp["processor"] ?></li>
	<li>Garansi : <?= $hp["garansi"] ?></li>
	<li>Harga : <?= $hp["harga"] ?></li>
</ul>
<?php endforeach; ?>




 </body>
 </html>