<?php include("includes/header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php include("includes/br.php"); ?>
        </div>
    </div>
    <div class="row">
        <div class="col" align="center" data-aos="fade-down" data-aos-anchor-placement="top-center">
            <h1 style="margin-bottom:30px;">Tentang Kami</h1>
            <a class="tombol" href="#tentangkami" style="margin-right:10px; margin-bottom:10px; margin-left:10px;"><i class="fas fa-arrow-down"></i>&nbspLanjut</a><br>
            <?php include("includes/br.php"); ?>
        </div>
    </div>
</div>


<div class="wave">
    <img src="images/upperwave.svg" alt="wave" class="wave" style="margin-bottom: -10px;">
</div>
</section>

<section id="tentangkami" style="z-index:-1;">
    <div class="container">
        <div class="row">
            <div class="col" data-aos="fade-down" data-aos-anchor-placement="top-center">
                <h1 align="center">Tentang Kami</h1>
            </div>
        </div>
        <br />
        <div class="row">
            <?php
            include 'admin/koneksi.php';
            $nomor = 1;
            $data = mysqli_query($con, "select * from tentangkamiawal");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <div class="col-sm" data-aos="fade-right">
                    <p>
                        <?php echo $d['details']; ?>
                    </p>
                </div>
                <div class="col-sm" align="center" data-aos="fade-up">
                    <img src="admin/tentangkami/<?php echo $d['gambar'] ?>" alt="depan" class="depan" style="height: 500px;"/>
                </div>
            <?php
            }
            ?>
        </div>
        <br />
        <br />
        <br />
        <div class="row">
            <div class="col" data-aos="fade-down">
                <h1 align="center">Staf</h1>
                <br />
            </div>
        </div>
        <div class="row">
            <?php
            include 'admin/koneksi.php';
            $nomor = 1;
            $data = mysqli_query($con, "select * from tentangkami");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <div class="col-md-4 col-sm-6" data-aos="fade-up">
                    <div class="card card-block">
                        <img src="admin/tentangkami/<?php echo $d['gambar'] ?>" alt="Photo of sunset" style="height: 300px;" />
                        <h5 class="card-title mt-3 mb-3"><?php echo $d['nama']; ?></h5>
                        <p class="card-text"><?php echo $d['jabatan']; ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <br>
    </div>
</section>

<?php include("includes/footer.php"); ?>