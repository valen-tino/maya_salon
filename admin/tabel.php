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
                <h4 class="page-title">Tabel Data</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Tabel</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">

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
                <div class="card">
                    <div class="card-body">
                        <div class="col-sm-12 d-flex align-items- justify-content-end">
                            <a role="button" class="btn btn-primary" href="tambah.php "> + Tambah Data Baru</a>&nbsp;&nbsp;<a role="button" class="btn btn-dark" href="cetak.php" target="_blank">Print</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Rekapan</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">S. P.</th>
                                <th scope="col">Colli</th>
                                <th scope="col">Berat</th>
                                <th scope="col">Code</th>
                                <th scope="col">Franco</th>
                                <th scope="col">Confrankert</th>
                                <th scope="col">Penerima Barang</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $nomor = 1;
                            $data = mysqli_query($con, "select * from pakaian");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>

                                <tr>
                                    <td> <?php echo $nomor++; ?></td>
                                    <td> <?php echo $d['sp']; ?></td>
                                    <td> <?php echo $d['colli']; ?></td>
                                    <td> <?php echo $d['berat']; ?> Kg</td>
                                    <td> <?php echo $d['code']; ?></td>
                                    <td> <?php echo $d['franco']; ?></td>
                                    <td> Rp <?php echo $d['confrankert']; ?></td>
                                    <td> <?php echo $d['penerima_barang']; ?></td>
                                    <td> <?php echo $d['keterangan']; ?></td>
                                    <td>
                                        <a role="button" class="btn btn-warning edit" href="edit.php?id=<?php echo $d['id']; ?>">Edit</a> |
                                        <a role="button" class="btn btn-danger hapus" href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
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