<?php
require 'function.php';
$produk = query("SELECT * FROM produk ");
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Level 3 Tugas 10</title>
 </head>
 <body>

 	<div class="container ">
 		<center>
 		<h1>Pijar Camp</h1>

 		<a href="tambah.php">Tambah Produk</a>
 	</center>

 		<br>

 		<table border="1" cellpadding="10" cellspacing="0" style="margin-left: auto; margin-right: auto;">
 			<tr>
 				<th>No.</th>
 				<th>Nama Produk</th>
 				<th>Keterangan</th>
 				<th>Harga</th>
 				<th>jumlah</th>
 				<th>aksi</th>
 			</tr>

 		<?php $i = 1; ?>
 		<?php foreach ($produk as $row) : ?>
 			<tr>
 				<td><?= $i; ?></td>
 				<td><?= $row["nama_produk"]; ?></td>
 				<td><?= $row["keterangan"]; ?></td>
 				<td><?= $row["harga"]; ?></td>
 				<td><?= $row["jumlah"]; ?></td> 
 				<td><a href="edit.php?id=<?= $row['id']; ?>">Edit</a> | <a href="hapus.php?id=<?= $row['id']; ?>">Hapus</a></td>				
 			</tr>
 		<?php $i++; ?>
 		<?php endforeach; ?>
 			

 		</table>
 		
 	</div>
 
 </body>
 </html>