<?php
	$hapus=mysqli_query($mysqli, "SELECT * FROM buku where id='$_GET[id]'");
	//memilih gambar untuk dihapus
	$nama_gambar=mysqli_fetch_array($hapus);
	//nama field gambar
	$lokasi=$nama_gambar['gambar'];
	//alamat tempat foto
	$hapus_gambar="images/buku/$lokasi";
	//script untuk menghapus gambar dari folder
	unlink($hapus_gambar);
	mysqli_query($mysqli, "DELETE FROM buku WHERE id='$_GET[id]'");
	header('location:index.php?page=readBuku')
?>