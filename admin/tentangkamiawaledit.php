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
                <h5 class="page-title">Edit Info</h5>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Info</li>
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
        if (isset($_POST['edittka_btn'])) {
            $id = $_POST['edittka_id'];

            $query = "select * from tentangkamiawal WHERE id='$id' ";
            $query_run = mysqli_query($con, $query);

            foreach ($query_run as $d) { ?>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <h4 class="card-title">Foto Data</h4>
                            <center>
                                <img src="tentangkami/<?php echo $d['gambar'] ?>" width="200" height="329">
                            </center>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card card-body">
                            <h4 class="card-title">Edit Info Bagian Utama</h4>
                            <form class="form-horizontal mt-4" action="process/code.php" method="post"  enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" name="id_tkae" value="<?php echo $d['id'] ?>">
                                    <label for="desc_tkae" class="col-form-label">Deskripsi</label>
                                    <p>Ketik <code>&lt;br&gt;</code> di tiap ahkir barus untuk buat baris baru</p>
                                    <textarea type="text" name="desc_tkae" class="form-control" rows="10"><?php echo $d['details'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="gambar" class="col-form-label">Gambar</label>
                                    <input type="file" name="gambar_tkae" id="gambar_tkae" class="form-control">
                                </div>
                                <div class="modal-footer">
                                    <input type="reset" class="btn btn-secondary" value="Reset" href="layanankami.php" data-dismiss="modal">
                                    <input type="submit" value="Tambah Data" name="edit_tkae" class="btn btn-primary">
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