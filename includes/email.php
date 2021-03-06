<?php
include '../admin/koneksi.php';

if (isset($_POST['kirimemail'])) {

    define('TIMEZONE', 'Asia/Singapore');
    date_default_timezone_set(TIMEZONE);

    $email = $_POST['email_pengunjung'];
    $no_telp = $_POST['no_telp'];
    $subjek = $_POST['subjek'];
    $pesan = $_POST['pesan'];
    $date = date('Y-m-d');
    $time = date('H:i:s');

    // menginput data ke database
    $sql = "INSERT INTO email VALUES('', '$email','$no_telp','$subjek','$pesan','$date','$time')";
    $hasil = mysqli_query($con, $sql);



    if ($hasil) {
        echo '<script>alert("Sukses mengirim data"); document.location="../index.php";</script>';
    } else {
        echo '<script>alert("Gagal mengirim data."); document.location="../index.php";</script>';
    }
}


?>