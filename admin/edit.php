<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:../login.php?pesan=belum_login");
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
                <h5 class="page-title">Edit</h5>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                    <h4 class="card-title">Edit Data</h4>
                    <?php
                    include 'koneksi.php';
                    $id = $_GET['id'];
                    $data = mysqli_query($con, "select * from pakaian where id='$id'");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <form class="form-horizontal mt-4" action="process/edit-process.php" method="post">
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                                <label for="sp" class="col-form-label">S. P.</label>
                                <input type="number" name="sp" class="form-control" value="<?php echo $d['sp'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="colli" class="col-form-label">Colli</label>
                                <input type="number" name="colli" class="form-control" value="<?php echo $d['colli'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="berat" class="col-form-label">Berat</label>
                                <input type="number" name="berat" class="form-control" value="<?php echo $d['berat'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="code" class="col-form-label">Code</label>
                                <input type="number" name="code" class="form-control" value="<?php echo $d['code'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="franco" class="col-form-label">Franco</label>
                                <select name="franco" class="form-select shadow-none col-12" id="franco">
                                    <option selected disabled><?php echo $d['franco'] ?></option>
                                    <option value="Lunas">Lunas</option>
                                    <option value="Belum Lunas">Belum Lunas</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="confrankert" class="col-form-label">Confrankert</label>
                                Rp <input type="number" name="confrankert" class="form-control" value="<?php echo $d['confrankert'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="penerima_barang" class="col-form-label">Penerima Barang</label>
                                <input type="text" name="penerima_barang" class="form-control" value="<?php echo $d['penerima_barang'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="keterangan" class="col-form-label">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" value="<?php echo $d['keterangan'] ?>">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" value="Update" class="btn btn-primary">
                            </div>
                        </form>
                    <?php
                    }
                    ?>
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