<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/RumahGadang.jpg')">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-7">
        <h2 class="mb-0">Struktur Organisasi</h2>
        <p>Kelurahan Parak Karakah</p>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row mb-5 justify-content-center text-center">
      <div class="col-lg-4 mb-5">
        <h2 class="section-title-underline mb-5">
          <span>Parak Karakah</span>
        </h2>
      </div>
    </div>
    <div class="row">
      <?php
      $pilih = mysqli_query($koneksi, "SELECT * FROM `tbl_organisasi` WHERE 1");
      $no = 1;
      while ($data = mysqli_fetch_array($pilih)) {
        ?>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
          <div class="feature-1 border person text-center">
            <img src="images/<?php echo $data['foto_org']; ?>" alt="Galal Load Gambar" class="img-fluid">
            <div class="feature-1-content">
              <h2><?php echo $data['nama_org']; ?></h2>
              <span class="position mb-3 d-block"><?php echo $data['jabatan_org']; ?></span>
              <p><?php echo $data['ket_org']; ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>