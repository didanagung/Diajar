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
	$gambar = htmlspecialchars($data["gambar"]);

		// query insert data
	$query = "INSERT INTO handphone
			VALUES
			('','$tipe','$merk','$processor','$garansi','$harga','$gambar')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

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
	$gambar = htmlspecialchars($data["gambar"]);

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