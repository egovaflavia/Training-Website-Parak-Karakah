<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35"> <a href="cetak/cetak_keramaian.php" target="_blank" class="fa fa-print"> Print</a></h3>
                <div align="center">
                    <div align="center"><br>
                        <h3><img width="100px" height="100px" align="left" src="../images/logo_minang2.png">PARAK KARAKAH <img align="right" width="100px" height="100px" src="../images/logo_minang2.png"><br>
                            Kelurahan Berlandasakan Madani </h3>
                        <p>Jln. Parak Karakah. 22 C, Lubuk Begalung, Kota Padang - Sumatera Barat</p>
                    </div>
                    <hr>
                </div>
                <h3 class="col-md-12" align="center"><u>Laporan Data Layanan Izin Keramaian</u></h3>
                <br>
                <br>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2 table-stripped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kegiatan</th>
                                <th>Waktu</th>
                                <th>Tempat</th>
                                <th>Identitas</th>
                                <th>No Hp</th>
                                <th>Jumlah Peserta</th>
                                <th>Scan KTP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM `tbl_keramaian` WHERE 1");
                            $no = 1;
                            while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <tr class="tr-shadow">
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['nama_keg']; ?></td>
                                    <td><?php echo $data['waktu']; ?></td>
                                    <td><?php echo $data['tempat']; ?></td>
                                    <td><?php echo $data['identitas']; ?></td>
                                    <td><?php echo $data['nohp']; ?></td>
                                    <td><?php echo $data['jumlah']; ?></td>
                                    <td><img width="400px" height="200" src="../images/<?php echo $data['foto_keg'] ?>" alt="Gagal load gambar"></td>
                                    <td><a href="cetak/cetak_keramaian1.php?id=<?php echo $data['id_keg']; ?>" target="_blank" class="fa fa-print"></a>
                                    </td>
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