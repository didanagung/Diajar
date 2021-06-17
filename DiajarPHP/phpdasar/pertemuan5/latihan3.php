<?php 
// ieumah asupna ka array numerik
$mahasiswa = [["Didan Agung Sergia", "A1.1800001", "Manajemen Informatika", "didansergia@gmail.com"],
			["Sandhika Galih", "A3.1800056", "Teknik Informatika", "sandhika@gmail.com"]
];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
 <h1>Daftar Mahasiswa</h1>
<!-- 
 <ul>
 	<?php foreach($mahasiswa as $m) : ?>
 		<li><?= $m; ?></li>
 	<?php endforeach; ?>
 </ul> -->
<!-- atau -->
<?php foreach( $mahasiswa as $m ): ?>
<ul>
	<li>Nama : <?= $m[0] ?></li>
	<li>NIM : <?= $m[1] ?></li>
	<li>Jurusan : <?= $m[2] ?></li>
	<li>Email : <?= $m[3] ?></li>
</ul>
<?php endforeach; ?>




 </body>
 </html>