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
                <h4 class="page-title">Hubungi Kami</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Hubungi Kami</li>
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
            
        </div>
        <div class=" col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Masukkan dari Form Email</h4>
                </div>
                <div class="table-responsive" style=" margin-left:15px; margin-right:15px;">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" width="3%">Id</th>
                                <th scope="col" width="10%">Email</th>
                                <th scope="col" width="10%">No Telp</th>
                                <th scope="col" width="10%">Subjek</th>
                                <th scope="col" width="40%">Pesan</th>
                                <th scope="col" width="10%">Tanggal diupload</th>
                                <th scope="col" width="10%">Waktu diupload</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $nomor = 1;
                            $data = mysqli_query($con, "select * from email order by id Desc");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>

                                <tr>
                                    <td> <?php echo $nomor++; ?></td>
                                    <td> <?php echo $d['email']; ?></td>
                                    <td> <?php echo $d['no_telp']; ?></td>
                                    <td> <?php echo $d['subjek']; ?></td>
                                    <td> <?php echo $d['pesan']; ?></td>
                                    <td> <?php echo $d['tanggal_diupload']; ?></td>
                                    <td> <?php echo $d['waktu_diupload']; ?></td>
                                    <td>
                                        
                                        <form action="process/code.php" method="post" class="d-inline">
                                            <input type="hidden" name="deletehb_id" value="<?php echo $d['id']; ?>">
                                            <button type="submit" name="deletehb_btn" class="btn btn-danger" style="color:white;"><i class="mdi mdi-delete-forever"></i> DELETE</button>
                                        </form> &nbsp
                                        <form action="process/print.php" method="post" class="d-inline">
                                            <input type="hidden" name="printhb_id" value="<?php echo $d['id']; ?>">
                                            <button type="submit" name="printhb_btn" class="btn btn-secondary" style="color:white;"><i class="mdi mdi-printer"></i> Print</button>
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