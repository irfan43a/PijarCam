<?php 
require 'function.php';

//ambil data di url
$id = $_GET["id"];
//query data mahasiswa berdsarkan id
$prdk = query("SELECT * FROM produk WHERE id = $id")[0];

//cek tombol
if(isset($_POST["submit"])){
    //cek berhasil
if(tambah($_POST) > 0 ){
    echo "
            <script>alert('Produk berhasil di edit');
            document.location.href = 'index.php';
            </script>";
        }else{
            echo "
            <script>alert('prduk gagal di edit');
            document.location.href = 'index.php';

            </script>";
        }
    }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Form Tambah</title>
 </head>
 <body>

 	<div class="container ">
 		<center>
 		<h1>Tambah data produk</h1>

 		<form action="" method="post">
            <input type="hidden" name="id" value="<?= $produk["id"];  ?>">
 			<table border="0" cellpadding="10"
 			cellspacing="0">
 				<tr>
 					<td><label for="nama_produk">Nama Produk</label></td>
 					<td><input type="text" name="nama_produk" id="nama_produk"
                        value="<?= $prdk["nama_produk"];?>"></td>

 				</tr>
 				<tr>
 					<td><label for="keterangan">Keterangan</label></td>
 					<td><input type="text" name="keterangan" id="keterangan"
                       value="<?= $prdk["keterangan"];?>"></td>
 				</tr>
 				<tr>
 					<td><label for="harga">harga</label></td>
 					<td><input type="text" name="harga" id="harga"
                        value="<?= $prdk["harga"];?>"></td>
 				</tr>
 				<tr>
 					<td><label for="jumlah">jumlah</td>
 					<td><input type="text" name="jumlah" id="jumlah"
                        value="<?= $prdk["jumlah"];?>"></td>
 				</tr>
 				<tr>
 					<td><button type="submit" name="submit">Edit</button></td>
 					<td colspan="2"><a href="index.php">kembali</a></td>
 				</tr>
 			</table>
 			


 		</form>
	 	</center>
 	</div>
 </body>
 </html>