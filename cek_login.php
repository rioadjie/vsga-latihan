<?php 
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$login = mysqli_query($koneksi, $query);

// alihkan ke halaman dashboard admin
header("location:masterdata.php");