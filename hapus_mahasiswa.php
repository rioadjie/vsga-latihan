<?php 

// start session
session_start();

// koneksi ke database
include 'koneksi.php';

// menangkap data
$id = $_GET['id'];

// insert data ke database
mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_mhs='$id'");

// membuat session data berhasil di simpan
$_SESSION["sukses"] = 'Data Berhasil Dihapus';

// kembali ke halaman master data
header("location:masterdata.php");


?>

