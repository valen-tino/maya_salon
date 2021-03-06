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
                <h4 class="page-title">Galeri</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Galeri</li>
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
                    <h4 class="card-title">Tambah Foto</h4>
                        <form class="form-horizontal mt-4" action="process/code.php" method="post" enctype="multipart/form-data">
                            <div class="col">
                                <input type="file" name="upload_gambar_galeri" id="upload_gambar_galeri" class="form-control" required>
                            </div>
                            <br>
                            <div class="col">
                                <input type="submit" value="Tambah Gambar" name="tambahdatagaleri" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Galeri Foto</h4>
                </div>
                <div class="table-responsive" style=" margin-left:15px; margin-right:15px;">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" width="10%">Id</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $nomor = 1;
                            $data = mysqli_query($con, "select * from galeri");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>

                                <tr>
                                    <td> <?php echo $nomor++; ?></td>
                                    <td><img src="galeri/<?php echo $d['gambar'] ?>" width="200" height="200"></td>
                                    <td>
                                        <form action="galeriedit.php" method="post">
                                            <input type="hidden" name="edit_galeri_id" value="<?php echo $d['id']; ?>">
                                            
                                        </form>
                                        <form action="process/code.php" method="post">
                                            <input type="hidden" name="deletegl_id" value="<?php echo $d['id']; ?>">
                                            <button type="submit" name="deletegl_btn" class="btn btn-danger" style="color:white;"><i class="mdi mdi-delete-forever"></i> DELETE</button>
                                        </form>
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