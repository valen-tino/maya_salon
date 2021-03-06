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
                <h4 class="page-title">Tentang Kami</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
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
                        <h4 class="card-title">Bagian Utama</h4>
                    </div>
                    <div class="table-responsive" style=" margin-left:15px; margin-right:15px;">
                        <table class="table table-bordered">
                            <thead class="thead-light">

                                <tr>
                                    
                                    <th scope="col" width=60%>Deskripsi</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'koneksi.php';
                                $nomor = 1;
                                $data = mysqli_query($con, "select * from tentangkamiawal");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>

                                    <tr>
                                        
                                        <td> <?php echo $d['details']; ?></td>
                                        <td><img src="tentangkami/<?php echo $d['gambar'] ?>" width="200" height="300"></td>
                                        <td>
                                            <form action="tentangkamiawaledit.php" method="post">
                                                <input type="hidden" name="edittka_id" value="<?php echo $d['id']; ?>">
                                                <button type="submit" name="edittka_btn" class="btn btn-warning"><i class="mdi mdi-grease-pencil"></i> EDIT</button>
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

        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-sm-12 d-flex align-items- justify-content-end">
                            <a role="button" class="btn btn-primary" href="tentangkamiadd.php "><i class="mdi mdi-plus"></i> Tambah Staf Baru</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Staf</h4>
                </div>
                <div class="table-responsive" style=" margin-left:15px; margin-right:15px;">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $nomor = 1;
                            $data = mysqli_query($con, "select * from tentangkami");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>

                                <tr>
                                    <td> <?php echo $nomor++; ?></td>
                                    <td> <?php echo $d['nama']; ?></td>
                                    <td> <?php echo $d['jabatan']; ?></td>
                                    <td><img src="./tentangkami/<?php echo $d['gambar'] ?>" width="200" height="300"></td>
                                    <td>
                                        <form action="tentangkamiedit.php" method="post"class="d-inline">
                                            <input type="hidden" name="edit_id" value="<?php echo $d['id']; ?>">
                                            <button type="submit" name="edit_btn" class="btn btn-warning" ><i class="mdi mdi-grease-pencil"></i> EDIT</button>
                                        </form> &nbsp
                                        <form action="process/code.php" method="post" class="d-inline">
                                            <input type="hidden" name="delete_tk_id" value="<?php echo $d['id']; ?>">
                                            <button type="submit" name="delete_tk_btn" class="btn btn-danger" style="color:white;" ><i class="mdi mdi-delete-forever"></i> DELETE</button>
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