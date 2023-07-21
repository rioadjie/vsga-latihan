<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JWD A - Poliwangi</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-master.css">
    <!-- Ikon dari Fontawesome -->
    <link rel="stylesheet" href="fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="fontawesome/css/brands.css">
    <link rel="stylesheet" href="fontawesome/css/solid.css">
</head>

<!-- penting untuk menggunakan fungsi session di bawah ini  -->
<?php session_start(); ?>

<body>
    <div class="container">
        <!-- Header -->
        <header class="navbar">
            <div class="logo">
                <a href="index.html">
                    <img src="images/logo poliwangi.svg" alt="LogoPoliwangi">
                </a>
            </div>
            <div class="login">
                <a href="login.html">
                    <button class="btn-login">Login</button>
                </a>
            </div>
            <div class="cari">
                <form class="nosubmit">
                    <input class="nosubmit" type="search" name="cari" placeholder="Cari..">
                </form>
            </div>

            <div class="clearfix"></div>

            <!-- Navbar -->
            <nav class="main-menu">
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li><a href="tentangkami.html">Tentang Kami</a></li>
                    <li class="dropdown"><a href="#">Layanan</a>
                        <ul class="dropdown-content">
                            <li><a href="#">Peminjaman</a></li>
                            <li><a href="#">Penggandaan</a></li>
                            <li><a href="#">Stok Opname</a></li>
                        </ul>
                    </li>
                    <li><a href="masterdata.php" class="aktif">Master Data</a></li>
                    <li><a href="#">Laporan</a></li>
                    <li><a href="#">Kontak</a></li>
                    <li><a href="biodata.php">Biodata</a></li>
                </ul>
            </nav>
            <!-- End of Navbar -->
        </header>
        <!-- End of header -->

        <!-- Slider -->
        <section class="banner cycle-slideshow">
            <img src="images/banner1.jpeg" alt="Banner1">
            <img src="images/banner2.jpeg" alt="Banner2">
        </section>
        <!-- End of Slider -->

        <!-- Conten -->
        <h1>Tabel Mahasiswa</h1>
        <a href="tambah_mahasiswa.php">
            <button class="btn-login" style="margin-bottom: 10px;">Tambah Data</button>
        </a>
        <a href="./proses/exportdataexel.php">
            <button class="btn-login" style="float: right; margin-right: 10px;" >Export to Exel</button>
        </a>

        <table id="customers">
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Kelas</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <?php
            $query = "SELECT * FROM mahasiswa";
            $result = mysqli_query($koneksi, $query);
            $i = 1;
            while ($d = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $d['nama_mhs']; ?></td>
                    <td><?php echo $d['nim']; ?></td>
                    <td><?php echo $d['kelas']; ?></td>
                    <td><?php echo $d['email']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td>
                        <a href="update_mahasiswa.php?id=<?php echo $d['id_mhs']; ?>"><i class="fas fa-edit" style="color: green;"></i></a>&ensp;
                        <a href="hapus_mahasiswa.php?id=<?php echo $d['id_mhs']; ?>"><i class="fas fa-trash-alt" style="color: red"></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
        <br><br><br>
        <!-- End of Content -->

        <!-- Footer -->
        <footer class="main-footer">
            <div class="footer-box">
                <img src="images/logo poliwangi.svg" alt="LogoPoliwangi">
            </div>
            <div class="footer-box">
                <h3>MENU</h3>
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li><a href="tentangkami.html">Tentang Kami</a></li>
                    <li><a href="#">Layanan</a></li>
                    <li><a href="#">Master Data</a></li>
                    <li><a href="#">Laporan</a></li>
                </ul>
            </div>
            <div class="footer-box">
                <h3>KONTAK KAMI</h3>
                <address>
                    <p><i class="fa-solid fa-location-dot"></i> &ensp;Jalan Raya Jember KM 13 Banyuwangi 68461, Jawa Timur – Indonesia</p>
                    <p><a href="tel:+62 (0333) 636780"><i class="fa-solid fa-mobile"></i> &ensp;+62 (0333) 636780</a></p>
                    <p><a href="mailto:poliwangi@poliwangi.ac.id"><i class="fa-solid fa-envelope"></i> &ensp;poliwangi@poliwangi.ac.id</a></p>
                </address>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- End of Footer -->
        <div class="footer2">
            <hr>
            <div class="footer-box1">
                <p><small>Hak Cipta &copy;2023. Hak Cipta Dilindungi</small></p>
            </div>
            <div class="footer-box2">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://wa.me/+6281235736467"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="mailto:poliwangi@poliwangi.ac.id"><i class="fa-solid fa-envelope"></i></a>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.cycle2.js"></script>
    <!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set
    di dalam session sukses  -->
    <?php if (@$_SESSION['sukses']) { ?>
        <script>
            swal("Yeah!", "<?php echo $_SESSION['sukses']; ?>", "success");
        </script>
        <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['sukses']);
    } ?>
</body>

</html>