<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JWD A - Poliwangi</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bio.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="fontawesome/css/brands.css">
    <link rel="stylesheet" href="fontawesome/css/solid.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo poliwangi.svg" alt="logo_poliwangi" width="100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <div class="dropdown mb-3 d-lg-none">
                            <button class="btn btn-first dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Menu
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Beranda</a></li>
                                <li><a class="dropdown-item" href="#">Daftar Event</a></li>
                                <li><a class="dropdown-item" href="#">Daftar Ormawa</a></li>
                                <li><a class="dropdown-item" href="#">Tentang Kami</a></li>
                            </ul>
                        </div>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                        </form>
                        <div class="login">
                            <a href="login.html">
                                <button class="btn btn-primary">Login</button>
                            </a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Nav Item -->
        <div class="container menu-wrapper d-none d-lg-block bg-light"
            style="box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.25);">
            <div class="menu d-flex justify-content-center align-items-center mb-3">
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                <a class="nav-link" href="#">Daftar Event</a>
                <a class="nav-link" href="#">Daftar Ormawa</a>
                <a class="nav-link" href="#">Tentang Kami</a>
            </div>
        </div>
    </header>
    <!-- Conten -->
    <div class="container">
    <form action="#" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan Nama Lengkap Anda">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Email Anda">
        </div>
        <div class="form-group">
            <label>Pilih Jenis Kelamin:</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-laki">
            <label class="form-check-label" for="laki_laki">Laki-laki</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
            <label class="form-check-label" for="perempuan">Perempuan</label>
        </div>
    </form>
    </div>
    <!-- End of Content -->

    <!-- Script -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.cycle2.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
</body>

</html>