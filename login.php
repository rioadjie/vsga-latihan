<?php
//menyertakan file program koneksi.php pada register
require('koneksi.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JWD A - Poliwangi</title>
    <link rel="stylesheet" href="css/login.css">
    <!-- Ikon dari Fontawesome -->
    <link rel="stylesheet" href="fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="fontawesome/css/brands.css">
    <link rel="stylesheet" href="fontawesome/css/solid.css">
    <!-- <script src="js/script.js"></script> -->
</head>

<body>
    <!-- Gambar side -->
    <section class="gambar-side">
        <img src="images/Login.png" alt="login">
    </section>

    <!-- Form Login -->
    <aside class="form-login">
        <a href="index.html">
            < Beranda</a>
                <h1>Masuk</h1>
                <p>Jika anda belum memiliki akun, anda dapat <span><a href="register.php">Registrasi disini !</a></span></p>
                <!-- Form -->
                <div class="login_form">
                    <form action="cek_login.php" name="myForm" onsubmit="return validateForm(event)" method="post">
                        <div class="input_box">
                            <label for="username">Username</label>
                            <input type="text" placeholder="Masukan username anda" id="username" name="username" />
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="input_box">
                            <label for="pass">Password</label>
                            <input type="password" placeholder="Masukan Password" id="password" name="password" />
                            <i class="fa-solid fa-lock"></i>
                            <i class="fa-solid fa-eye-slash pw_hide"></i>
                        </div>

                        <button class="button" type="submit" value="Submit">Masuk</button>
                    </form>
                </div>
    </aside>
</body>

</html>