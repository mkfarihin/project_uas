<?php
	$gambar = $_FILES['gambar']['name'];
	//Apabila gambar tidak diganti
	if (empty($gambar)) {
		$mysqli->query("UPDATE buku SET kode = '$_POST[kode]',
			judul_buku	= '$_POST[judul]',
			penerbit	= '$_POST[penerbit]',
			jenis_buku	= '$_POST[jenis]',
			referensi	= '$_POST[referensi]'
			WHERE id = '$_POST[id]'");
	}else{
		$hapus= $mysqli->query("select * from buku where id='$_POST[id]'");
		//menghapus gambar yang lama
		$nama_gambar=mysqli_fetch_array($hapus);
		//nama field gambar
		$lokasi=$nama_gambar['gambar'];
		//alamat tempat foto
		$hapus_gambar="images/buku/$lokasi";
		//script untuk menghapus gambar dari folder
		unlink($hapus_gambar);
		move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/buku/'.$gambar);
		$mysqli->query("UPDATE buku SET kode = '$_POST[kode]',
			judul_buku	= '$_POST[judul]',
			penerbit	= '$_POST[penerbit]',
			jenis_buku	= '$_POST[jenis]',
			referensi	= '$_POST[referensi]',
			gambar 	= '$gambar'
			WHERE id = '$_POST[id]'");
	}
	header('location:index.php?page=readBuku');
?>