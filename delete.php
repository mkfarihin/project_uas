<?php
	$hapus=mysqli_query($mysqli, "select*from mahasiswa where id='$_GET[id]'");
	//memilih gambar untuk dihapus
	$nama_gambar=mysqli_fetch_array($hapus);
	//nama field gambar
	$lokasi=$nama_gambar['gambar'];
	//alamat tempat foto
	$hapus_gambar="images/$lokasi";
	//script untuk menghapus gambar dari folder
	unlink($hapus_gambar);
	mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE id='$_GET[id]'");
	header('location:index.php?page=read')
?>