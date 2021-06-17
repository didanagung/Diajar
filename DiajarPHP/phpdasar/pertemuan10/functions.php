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








 ?>