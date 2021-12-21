<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$gambar = $_FILES['gambar']['name'];

mysqli_query($mysqli, "INSERT INTO mahasiswa(nim,nama,jurusan,alamat,gambar) VALUES('$nim','$nama','$jurusan','$alamat','$gambar')");
move_uploaded_file($_FILES['gambar']['tmp_name'],'images/'.$gambar);
header('location:index.php?page=read');
exit;
?>