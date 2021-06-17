<?php 
// ini adalah komentar (ctrl + /)
/* ini juga komentar */

// Sintaks PHP

// Standar Output
// echo, print
// print_r (untuk isi array)
// var_dump (melihat isi dari variable)

echo "Didan Agung Sergia";
// Penukisan sintaks PHP

// Variable
// tidak boleh diawali dengan angka, tapi boleh menggunakan angka (jangan ada spasi)
$nama = " Didan Agung Sergia";
 ?>


  <!-- 1. PHP didalam HTML -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>Belajar PHP</title>
 </head>
 <body>
 	<h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
 </body>
 </html>

<?php  
// Operator
// aritmatika (langsung aja)
// penggabung string/ concatenation/ concat menggunakan .
// $nama_depan = "Didan";
// $nama_belakang = "Agung";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
//  =, +=, -=, *=, %=, .=
$x = 2;
$x += 3;
echo($x);
?>