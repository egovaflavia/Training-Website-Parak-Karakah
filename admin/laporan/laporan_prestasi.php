<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35"> <a href="cetak/cetak_prestasi.php" class="fa fa-print"> Print</a></h3>
                <div align="center">
                    <div align="center"><br>
                        <h3><img width="100px" height="100px" align="left" src="../images/logo_minang2.png">PARAK KARAKAH <img align="right" width="100px" height="100px" src="../images/logo_minang2.png"><br>
                            Kelurahan Berlandasakan Madani </h3>
                        <p>Jln. Parak Karakah. 22 C, Lubuk Begalung, Kota Padang - Sumatera Barat</p>
                    </div>
                    <hr>
                </div>
                <h3 class="col-md-12" align="center"><u>Laporan Data Struktur Prestasi</u></h3>
                <br>
                <br>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2 table-stripped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Prestasi</th>
                                <th>Keterangan</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM `tbl_prestasi` WHERE 1");
                            $no = 1;
                            while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <tr class="tr-shadow">
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['nama_prestasi']; ?></td>
                                    <td><?php echo $data['ket_prestasi']; ?></td>
                                    <td><img width="600px" height="300" src="../images/<?php echo $data['foto_prestasi'] ?>" alt="Gagal load gambar"></td>
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