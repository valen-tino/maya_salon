<?php
include 'koneksi.php';
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
                <h5 class="page-title">Edit Layanan</h5>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Layanan</li>
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


        <?php
        if (isset($_POST['editly_btn'])) {
            $id = $_POST['editly_id'];

            $query = "SELECT * FROM layanan WHERE id='$id' ";
            $query_run = mysqli_query($con, $query);

            foreach ($query_run as $d) { ?>
                <div class="row">
                    <div class="col-md">
                        <div class="card card-body">
                            <h4 class="card-title">Edit Kartu Layanan</h4>
                            <form class="form-horizontal mt-4" action="process/code.php" method="post">
                                <div class="form-group">
                                    <input type="hidden" name="id_editlayanan" value="<?php echo $d['id'] ?>">
                                    <label for="nama_edit_ly" class="col-form-label">Judul Layanan</label>
                                    <input type="text" name="nama_edit_ly" class="form-control" value="<?php echo $d['judul'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="jabatan_edit_ly" class="col-form-label">Deskripsi</label>
                                        <p>Ketik <code>&lt;br&gt;</code> di tiap ahkir baris untuk buat baris baru</p>
                                        <textarea type="text" name="jabatan_edit_ly" id="jabatan_edit_ly" class="form-control" rows="10"><?php echo $d['details'] ?></textarea>
                                </div>
                                <div class="modal-footer">
                                    <input type="reset" class="btn btn-secondary" value="Reset" href="layanankami.php" data-dismiss="modal">
                                    <input type="submit" value="Edit Data" name="edit_datalayanan" class="btn btn-primary">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
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