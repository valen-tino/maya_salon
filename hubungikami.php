<?php include("includes/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php include("includes/br.php"); ?>
        </div>
    </div>
    <div class="row">
        <div class="col" align="center" data-aos="fade-down" data-aos-anchor-placement="top-center">
            <h1 style="margin-bottom:30px;">Hubungi Kami</h1>
            <a class="tombol" href="#kontakkami" style="margin-right:10px; margin-bottom:10px; margin-left:10px;"><i
                    class="fas fa-chevron-down"></i>&nbspLanjut</a><br>
            <?php include("includes/br.php"); ?>
        </div>
    </div>
</div>


<div class="wave">
    <img src="images/upperwave.svg" alt="wave" class="wave" style="margin-bottom: -10px;">
</div>
</section>

<section id="kontakkami" style="z-index: 1; background-color: #FFE5EC !important;">
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