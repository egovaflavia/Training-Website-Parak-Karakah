<section class="statistic statistic2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <?php
                $query_admin = mysqli_query($koneksi, "SELECT * FROM tbl_admin");
                $hasil_admin = mysqli_num_rows($query_admin);
                ?>
                <div class="statistic__item statistic__item--green">
                    <h2 class=""><?php echo $hasil_admin; ?></h2>
                    <span class="desc">Admin</span>
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <?php
                $query_formal = mysqli_query($koneksi, "SELECT * FROM tbl_formal");
                $hasil_formal = mysqli_num_rows($query_formal);
                ?>
                <div class="statistic__item statistic__item--orange">
                    <h2 class="number"><?php echo $hasil_formal; ?></h2>
                    <span class="desc">Sarana Formal</span>
                    <div class="icon">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <?php
                $query_nonformal = mysqli_query($koneksi, "SELECT * FROM tbl_nonformal");
                $hasil_nonformal = mysqli_num_rows($query_nonformal);
                ?>
                <div class="statistic__item statistic__item--blue">
                    <h2 class="number"><?php echo $hasil_nonformal; ?></h2>
                    <span class="desc">Sarana Non-Formal</span>
                    <div class="icon">
                        <i class="zmdi zmdi-calendar-note"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <?php
                $query_keamanan = mysqli_query($koneksi, "SELECT * FROM tbl_keamanan");
                $hasil_keamanan = mysqli_num_rows($query_keamanan);
                ?>
                <div class="statistic__item statistic__item--red">
                    <h2 class="number"><?php echo $hasil_keamanan; ?></h2>
                    <span class="desc">Sarana Keamanan</span>
                    <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <?php
                $query_kt_berita = mysqli_query($koneksi, "SELECT * FROM tbl_kt_berita");
                $hasil_kt_berita = mysqli_num_rows($query_kt_berita);
                ?>
                <div class="statistic__item statistic__item--green">
                    <h2 class="number"><?php echo $hasil_kt_berita; ?></h2>
                    <span class="desc">Kategori Berita</span>
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <?php
                $query_berita = mysqli_query($koneksi, "SELECT * FROM tbl_berita");
                $hasil_berita = mysqli_num_rows($query_berita);
                ?>
                <div class="statistic__item statistic__item--orange">
                    <h2 class="number"><?php echo $hasil_berita; ?></h2>
                    <span class="desc">Berita</span>
                    <div class="icon">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <?php
                $query_prestasi = mysqli_query($koneksi, "SELECT * FROM tbl_prestasi");
                $hasil_prestasi = mysqli_num_rows($query_prestasi);
                ?>
                <div class="statistic__item statistic__item--blue">
                    <h2 class="number"><?php echo $hasil_prestasi; ?></h2>
                    <span class="desc">Prestasi</span>
                    <div class="icon">
                        <i class="zmdi zmdi-calendar-note"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <?php
                $query_organisasi = mysqli_query($koneksi, "SELECT * FROM tbl_organisasi");
                $hasil_organisasi = mysqli_num_rows($query_organisasi);
                ?>
                <div class="statistic__item statistic__item--red">
                    <h2 class="number"><?php echo $hasil_organisasi; ?></h2>
                    <span class="desc">Organisasi</span>
                    <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>