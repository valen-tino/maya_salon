<?php

include '../koneksi.php';


// Users
if (isset($_POST['tambahdatauser'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $md5 = md5($password);

    // menginput data ke database
    $sql = "INSERT INTO user VALUES('', '$username','$md5')";
    $hasil = mysqli_query($con, $sql);

    if ($hasil) {
        echo '<script>alert("Berhasil menambah data."); document.location="../user.php";</script>';
    } else {
        echo '<script>alert("Gagal menambah data."); document.location="../user.php";</script>';
    }
}

if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE FROM user WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        echo '<script>alert("Berhasil menghapus data."); document.location="../user.php";</script>';
    } else {
        echo '<script>alert("Gagal menghapus data."); document.location="../user.php";</script>';
    }
}

if (isset($_POST['updatebtn'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $md5 = md5($password);

    $query = "UPDATE user SET username='$username', password='$md5' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        echo '<script>alert("Berhasil mengupdate data."); document.location="../user.php";</script>';
    } else {
        echo '<script>alert("Gagal menghapus data."); document.location="../user.php";</script>';
    }
}

// End Users

/* Tentang Kami */

if (isset($_POST['tambahdatatk'])) {
    $nama = $_POST['nama_tk'];
    $jabatan = $_POST['jabatan_tk'];

    $rand = rand();
    $ekstensi =  array('png', 'jpg', 'jpeg');
    $filename = $_FILES['upload_gambar_tk']['name'];
    $ukuran = $_FILES['upload_gambar_tk']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $ekstensi)) {
        header("location:tentangkami.php?alert=gagal_ekstensi");
    } else {
        if ($ukuran < 1044070) {
            $xx = $rand . '_' . $filename;
            move_uploaded_file($_FILES['upload_gambar_tk']['tmp_name'], '../tentangkami/' . $rand . '_' . $filename);
            mysqli_query($con, "INSERT INTO tentangkami VALUES('','$nama','$jabatan','$xx')");
            echo '<script>alert("Berhasil menambah data kartu."); document.location="../tentangkami.php";</script>';
        } else {
            echo '<script>alert("Ukuran Gambar Terlalu Besar"); document.location="../tentangkami.php";</script>';;
        }
    }
}

if (isset($_POST['tk_updatebtn'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama_edit_tk'];
    $jabatan = $_POST['jabatan_edit_tk'];

    if ($_FILES['upload_gambar_edit_tk']['error'] == 0) {
        $rand = rand();
        $ekstensi =  array('png', 'jpg', 'jpeg');
        $filename = $_FILES['upload_gambar_edit_tk']['name'];
        $ukuran = $_FILES['upload_gambar_edit_tk']['size'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if (!in_array($ext, $ekstensi)) {
            header("location:../tentangkami.php?alert=gagal_ekstensi");
        } else {
            if ($ukuran < 1044070) {
                $xx = $rand . '_' . $filename;
                move_uploaded_file($_FILES['upload_gambar_edit_tk']['tmp_name'], '../tentangkami/' . $rand . '_' . $filename);
                $sql = "UPDATE tentangkami SET nama='" . $nama . "',jabatan='" . $jabatan . "',gambar='" . $xx . "' WHERE id=" . $id;
                mysqli_query($con, $sql);
                echo '<script>alert("Berhasil mengedit data kartu."); document.location="../tentangkami.php";</script>';
            } else {
                echo '<script>alert("Ukuran Gambar Terlalu Besar"); document.location="../tentangkami.php";</script>';;
            }
        }
    } else {

        $sql = "UPDATE tentangkami SET nama='" . $nama . "',jabatan='" . $jabatan . "' WHERE id=" . $id;
        mysqli_query($con, $sql);

        echo '<script>alert("Berhasil mengedit data kartu."); document.location="../tentangkami.php";</script>';
    }
}

if (isset($_POST['edit_tkae'])) {

    $id_tkae = $_POST['id_tkae'];
    $desc = $_POST['desc_tkae'];

    if ($_FILES['gambar_tkae']['error'] == 0) {
        $rand = rand();
        $ekstensi =  array('png', 'jpg', 'jpeg');
        $filename = $_FILES['gambar_tkae']['name'];
        $ukuran = $_FILES['gambar_tkae']['size'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if (!in_array($ext, $ekstensi)) {
            header("location:../tentangkami.php?alert=gagal_ekstensi");
        } else {
            if ($ukuran < 1044070) {
                $xx = $rand . '_' . $filename;
                move_uploaded_file($_FILES['gambar_tkae']['tmp_name'], '../tentangkami/' . $rand . '_' . $filename);
                $sql = "UPDATE tentangkamiawal SET details= '".$desc."',gambar='" . $xx . "' WHERE id=" . $id_tkae;
                mysqli_query($con, $sql);
                echo '<script>alert("Berhasil mengedit data kartu."); document.location="../tentangkami.php";</script>';
            } else {
                echo '<script>alert("Ukuran Gambar Terlalu Besar"); document.location="../tentangkami.php";</script>';;
            }
        }
    } else {

        $sql = "UPDATE tentangkamiawal SET details= '".$desc."' WHERE id=" . $id_tkae;
        mysqli_query($con, $sql);

        echo '<script>alert("Berhasil mengedit data kartu."); document.location="../tentangkami.php";</script>';
    }
}

if (isset($_POST['delete_tk_btn'])) {

    $id = $_POST['delete_tk_id'];

    $sql = "SELECT * FROM tentangkami WHERE id='$id'";
    $qr = mysqli_query($con, $sql);

    $data = mysqli_fetch_assoc($qr);
    unlink("../tentangkami/" . $data['gambar']);

    $query = "DELETE FROM tentangkami WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        echo '<script>alert("Berhasil menghapus data."); document.location="../tentangkami.php";</script>';
    } else {
        echo '<script>alert("Gagal menghapus data."); document.location="../tentangkami.php";</script>';
    }
}
/* End Tentang Kami */

/* Layanan Kami*/
if (isset($_POST['tambahdataly'])) {
    $nama = $_POST['judul_ly'];
    $desc = $_POST['desc_ly'];

    // menginput data ke database
    $sql = "INSERT INTO layanan VALUES('', '$nama','$desc')";
    $hasil = mysqli_query($con, $sql);

    if ($hasil) {
        echo '<script>alert("Berhasil menambah data."); document.location="../layanankami.php";</script>';
    } else {
        echo '<script>alert("Gagal menambah data."); document.location="../layanankami.php";</script>';
    }
}

if (isset($_POST['edit_datalayanan'])) {
    $id = $_POST['id_editlayanan'];
    $judul = $_POST['nama_edit_ly'];
    $desc = $_POST['jabatan_edit_ly'];

    $query = "UPDATE layanan SET judul='$judul', details='$desc' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        echo '<script>alert("Berhasil mengupdate data."); document.location="../layanankami.php";</script>';
    } else {
        echo '<script>alert("Gagal menghapus data."); document.location="../layanankami.php";</script>';
    }
}

if (isset($_POST['deletely_btn'])) {
    $id = $_POST['deletely_id'];

    $query = "DELETE FROM layanan WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        echo '<script>alert("Berhasil menghapus data."); document.location="../layanankami.php";</script>';
    } else {
        echo '<script>alert("Gagal menghapus data."); document.location="../layanankami.php";</script>';
    }
}

if (isset($_POST['editdataly'])) {

    $id_tk = $_POST['id_tkae'];
    $desc = $_POST['desc_tkae'];

    if ($_FILES['upload_gambar_edit_tk']['error'] == 0) {
        $rand = rand();
        $ekstensi =  array('png', 'jpg', 'jpeg');
        $filename = $_FILES['gambar_tkae']['name'];
        $ukuran = $_FILES['gambar_tkae']['size'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if (!in_array($ext, $ekstensi)) {
            header("location:../tentangkami.php?alert=gagal_ekstensi");
        } else {
            if ($ukuran < 1044070) {
                $xx = $rand . '_' . $filename;
                move_uploaded_file($_FILES['gambar_tkae']['tmp_name'], '../tentangkami/' . $rand . '_' . $filename);
                $sql = "UPDATE tentangkamiawal SET details ='" . $desc . "',gambar='" . $xx . "' WHERE id=" . $id_tk;
                mysqli_query($con, $sql);
                echo '<script>alert("Berhasil mengedit data kartu."); document.location="../tentangkami.php";</script>';
            } else {
                echo '<script>alert("Ukuran Gambar Terlalu Besar"); document.location="../tentangkami.php";</script>';;
            }
        }
    } else {

        $sql = "UPDATE tentangkami SET details ='" . $desc . "' WHERE id=" . $id_tk;
        mysqli_query($con, $sql);

        echo '<script>alert("Berhasil mengedit data kartu."); document.location="../tentangkami.php";</script>';
    }
}

/* Galeri */

if (isset($_POST['tambahdatagaleri'])) {
    $rand = rand();
    $ekstensi =  array('png', 'jpg', 'jpeg');
    $filename = $_FILES['upload_gambar_galeri']['name'];
    $ukuran = $_FILES['upload_gambar_galeri']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $ekstensi)) {
        header("location:galeri.php?alert=gagal_ekstensi");
    } else {
        if ($ukuran < 1044070) {
            $g = $rand . '_' . $filename;
            move_uploaded_file($_FILES['upload_gambar_galeri']['tmp_name'], '../galeri/' . $rand . '_' . $filename);
            mysqli_query($con, "INSERT INTO galeri VALUES('','$g','1')");
            echo '<script>alert("Berhasil menambah gambar"); document.location="../galeri.php";</script>';
        } else {
            echo '<script>alert("Ukuran Gambar Terlalu Besar"); document.location="../galeri.php";</script>';;
        }
    }
}

if (isset($_POST['deletegl_btn'])) {
    $id = $_POST['deletegl_id'];

    $sql = "SELECT * FROM galeri WHERE id='$id'";
    $qr = mysqli_query($con, $sql);

    $data = mysqli_fetch_assoc($qr);
    unlink("../galeri/" . $data['gambar']);

    $query = "DELETE FROM galeri WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        echo '<script>alert("Berhasil menghapus data."); document.location="../galeri.php";</script>';
    } else {
        echo '<script>alert("Gagal menghapus data."); document.location="../galeri.php";</script>';
    }
}

/* Hubungi Kami */
if (isset($_POST['deletehb_btn'])) {
    $id = $_POST['deletehb_id'];

    $query = "DELETE FROM email WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        echo '<script>alert("Berhasil menghapus data."); document.location="../hubungikami.php";</script>';
    } else {
        echo '<script>alert("Gagal menghapus data."); document.location="../hubungikami.php";</script>';
    }
}


