<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35"> <a href="cetak/cetak_admin.php" class="fa fa-print"> Print</a></h3>
                <div align="center">
                    <h3><img width="100px" height="100px" align="left" src="../images/logo_minang2.png">PARAK KARAKAH <img align="right" width="100px" height="100px" src="../images/logo_minang2.png"><br>
                        <div align="center"><br>
                            Kelurahan Berlandasakan Madani
                    </h3>
                    <p>Jln. Parak Karakah. 22 C, Lubuk Begalung, Kota Padang - Sumatera Barat</p>
                </div>
                <hr>
            </div>
            <h3 class="col-md-12" align="center"><u>Laporan Data Admin</u></h3>
            <br>
            <br>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2 table-stripped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Admin</th>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("koneksi.php");
                        $query = mysqli_query($koneksi, "SELECT * FROM `tbl_admin` WHERE 1");
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                            ?>
                            <tr class="tr-shadow">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['nama_admin']; ?></td>
                                <td class="desc"><?php echo $data['username']; ?></td>
                                <td>
                                    <span class="block-email"><?php echo $data['password']; ?></span>
                                </td>
                                <td><a href="cetak/cetak_admin1.php?id=<?php echo $data['id_admin']; ?>" class="fa fa-print"></a>
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