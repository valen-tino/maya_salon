<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="login.css" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="admin/assets/images/favicon.png">
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Open Sans:400,500,600,700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans:400,500,600,700&display=swap" media="print" onload="this.media='all'">
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
            <div class="form">
                <form class="login-form" method="post" action="cek_login.php">
                    <h2>
                    <img src="images/mayalogosmall.svg" alt="logomayasalon" class="logopanjangsalon"></h2>
                    <h2>Login</h2><br>
                    <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                            echo "<div class='alert alert-danger' role='alert' style='border-radius:25px;'>
                        Login gagal! username dan password salah!
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

</html>