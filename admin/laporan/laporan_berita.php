<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35"> <a href="cetak/cetak_berita.php" class="fa fa-print"> Print</a></h3>
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
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2 table-stripped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Penulis</th>
                                <th>Kategori</th>
                                <th>Judul Berita</th>
                                <th>Tanggal</th>
                                <th>Foto</th>
                                <th>Isi Berita</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM tbl_berita a LEFT JOIN tbl_admin b ON a.id_admin=b.id_admin LEFT JOIN tbl_kt_berita c ON a.id_kategori=c.id_kategori ");
                            $no = 1;
                            while ($data = mysqli_fetch_array($query)) {
                                $isi = substr($data['isi_berita'], 0, 60);
                                ?>
                                <tr class="tr-shadow">
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['nama_admin']; ?></td>
                                    <td><?php echo $data['nama_kategori']; ?></td>
                                    <td><?php echo $data['judul_berita']; ?></td>
                                    <td><?php echo $data['tgl_berita']; ?></td>
                                    <td><img src="../images/<?php echo $data['foto_berita'] ?>" alt="Gagal load gambar"></td>
                                    <td><?php echo $isi ?></td>
                                    <td><a href="cetak/cetak_berita1.php?id=<?php echo $data['id_berita']; ?>" class="fa fa-print"></a></td>
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