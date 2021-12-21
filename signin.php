<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$username' and password='$password'");
$koneksi = mysqli_connect($host, $user, $pass, $database) or die(mysqli_error($koneksi));

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	$_SESSION['login'] = TRUE;

	header("location:index.php");
} else {
	header("location:login.php?pesan=gagal");
}
