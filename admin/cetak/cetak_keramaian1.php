<?php include("../komponen/head.php"); ?>
<script>
    //window.print();
</script>
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
                <h3 class="col-md-12" align="center"><u>Laporan Data Layanan Izin Keramaian</u></h3>
                <br>
                <br>
                <span>
                    <table class="ttb lb">
                        <thead>
                            <tr>
                                <th class="ttb">No</th>
                                <th class="ttb">Nama Kegiatan</th>
                                <th class="ttb">Waktu</th>
                                <th class="ttb">Tempat</th>
                                <th class="ttb">Identitas</th>
                                <th class="ttb">No Hp</th>
                                <th class="ttb">Jumlah Peserta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("../koneksi.php");
                            $id = $_GET['id'];
                            $query = mysqli_query($koneksi, "SELECT * FROM `tbl_keramaian` WHERE id_keg=$id");
                            $no = 1;
                            $data = mysqli_fetch_array($query)
                            ?>
                            <tr class="tr-shadow">
                                <input type="hidden" name="id_admin" value="<?php echo $data['id_keg']; ?>">
                                <td class="ttb kt"><?php echo $no++ ?></td>
                                <td class="ttb"><?php echo $data['nama_keg']; ?></td>
                                <td class="ttb kt"><?php echo $data['waktu']; ?></td>
                                <td class="ttb"><?php echo $data['tempat']; ?></td>
                                <td class="ttb"><?php echo $data['identitas']; ?></td>
                                <td class="ttb kt"><?php echo $data['nohp']; ?></td>
                                <td class="ttb kt"><?php echo $data['jumlah']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </span>
            </div>
        </div>
    </div>
</section>
<!-- END DATA TABLE-->