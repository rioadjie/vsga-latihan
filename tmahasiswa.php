<?php 

// start session
session_start();

// koneksi ke database
include 'koneksi.php';

// menangkap data 
$Nama_mahasiswa = $_POST['nama_mhs'];
$Nim = $_POST['nim'];
$Kelas = $_POST['kelas'];
$Email = $_POST['email'];
$Alamat = $_POST['alamat'];

// insert data ke database
mysqli_query($koneksi, "INSERT INTO mahasiswa (nama_mhs,nim,kelas,email,alamat) value('$Nama_mahasiswa', '$Nim', '$Kelas', '$Email', '$Alamat')");

// membuat session data berhasil di simpan
$_SESSION["sukses"] = 'Data Berhasil Disimpan';

// kembali ke halaman master data
header("location:masterdata.php");


?>