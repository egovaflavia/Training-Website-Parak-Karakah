<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <h2 class="mb-0">Kaba Saputaran Minang</h2>
                <p>Terupdate Teraktual dan Terdepan</p>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <?php
        $pilih = mysqli_query($koneksi, "SELECT * FROM tbl_berita a LEFT JOIN tbl_kt_berita b ON a.id_kategori=b.id_kategori LEFT JOIN tbl_admin c ON a.id_admin=c.id_admin WHERE a.id_berita='$_GET[id]'");
        $data = mysqli_fetch_array($pilih);
        ?>
        <div class="row justify-content-center">
            <div class="col-md-9 mb-4">
                <p class="mb-5">
                    <img style="width: 900px" src="images/<?php echo $data['foto_berita']; ?>" alt="Gagal Load Gambar" class="img-fluid">
                </p>
                <h3 class="post-heading"> <?php echo $data['judul_berita']; ?> </h3>
                <p style="text-align: justify;"> <?php echo $data['isi_berita']; ?></p>
            </div>
        </div>
    </div>
</div>