<?php 
//koneksi ke database
$conn = mysqli_connect("localhost","root","","pijarcamp");

//query
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows =[];
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}


//ambil data dari form
function tambah($data){
	global $conn;
	$nama_produk = $data["nama_produk"];
	$keterangan = $data["keterangan"];
	$harga = $data["harga"];
	$jumlah = $data["jumlah"];

//query insert data
	$query = "INSERT INTO produk
				VALUES 
				('','$nama_produk','$keterangan','$harga','$jumlah')
				";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);

}

//hapus
function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM produk WHERE id = $id");
	return mysqli_affected_rows($conn);
}


//edit
function edit($data){
	global $conn;
	$nama_produk = $data["nama_produk"];
	$keterangan = $data["keterangan"];
	$harga = $data["harga"];
	$jumlah = $data["jumlah"];

//query edit
	$query = "UPDATE produk SET 
				nama_produk = '$nama_produk',
				keterangan = '$keterangan',
				harga = '$harga',
				jumlah = '$jumlah'
			WHERE id = $id
			";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);

}



 ?>