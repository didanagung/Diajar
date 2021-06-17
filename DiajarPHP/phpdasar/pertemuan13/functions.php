<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query ($query){
	global $conn;
	$result = mysqli_query ($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	// ambil data dari tiap elemen dalam form
	global $conn;

	$id = $data["id"];
	$tipe = htmlspecialchars($data["tipe"]);
	$merk = htmlspecialchars($data["merk"]);
	$processor = htmlspecialchars($data["processor"]);
	$garansi = htmlspecialchars($data["garansi"]);
	$harga = htmlspecialchars($data["harga"]);
	
	// upload gambar
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

		// query insert data
	$query = "INSERT INTO handphone
			VALUES
			('','$tipe','$merk','$processor','$garansi','$harga','$gambar')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}


function upload(){
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if ($error === 4 ) {
		echo "<script>
					alert('pilih gambar terlebih dahulu');
			</script>";
			return false;
	}

	// cek apakah yang diupload apakah gambar atau bukan
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	// explode adalah untuk memecah sebuah string menjadi array, memecahnya dengan delimiter
	$ekstensiGambar = explode('.', $namaFile);
	// strtolower yaitu untuk memaksa jenis file yang asalnya huruf besar menjadi kecil
	// end yaitu berfungsi untuk memilih paling akhir dari sebuah ektensi
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	// funngsi in_array menghasilkan true dan false
	// analoginya seperti jarum di dalam jerami
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
					alert('Yang Anda Upload Bukanlah Gambar!');
			</script>";
			return false;
	}

	// cek jika ukurannya melebihi kapasitas
	// ini dalam bentuk byte
	if ($ukuranFile > 1000000) {
		echo "<script>
					alert('ukuran gambar terlalu besar');
			</script>";
			return false;
	}


	// jika lolos pengecekan gambar dan siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/' . $namaFileBaru );

	return $namaFileBaru;


}





function hapus ($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM handphone WHERE id = $id");
	return  mysqli_affected_rows($conn);
}


function ubah ($data){
	// ambil data dari tiap elemen dalam form
	global $conn;
	
	$id = $data["id"];
	$tipe = htmlspecialchars($data["tipe"]);
	$merk = htmlspecialchars($data["merk"]);
	$processor = htmlspecialchars($data["processor"]);
	$garansi = htmlspecialchars($data["garansi"]);
	$harga = htmlspecialchars($data["harga"]);
	$gambarLama =htmlspecialchars($data["gambarLama"]);

	// cek apakah user pilih gambar baru atau tidak
	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarLama;
	}else {
		$gambar = upload();

	}

	
		// query insert data
	$query = "UPDATE handphone SET
				tipe = '$tipe',
				merk = '$merk',
				processor = '$processor',
				garansi = '$garansi',
				harga = '$harga',
				gambar = '$gambar'
				WHERE id = $id 
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function cari($keyword) {
	$query = "SELECT * FROM handphone 
				WHERE
				tipe LIKE '%$keyword%' OR
				merk LIKE '%$keyword%' OR
				processor LIKE '%$keyword%' OR
				garansi LIKE '%$keyword%' OR
				harga LIKE '%$keyword%'
				 ";
				return query($query);
}




 ?>