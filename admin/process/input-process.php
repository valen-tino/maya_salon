<?php
include '../koneksi.php';

$sp = $_POST['sp'];
$colli = $_POST['colli'];
$berat = $_POST['berat'];
$code = $_POST['code'];
$franco = $_POST['franco'];
$cf = $_POST['confrankert'];
$pb = $_POST['penerima_barang'];
$ket = $_POST['keterangan'];

// menginput data ke database
$sql = "INSERT INTO pakaian VALUES('', '$sp','$colli','$berat','$code','$franco','$cf','$pb','$ket')";
$hasil = mysqli_query($con, $sql);

if ($hasil) {
    echo '<script>alert("Berhasil menambah data."); document.location="../tabel.php";</script>';
} else {
    echo '<script>alert("Gagal menghapus data."); document.location="../tabel.php";</script>';
}
