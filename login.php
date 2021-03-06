<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="css/login.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="admin/assets/images/favicon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>



<body data-rsssl=1>
    <div class="container">
        <br><br>

        <br />
        <!-- cek pesan notifikasi -->

        <br />
        <div class="login-page">
            <div class="form" data-aos="fade-down">
                <form class="login-form" method="post" action="cek_login.php">
                    <h2>
                    <img src="images/mayalogosmall.svg" alt="logomayasalon" class="logopanjangsalon"></h2>
                    <h2>Login</h2>
                    <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                            echo "<div class='alert alert-danger' role='alert' style='border-radius:25px;'>
                        Login gagal! username atau password salah!
                        </div>";
                        } else if ($_GET['pesan'] == "logout") {
                            echo "<div class='alert alert-success' role='alert' style='border-radius:25px;'>
                        Anda telah berhasil logout
                        </div>";
                        } else if ($_GET['pesan'] == "belum_login") {
                            echo "<div class='alert alert-warning' role='alert' style='border-radius:25px;'>
                        Anda harus login untuk mengakses halaman admin
                        </div>";
                        }
                    }
                    ?>
                    <input type="text" name="username" placeholder="username" />
                    <input type="password" name="password" placeholder="password" />
                    <button>login</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</html>