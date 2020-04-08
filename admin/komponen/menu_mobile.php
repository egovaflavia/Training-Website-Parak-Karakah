<header class="header-mobile header-mobile-2 d-block d-lg-none">
    <div class="section__content section__content--p35">
        <div class="header3-wrap">
            <div class="header__logo">
                <a href="?page=home">
                    <img src="../images/logo_minang2.png" width="60px" alt="CoolAdmin" />
                </a>
            </div>
            <div class="header__navbar">
                <ul class="list-unstyled">
                    <li class="has-sub">
                        <a href="?page=home">
                            <i class="fas fa-tachometer-alt"></i>Home
                            <span class="bot-line"></span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="#">
                            <i class="fas fa-desktop"></i>Master
                            <span class="bot-line"></span>
                        </a>
                        <ul class="header3-sub-list list-unstyled">
                            <li>
                                <a href="?page=data_admin">Admin</a>
                            </li>
                            <li>
                                <a href="?page=data_berita">Berita</a>
                            </li>
                            <li>
                                <a href="?page=data_kategori">Kategori Berita</a>
                            </li>
                            <li>
                                <a href="?page=data_formal">Sarana Formal</a>
                            </li>
                            <li>
                                <a href="?page=data_nonformal">Sarana Non-Formal</a>
                            </li>
                            <li>
                                <a href="?page=data_keamanan">Keamanan</a>
                            </li>
                            <li>
                                <a href="?page=data_komentar">Layanan Pengaduan</a>
                            </li>
                            <li>
                                <a href="?page=data_keramaian">Layanan Izin Keramaian</a>
                            </li>
                            <li>
                                <a href="?page=data_organisasi">Organisasi</a>
                            </li>
                            <li>
                                <a href="?page=data_prestasi">Prestasi</a>
                            </li>
                            <li>
                                <a href="?page=data_vimimo">Visi dan Misi</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-sub">
                        <a href="#">
                            <i class="fa fa-copy "></i>Laporan
                            <span class="bot-line"></span>
                        </a>
                        <ul class="header3-sub-list list-unstyled">
                            <li>
                                <a href="?page=laporan/laporan_admin">Data Laporan Admin</a>
                            </li>
                            <li>
                                <a href="?page=laporan/laporan_berita">Data Laporan Berita</a>
                            </li>
                            <li>
                                <a href="?page=laporan/laporan_formal">Data Laporan Sarana Formal</a>
                            </li>
                            <li>
                                <a href="?page=laporan/laporan_nonformal">Data Laporan Sarana Non</a>
                            </li>
                            <li>
                                <a href="?page=laporan/laporan_komentar">Data Laporan Layanan Pengaduan</a>
                            </li>
                            <li>
                                <a href="?page=laporan/laporan_keramaian">Data Laporan Layanan Izin Keramaian</a>
                            </li>
                            <li>
                                <a href="?page=laporan/laporan_organisasi">Data Laporan Struktur Organisasi</a>
                            </li>
                            <li>
                                <a href="?page=laporan/laporan_prestasi">Data Laporan Prestasi</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="content">
                            <a class="js-acc-btn"><?php echo $_SESSION['nama_admin']; ?></a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info ">
                                <div class="">
                                    <h5 class="name">Nama Admin : <?php echo $_SESSION['nama_admin']; ?></h5>
                                    <span class="email"> Username : <?php echo $_SESSION['username']; ?></span>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="index.php?page=logout">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>