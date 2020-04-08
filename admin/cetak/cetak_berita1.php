<?php include("../komponen/head.php"); ?>
<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div align="center">
                    <div align="center"><br>
                        <h3><img width="100px" height="100px" align="left" src="../images/logo_minang2.png">PARAK KARAKAH <img align="right" width="100px" height="100px" src="../images/logo_minang2.png"><br>
                            Kelurahan Berlandasakan Madani </h3>
                        <p>Jln. Parak Karakah. 22 C, Lubuk Begalung, Kota Padang - Sumatera Barat</p>
                    </div>
                    <hr>
                </div>
                <h3 class="col-md-12" align="center"><u>Laporan Data Berita</u></h3>
                <br>
                <br>
                <div class="">
                    <table class="ttb lb">
                        <thead>
                            <tr>
                                <th class="ttb">No</th>
                                <th class="ttb">Nama Penulis</th>
                                <th class="ttb">Kategori</th>
                                <th class="ttb">Judul Berita</th>
                                <th class="ttb">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("../koneksi.php");
                            $id = $_GET['id'];
                            $query = mysqli_query($koneksi, "SELECT * FROM tbl_berita a LEFT JOIN tbl_admin b ON a.id_admin=b.id_admin LEFT JOIN tbl_kt_berita c ON a.id_kategori=c.id_kategori WHERE a.id_berita=$id ");
                            $no = 1;
                            while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <tr class="tr-shadow">
                                    <td class="ttb kt"><?php echo $no++ ?></td>
                                    <td class="ttb"><?php echo $data['nama_admin']; ?></td>
                                    <td class="ttb"><?php echo $data['nama_kategori']; ?></td>
                                    <td class="ttb"><?php echo $data['judul_berita']; ?></td>
                                    <td class="ttb"><?php echo $data['tgl_berita']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END DATA TABLE-->