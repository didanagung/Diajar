// ambil elmen yang dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// tambahkan event ketika keyword di tulis
keyword.addEventListener('keyup', function() {

	// buat object ajax
	var xhr = new XMLHttpRequest();

	// cek kesiapan ajax
	xhr.onreadystatechange = function() {
		if ( xhr.readyState == 4 && xhr.status == 200 ) {
			container.innerHTML = xhr.responseText;
		}
	}

	// eksekusi ajax
	// parameter pertama request method (bisa menggunakan GET dan POST)
	// parameter kedua sumbernya dari mana
	// parameter ketig pilih mau syncronus atau asyncronus (jika true berarti asyncronus) 
	xhr.open('GET', 'ajax/hape.php?keyword=' + keyword.value, true);
	// menjalankan ajax
	xhr.send();

});