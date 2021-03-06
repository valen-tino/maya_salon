<?php include("includes/header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php include("includes/br.php"); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-6 col-sm-12">
            <div class="left pt-5" data-aos="fade-up">
                <h1>
                    Maje<br />
                    Fashion, Salon,<br />
                    dan Spa
                </h1>
                <h3 style="font-size:20px;">Khusus Wanita</h3>
                <br />
                <br />
                <h3>Pesan Sekarang!</h3>
                <br />
                <div class="row btn-firstpart" class="d-inline"> 
                    <a class="tombol" href="#tentangkami" 
                        style="margin-right: 10px; margin-bottom: 10px; margin-left: 10px;"><i
                            class="fas fa-chevron-down"></i>&nbspTentang Kami</a><br />
                    <a class="tombol" href="https://api.whatsapp.com/send?phone=6287761392077"
                        style="background: #88ff94 !important; margin-right: 10px; margin-left: 10px; margin-bottom: 10px;"><i
                            class="fas fa-phone-alt"></i>&nbspCall Us</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6 col-sm-12" data-aos="fade-up">
            <div class="right pl-5">
                <img src="images/illustration.svg" alt="illustration" class="illustration ml-5 mb-4"
                    style="height: 400px;" />
            </div>
        </div>
    </div>
</div>
<div class="wave">
    <img src="images/upperwave.svg" alt="wave" class="wave" style="margin-bottom: -10px;" />
</div>
</section>

<section id="tentangkami">
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
                <img src="admin/tentangkami/<?php echo $d['gambar'] ?>" alt="depan" class="depan"
                    style="height: 500px;" />
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
                    <img src="admin/tentangkami/<?php echo $d['gambar'] ?>" alt="Photo of sunset"
                        style="height: 300px;" />
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


<section id="layanankami">
    <div class="wave">
        <img src="images/lowerwave.svg" alt="wave" class="wave" style="margin-top:-5px; z-index: 1;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col" data-aos="fade-down" data-aos-anchor-placement="top-center">
                <h1 align="center">Layanan Kami</h1>
            </div>
        </div>
        <br>
        <div class="row">
            <?php
            include 'admin/koneksi.php';
            $nomor = 1;
            $data = mysqli_query($con, "select * from layanan LIMIT 6");
            while ($d = mysqli_fetch_array($data)) {
            ?>
            <div class="col-md-4" data-aos="fade-up">
                <div class="kartu text-center">
                    <h5 class="card-header" style="font-family: Reem Kufi,sans-serif; padding-top:20px;">
                        <?php echo $d['judul']; ?></h5>
                    <div class="card-body">
                        <p style="font-size:20px!important">
                            <?php echo $d['details']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <br>
        <div class="row">
            <div class="col" data-aos="zoom-in">
                <p align="center"><a href="layanankami.php" class="tombol">Lain - Lain</a></p>
            </div>
        </div>

    </div>
</section>

<section id="galerikami">
    <div class="container">
        <div class="row">
            <div class="col" data-aos="fade-down" data-aos-anchor-placement="top-center">
                <h1 align="center">Galeri Kami</h1><br>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- <a data-fancybox="gallery" href="images/depan.jpeg"><img src="images/depan.jpeg" class="depan"></a> -->
            <?php
            // Include database configuration file
            require 'admin/koneksi.php';
            
            // Retrieve images from the database
            $query = $con->query("SELECT * FROM galeri WHERE status = 1 ORDER BY id ASC LIMIT 6");
                        
            if($query->num_rows > 0){
                while ($row = $query->fetch_assoc()) {
                    $imageThumbURL = 'admin/galeri/'.$row["gambar"];
                    $imageURL = 'admin/galeri/'.$row["gambar"];
            ?>

            <a href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-aos="fade-up">
                <img src="<?php echo $imageThumbURL; ?>" alt="" class="depan"
                    style="height:425px;width:350px;  padding:10px!important;" />
            </a>
            <?php 
                    }
                } 
            ?>
        </div>
        <br>
        <div class="row">
            <div class="col" data-aos="zoom-in">
                <p align="center"><a href="galeri.php" class="tombol">Lain - Lain</a></p>
            </div>
        </div>

    </div>
</section>

<section id="kontakkami" style="z-index: 1;">
    <div class="container">
        <div class="row">
            <div class="col" align="center">
                <h1>Hubungi Kami</h1><br>
            </div>
        </div>
        <div class="row">
            <div class="col" align="center">
                <h6>Jika ada pertanyaan, Hubungi Kami Segera!</h6><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" data-aos="fade-up">
                <div class="card-kk card-kk-wa">
                    <h5 class="card-title-kk mt-3 mb-3">Whatsapp</h5>
                    <p class="card-text-kk">087761392097</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up">
                <div class="card-kk card-kk-ig">
                    <h5 class="card-title-kk mt-3 mb-3">Instagram</h5>
                    <p class="card-text-kk">@maya_jehaut</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up">
                <div class="card-kk card-kk-email">
                    <h5 class="card-title-kk mt-3 mb-3">Email</h5>
                    <p class="card-text-kk">maya@maya-salon.com</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up">
                <div class="card-kk card-kk-loc">
                    <h5 class="card-title-kk mt-3 mb-3">Alamat</h5>
                    <p class="card-text-kk" style="font-size:18px;">Jl. Merpati No.26A Monang Maning</p>
                </div>
            </div>
        </div>
        <form action="includes/email.php" method="post">
            <div class="row">
                <div class="col-lg-6">
                    <div class="email" data-aos="fade-up">
                        <label for="email_pengunjung">Email address</label>
                        <input type="email" class="form-control form-control-lg" name="email_pengunjung" aria-describedby="email_pengunjung"
                            placeholder="Masukan email anda">
                        <small id="email_pengunjung" class="form-text text-muted">Kita tidak akan membagikan email anda kepada pengguna lain.</small><br>
                    </div>
                    <div class="form-group" data-aos="fade-up">
                        <label for="no_telp">No. Telepon</label>
                        <input type="number" class="form-control form-control-lg" name="no_telp"
                            aria-describedby="no_telp" placeholder="Masukan No.Telepon Anda">
                    </div>
                    <div class="form-group" data-aos="fade-up">
                        <label for="subjek">Judul</label>
                        <input type="text" class="form-control form-control-lg" name="subjek"
                            aria-describedby="subjek" placeholder="Masukkan Judul Pesan Anda">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group" data-aos="fade-up">
                        <label for="pesan">Pesan Anda</label>
                        <textarea id="pesan" name="pesan" class="form-control" placeholder="Masukkan Pesan Anda"
                            style="width: 100%; height: 273px;"></textarea>
                    </div>
                </div>

            </div>
            <br>

            <div class="row">
                <div class="col" data-aos="fade-up">
                    <input type="reset" class="tombol" style="background-color: #FF9393; border:0px;" value="&nbsp Reset Data &nbsp">
                    <input type="submit" class="tombol" style="background-color: #B3FFFF; border:0px;" name="kirimemail" value="&nbsp Kirim &nbsp">
                </div>
            </div>


        </form>
        <br>
        <div class="row" data-aos="fade-up">
            <div class="col map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d986.0886437045558!2d115.1961734291787!3d-8.657787799611182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240aee7025ecb%3A0xd4fbdbe906bf27b9!2sGg.%20Jalak%20Putih%20XIV%20No.18%2C%20Tegal%20Kertha%2C%20Kec.%20Denpasar%20Bar.%2C%20Kota%20Denpasar%2C%20Bali%2080111!5e0!3m2!1sen!2sid!4v1614991347361!5m2!1sen!2sid"
                    width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>


    </div>

</section>



<?php include("includes/footer.php"); ?>