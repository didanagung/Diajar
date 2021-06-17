<?php 
// date
// untuk hari simbolnya adalah "l"
	// echo date("l, d-M-Y");

// time
// UNIX Timestamp / EPOCH time (detik yang sudah berlalu sejak 1 Januari 1970)
 // echo time();
// echo date ("l, d-M-Y", time()+60*60*24*9100);

// mktime (membuat sendiri detik)
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,3,16,2000));

// strtotime
echo date("l", strtotime("16 March 2000"));


// Berhubungan dengan STRING
// strlen() / menghitung panjang sebuah string
// strcmp() / membandingkan dua buah string
// explode() / memecah sebuah string menjadi array
// htmlspecialchars() / function khusus untuk mencegah kita dari orang yang iseng

// UTILITY (bantuan)
// var_dump() / fungsi untuk mencetak dari sebuah variabel array objek
// isset() / apakah sebuah variable udah pernah dibikin atau belum (boolean)
// empty() / apakah variabel yang ada itu kosong atau tidak
// die() / memberhentikan program
// sleep () / memberhentikan sementara
?>
