<?php 
// array
// variabel yang dapat menampung banyak nilai
// elmen pada array bodleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index yang dimulai dari 0

// membuat array dengan 
// cara lama
$hari =  array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arrl = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// echo "<br>";
// // menampilkan 1 elemen pada array
// echo $arrl[0];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);



 ?>