<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JWD A - Poliwangi</title>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body id="page-top">
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Form Tambah Data Mahasiswa</h3>
            </div>

            <div class="card-body">
                <form method="POST" action="tmahasiswa.php">
                    <div class="form-group">
                        <input type="text" id="nama_mhs" name="nama_mhs" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM">
                    </div>
                    <div class="form-group">
                        <input type="text" id="kelas" name="kelas" class="form-control" placeholder="Kelas">
                    </div>
                    <div class="form-group">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>