<?php include("includes/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php include("includes/br.php"); ?>
        </div>
    </div>
    <div class="row">
        <div class="col" align="center" data-aos="fade-down">
            <h1 style="margin-bottom:30px;">Galeri Kami</h1>
            <a class="tombol" href="#galerikami" style="margin-right:10px; margin-bottom:10px; margin-left:10px;"><i
                    class="fas fa-chevron-down"></i>&nbspLanjut</a><br>
            <?php include("includes/br.php"); ?>
        </div>
    </div>
</div>


<div class="wave">
    <img src="images/upperwave.svg" alt="wave" class="wave" style="margin-bottom: -10px;">
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
            <?php
            require 'admin/koneksi.php';
            
            $query = $con->query("SELECT * FROM galeri WHERE status = 1 ORDER BY id ASC");
                        
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
        <br>

    </div>
</section>
<?php include("includes/footer.php"); ?>