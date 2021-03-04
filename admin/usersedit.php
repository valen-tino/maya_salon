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
                <h5 class="page-title">Edit User</h5>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit User</li>
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
                    if (isset($_POST['edit_btn'])) {
                        $id = $_POST['edit_id'];

                        $query = "SELECT * FROM user WHERE id='$id' ";
                        $query_run = mysqli_query($con, $query);

                        foreach ($query_run as $d) { ?>
                            <form class="form-horizontal mt-4" action="process/code.php" method="post">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                                    <label for="username" class="col-form-label">Username</label>
                                    <input type="text" name="username" class="form-control" value="<?php echo $d['username'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Password</label>
                                    <input type="password" name="password" class="form-control" value="<?php echo $d['password'] ?>">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" value="Edit Data" name="updatebtn" class="btn btn-primary">
                                </div>
                            </form>
                    <?php
                        }
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