<?php 

// start session
session_start();

// koneksi ke database
include 'koneksi.php';

// menangkap data 
$id_mhs = $_POST['id_mhs'];
$nama_mhs = $_POST['nama_mhs'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

// insert data ke database
mysqli_query($koneksi, "UPDATE mahasiswa SET nama_mhs='$nama_mhs', nim='$nim', kelas='$kelas', email='$email', alamat='$alamat' where id_mhs='$id_mhs'");

// membuat session data berhasil di simpan
$_SESSION["sukses"] = 'Data Berhasil Di Update';

// kembali ke halaman master data
header("location:masterdata.php");


?>