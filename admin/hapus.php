<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:../login.php?pesan=belum_login");
}
?>
<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
$del = mysqli_query($con, "DELETE FROM pakaian WHERE id='$id'");

if ($del) {
    echo '<script>alert("Berhasil menghapus data."); document.location="tabel.php";</script>';
} else {
    echo '<script>alert("Gagal menghapus data."); document.location="tabel.php";</script>';
}
