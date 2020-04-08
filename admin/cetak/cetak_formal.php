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
                <h3 class="col-md-12" align="center"><u>Laporan Sarana Formal</u></h3>
                <br>
                <br>
                <span>
                    <table class="ttb lb">
                        <thead>
                            <tr>
                                <th class="ttb">No</th>
                                <th class="ttb">Nama Sarana</th>
                                <th class="ttb">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("../koneksi.php");
                            $query = mysqli_query($koneksi, "SELECT * FROM `tbl_formal` WHERE 1");
                            $no = 1;
                            $total = 0;
                            while ($data = mysqli_fetch_array($query)) {
                                $total = $total + $data['jumlah'];
                                ?>
                                <tr class="tr-shadow">
                                    <td class="ttb kt"><?php echo $no++ ?></td>
                                    <td class="ttb"><?php echo $data['nama_formal']; ?></td>
                                    <td class="ttb kt"><?php echo $data['jumlah']; ?></td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td class="ttb kt" colspan="2">Total</td>
                                <td class="kt"><?php echo $total ?></td>
                            </tr>
                        </tbody>
                    </table>
                </span>
            </div>
        </div>
    </div>
</section>
<!-- END DATA TABLE-->