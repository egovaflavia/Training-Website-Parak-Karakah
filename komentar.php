<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-4">
                <h2 class="section-title-underline">
                    <span>Layanan Pengaduan</span>
                </h2>
            </div>
        </div>

        <div class="owl-slide owl-carousel">
            <?php
            $pilih = mysqli_query($koneksi, "SELECT * FROM tbl_komentar WHERE 1");
            $no = 1;
            while ($data = mysqli_fetch_array($pilih)) {
                ?>
                <div class="ftco-testimonial-1">
                    <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                        <img src="images/<?php echo $data['foto_komentar']; ?>" alt="Image" class="img-fluid mr-3">
                        <div>
                            <h3><?php echo $data['nama_komentar']; ?></h3>
                            <span><?php echo $data['email']; ?></span>
                        </div>
                    </div>
                    <div>
                        <p>&ldquo;<?php echo $data['komentar']; ?>&rdquo;</p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>