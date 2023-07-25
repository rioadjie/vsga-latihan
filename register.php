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
</head>

<body>
    <?php
    //menyertakan file program koneksi.php pada register
    require('koneksi.php');
    //inisialisasi session
    session_start();

    $error = '';
    $validate = '';
    if (isset($_SESSION['user'])) header('Location: masterdata.php');
    //mengecek apakah data username yang diinpukan user kosong atau tidak
    if (isset($_POST['submit'])) {

        // menghilangkan backshlases
        $username = stripslashes($_POST['username']);
        //cara sederhana mengamankan dari sql injection
        $username = mysqli_real_escape_string($koneksi, $username);
        $email    = stripslashes($_POST['email']);
        $email    = mysqli_real_escape_string($koneksi, $email);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($koneksi, $password);
        $repass   = stripslashes($_POST['repassword']);
        $repass   = mysqli_real_escape_string($koneksi, $repass);
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if (!empty(trim($name)) && !empty(trim($username)) && !empty(trim($email)) && !empty(trim($password)) && !empty(trim($repass))) {
            //mengecek apakah password yang diinputkan sama dengan re-password yang diinputkan kembali
            if ($password == $repass) {
                //memanggil method cek_nama untuk mengecek apakah user sudah terdaftar atau belum
                if (cek_nama($name, $koneksi) == 0) {
                    //hashing password sebelum disimpan didatabase
                    $pass  = password_hash($password, PASSWORD_DEFAULT);
                    //insert data ke database
                    $query = "INSERT INTO users (username, email, password ) VALUES ('$username','$email','$pass')";
                    $result   = mysqli_query($koneksi, $query);
                    //jika insert data berhasil maka akan diredirect ke halaman index.php serta menyimpan data username ke session
                    if ($result) {
                        $_SESSION['username'] = $username;

                        header('Location: masterdata.php');

                        //jika gagal maka akan menampilkan pesan error
                    } else {
                        $error =  'Register User Gagal !!';
                    }
                } else {
                    $error =  'Username sudah terdaftar !!';
                }
            } else {
                $validate = 'Password tidak sama !!';
            }
        } else {
            $error =  'Data tidak boleh kosong !!';
        }
    }

    //fungsi untuk mengecek username apakah sudah terdaftar atau belum
    function cek_nama($username, $koneksi)
    {
        $nama = mysqli_real_escape_string($koneksi, $username);
        $query = "SELECT * FROM users WHERE username = '$nama'";
        if ($result = mysqli_query($koneksi, $query)) return mysqli_num_rows($result);
    }
    ?>
    <!-- Gambar side -->
    <section class="gambar-side">
        <img src="images/Registrasi.png" alt="login">
    </section>

    <!-- Form Login -->
    <aside class="form-login">
        <a href="index.html">
            < Beranda</a>
                <h1>Registrasi</h1>
                <p>Jika anda sudah memiliki akun, anda dapat <span><a href="login.php">Masuk disini !</a></span></p>
                <!-- Form -->
                <div class="login_form">
                    <form action="register.php" method="POST" name="registrasi">
                        <div class="input_box">
                            <label for="email">Email</label>
                            <input type="email" placeholder="Masukan alamat email anda" name="email" id="Inputemail" required />
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="input_box">
                            <label for="username">Username</label>
                            <input type="text" placeholder="Masukan username anda" name="username" id="Inputusername" required />
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="input_box">
                            <label for="password">Password</label>
                            <input type="password" placeholder="Masukan Password" name="password" id="Inputpassword" required />
                            <i class="fa-solid fa-lock"></i>
                            <i class="fa-solid fa-eye-slash pw_hide"></i>
                        </div>
                        <div class="input_box">
                            <label for="password">Konfirmasi Password</label>
                            <input type="password" placeholder="Masukan Kembali Password" name="repassword" id="Inputrepassword" required />
                            <i class="fa-solid fa-lock"></i>
                            <i class="fa-solid fa-eye-slash pw_hide"></i>
                        </div>

                        <button class="button" type="submit">Registrasi</button>
                    </form>
                </div>
    </aside>
    <script src="js/script.js"></script>
</body>

</html>