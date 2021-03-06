<?php include("includes/header.php"); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <?php include("includes/br.php"); ?>
    </div>
  </div>
  <div class="row">
    <div class="col" align="center" data-aos="fade-down">
      <h1 style="margin-bottom:30px;">Layanan Kami</h1>
      <a class="tombol" href="#layanankami" style="margin-right:10px; margin-bottom:10px; margin-left:10px;"><i class="fas fa-chevron-down"></i>&nbspLanjut</a><br>
      <?php include("includes/br.php"); ?>
    </div>
  </div>
</div>


<div class="wave">
  <img src="images/upperwave.svg" alt="wave" class="wave" style="margin-bottom: -10px;">
</div>
</section>

<section id="layanankami" style="z-index: 1; background-color: #FFE5EC !important;">

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
      $data = mysqli_query($con, "select * from layanan");
      while ($d = mysqli_fetch_array($data)) {
      ?>
        <div class="col-md-4" data-aos="fade-up">
          <div class="kartu text-center">
            <h5 class="card-header" style="font-family: Reem Kufi,sans-serif; padding-top:20px;"><?php echo $d['judul']; ?></h5>
            <div class="card-body">
              <p style="font-size:20px!important" class="align-middle">
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

    <br>
    <?php include("includes/br.php"); ?>
  </div>
</section>
<?php include("includes/footer.php"); ?>