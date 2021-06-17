<?php 
function salam( $waktu = "Siang", $nama = "Didan"){
	return "Selamat $waktu, $nama!";
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan Function</title>
 </head>
 <body>
 	<h1> <?= salam(); ?></h1>
 </body>
 </html>