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
                <h4 class="page-title">Users</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Users</li>
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
                            <a role="button" class="btn btn-primary" href="usersadd.php"> + Tambah Data Baru</a>
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
                                <th scope="col">id</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $nomor = 1;
                            $data = mysqli_query($con, "select * from user");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>

                                <tr>
                                    <td> <?php echo $nomor++; ?></td>
                                    <td> <?php echo $d['username']; ?></td>
                                    <td> <?php echo $d['password']; ?></td>
                                    <td>
                                        <form action="usersedit.php" method="post">
                                            <input type="hidden" name="edit_id" value="<?php echo $d['id']; ?>">
                                            <button type="submit" name="edit_btn" class="btn btn-warning"> EDIT</button>
                                        </form>
                                        <form action="process/code.php" method="post">
                                            <input type="hidden" name="delete_id" value="<?php echo $d['id']; ?>">
                                            <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
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