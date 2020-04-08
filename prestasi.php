<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <?php
                    $pilih = mysqli_query($koneksi, "SELECT * FROM `tbl_prestasi` WHERE 1");
                    while ($data = mysqli_fetch_array($pilih)) {
                        ?>
                        <div class="col-lg-6">
                            <div class="post-entry-big">
                                <a href="?page=prestasi_detail&id=<?php echo $data['id_prestasi']; ?>" class="img-link"><img style="width:500px; height: 300px;" src="images/<?php echo $data['foto_prestasi']; ?>" alt="Image" class="img-fluid"></a>
                                <div class="post-content">
                                    <h5 class="post-heading">
                                        <a href="?page=prestasi_detail&id=<?php echo $data['id_prestasi']; ?>"><?php echo $data['nama_prestasi']; ?>
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>