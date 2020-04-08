<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <?php $pilih = mysqli_query($koneksi, "SELECT * FROM tbl_berita a LEFT JOIN tbl_kt_berita b ON a.id_kategori=b.id_kategori LEFT JOIN tbl_admin c ON a.id_admin=c.id_admin ORDER BY a.id_berita DESC LIMIT 3");
                    while ($data = mysqli_fetch_array($pilih)) {
                        ?>
                        <div class="col-lg-6">
                            <div class="post-entry-big">
                                <a href="?page=berita_detail&id=<?php echo $data['id_berita']; ?>" class="img-link"><img style="width:500px; height: 300px;" src="images/<?php echo $data['foto_berita']; ?>" alt="Image" class="img-fluid"></a>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <a href="?page=berita_detail&id=<?php echo $data['id_berita']; ?>"><?php echo $data['tgl_berita']; ?></a>
                                        <span class="mx-1">/</span>
                                        <a href="?page=berita_detail&id=<?php echo $data['id_berita']; ?>"><?php echo $data['nama_kategori']; ?></a> by<a href="?page=berita_detail&id=<?php echo $data['id_berita']; ?>"> <?php echo $data['nama_admin']; ?></a>
                                    </div>
                                    <h5 class="post-heading"><a href="?page=berita_detail&id=<?php echo $data['id_berita']; ?>"><?php echo $data['judul_berita']; ?></a></h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>