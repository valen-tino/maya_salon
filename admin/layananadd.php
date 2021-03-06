<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:../index.php?pesan=belum_login");
}
?>
<?php include "include/header.php"; ?>
<?php include "include/navbar.php"; ?>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h5 class="page-title">Tambah Info Kartu Layanan</h5>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Layanan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <h4 class="card-title">Masukkan Data Layanan</h4>
                    <form class="form-horizontal mt-4" action="process/code.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="username" class="col-form-label">Judul Layanan</label>
                            <input type="text" name="judul_ly" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-form-label">Deskripsi</label>
                            <p>Ketik <code>&lt;br&gt;</code> di tiap ahkir kalimat untuk buat baris baru</p>
                            <textarea type="text" name="desc_ly" class="form-control" rows="10"></textarea>
                        </div>

                        <div class="modal-footer">
                            <input type="reset" class="btn btn-secondary" value="Reset" href="layanankami.php" data-dismiss="modal">
                            <input type="submit" value="Tambah Data" name="tambahdataly" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <?php include "include/footer.php"; ?>