<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form

$id = $_POST['id'];
$sp = $_POST['sp'];
$colli = $_POST['colli'];
$berat = $_POST['berat'];
$code = $_POST['code'];
$franco = $_POST['franco'];
$confrankert = $_POST['confrankert'];
$penerima_barang = $_POST['penerima_barang'];
$keterangan = $_POST['keterangan'];

// update data ke database
$hasil = mysqli_query($con, "UPDATE pakaian SET 
                                sp='$sp', 
                                colli='$colli', 
                                berat='$berat', 
                                code='$code',
                                franco='$franco', 
                                confrankert='$confrankert', 
                                penerima_barang='$penerima_barang', 
                                keterangan='$keterangan' 
                                WHERE id='$id'");

if ($hasil) {
    echo '<script>alert("Berhasil mengubah data."); document.location="../tabel.php";</script>';
} else {
    echo '<script>alert("Gagal mengubah data."); document.location="../tabel.php";</script>';
}
