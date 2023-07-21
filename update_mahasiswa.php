<?php
include ('koneksi.php');

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa where id_mhs='$id'");

while($d = mysqli_fetch_array($data)) {
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
                <h3>Form Ubah Data Mahasiswa</h3>
            </div>

            <div class="card-body">
                <form method="POST" action="proses_update_mhs.php">
                    <input type="hidden" name="id_mhs" value="<?php echo $d['id_mhs'];?>">
                    <div class="form-group">
                        <input type="text" id="nama_mhs" name="nama_mhs" class="form-control" placeholder="Nama Lengkap" value="<?php echo $d['nama_mhs'];?>">
                    </div>
                    <div class="form-group">
                        <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM" value="<?php echo $d['nim'];?>">
                    </div>
                    <div class="form-group">
                        <input type="text" id="kelas" name="kelas" class="form-control" placeholder="Kelas" value="<?php echo $d['kelas'];?>">
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="<?php echo $d['email'];?>">
                    </div>
                    <div class="form-group">
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat"><?php echo $d['alamat'];?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                    </div>
                </form>
                <div>
                    <a href="masterdata.php">
                        <button type="back" class="btn btn-danger">Kembali</button>
                    </a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>