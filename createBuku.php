<?php
$kode = $_POST['kode'];
$judul = $_POST['judul'];
$penerbit = $_POST['penerbit'];
$jenis = $_POST['jenis'];
$referensi = $_POST['referensi'];
$gambar = $_FILES['gambar']['name'];

mysqli_query($mysqli, "INSERT INTO buku(kode,judul_buku,penerbit,jenis_buku,referensi,gambar) VALUES('$kode','$judul','$penerbit','$jenis','$referensi','$gambar')");
move_uploaded_file($_FILES['gambar']['tmp_name'],'images/buku/'.$gambar);
// print_r($mysqli);
header('location:index.php?page=readBuku');
exit;
?>