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
                <h4 class="page-title">Layanan Kami</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Layanan Kami</li>
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
                            <a role="button" class="btn btn-primary" href="layananadd.php "> + Tambah Data Baru</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Layanan-layanan</h4>
                </div>
                
                <div class="table-responsive" style=" margin-left:15px; margin-right:15px;">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" width="3%">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Details</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';

                            if(isset($_GET['page'])){
                                $page = $_GET['page'];
                            }
                            else{
                                $page = 1;
                            }
                            $num_per_page = 04;
                            $start_from = ($page-1)*04;


                            $nomor = 1;
                            $data = mysqli_query($con, "select * from layanan limit $start_from, $num_per_page");
                            

                            while ($d = mysqli_fetch_array($data)) {
                            ?>

                                <tr>
                                    <td> <?php echo $nomor++; ?></td>
                                    <td> <?php echo $d['judul']; ?></td>
                                    <td> <?php echo $d['details']; ?></td>
                                    <td>
                                        <form action="layananedit.php" method="post" class="d-inline">
                                            <input type="hidden" name="editly_id" value="<?php echo $d['id']; ?>">
                                            <button type="submit" name="editly_btn" class="btn btn-warning" > <i class="mdi mdi-grease-pencil"></i> EDIT</button>
                                        </form>&nbsp
                                        <form action="process/code.php" method="post" class="d-inline">
                                            <input type="hidden" name="deletely_id" value="<?php echo $d['id']; ?>">
                                            <button type="submit" name="deletely_btn" class="btn btn-danger" style="color:white;"><i class="mdi mdi-delete-forever"></i> DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                            <div style='margin-bottom:10px;'>
                                <a class="breadcrumb-item active" aria-current="page" style="margin-left:5px;">Halaman</a><br>
                                <?php
                                
                                $pr_query = "select * from layanan";
                                $pr_result=mysqli_query($con,$pr_query);
                                $totalrecord=mysqli_num_rows($pr_result);
                                // echo $totalrecord;
                                $totalpages = ceil($totalrecord/$num_per_page);
                                // echo $totalpages;

                                for($i=1; $i<=$totalpages;$i++){
                                    echo "<a href='layanankami.php?page=".$i."' class='btn btn-primary' style='margin-left:5px;'>$i</a>"; 
                                
                                }

                                ?>
                            </div>
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