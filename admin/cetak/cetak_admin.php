<?php include("../komponen/head.php"); ?>
<script>
    window.print();
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
                <h3 class="col-md-12" align="center"><u>Laporan Data Admin</u></h3>
                <br>
                <br>
                <span>
                    <table class="ttb lb">
                        <thead>
                            <tr>
                                <th class="ttb">No</th>
                                <th class="ttb">Nama Admin</th>
                                <th class="ttb">Username</th>
                                <th class="ttb">Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("../koneksi.php");
                            $query = mysqli_query($koneksi, "SELECT * FROM `tbl_admin` WHERE 1");
                            $no = 1;
                            while ($data = mysqli_fetch_array($query)) {
                                ?>
                            <tr>
                                <td class="ttb kt"><?php echo $no++ ?></td>
                                <td class="ttb"><?php echo $data['nama_admin']; ?></td>
                                <td class="ttb"><?php echo $data['username']; ?></td>
                                <td class="ttb">
                                    <span><?php echo $data['password']; ?></span>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </span>
            </div>
        </div>
    </div>
</section>
<!-- END DATA TABLE-->