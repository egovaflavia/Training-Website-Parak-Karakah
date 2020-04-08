<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <h2 class="mb-0">Detail Prestasi</h2>
                <p>Kelurahan Parak Karakah</p>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <?php
        $id = $_GET['id'];
        $pilih = mysqli_query($koneksi, "SELECT * FROM `tbl_prestasi` WHERE id_prestasi=$id");
        $data = mysqli_fetch_array($pilih);
        ?>
        <div class="row justify-content-center">
            <div class="col-md-9 mb-4">
                <p class="mb-5">
                    <input type="hidden" value="<?php echo $data['id_prestasi']; ?>">
                    <img style="width: 900px" src="images/<?php echo $data['foto_prestasi']; ?>" alt="Gagal Load Gambar" class="img-fluid">
                </p>
                <h3 class="post-heading"><?php echo $data['nama_prestasi']; ?> </h3>
                <p style="text-align: justify;">&emsp;&emsp;<?php echo $data['ket_prestasi']; ?></p>
            </div>

            <div class="col-md-3 mb-4">
                <?php
                $pilih = mysqli_query($koneksi, "SELECT * FROM `tbl_prestasi`");
                while ($data1 = mysqli_fetch_array($pilih)) {
                    ?>
                    <div>
                        <input type="hidden" value="<?php echo $data1['id_prestasi']; ?>">
                        <a href="?page=prestasi_detail&id=<?php echo $data1['id_prestasi']; ?>">
                            <img style=" width: 300px" src="images/<?php echo $data1['foto_prestasi']; ?>" alt="Gagal Load Gambar" class="img-fluid">
                        </a>
                        <a href="?page=prestasi_detail&id=<?php echo $data['id_prestasi']; ?>">
                            <h6 class="post-heading justify"><?php echo $data1['nama_prestasi']; ?></h6>
                        </a>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</div>