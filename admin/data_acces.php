<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">data User Yang Mengakses Halaman</h3>
                <div class="table-data__tool">
                </div>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2 table-stripped" id="table_id">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>IP</td>
                                <td>Browser</td>
                                <td>OS</td>
                                <td>Date</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("../koneksi.php");
                            $no = 1;
                            require '../config.php';
                            $sql = "SELECT * FROM statistik ORDER BY date_create DESC";
                            $query = $db->query($sql);
                            ?>
                            <?php
                            while ($row = $query->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td class="desc"><?php echo $row['ip']; ?></td>
                                <td><span class="status--process"><?php echo $row['browser']; ?></span></td>
                                <td><span class="status--denied"> <?php echo $row['os']; ?> </span></td>
                                <td><span class="block-email"><?php echo $row['date_create']; ?></span></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php include("grafik_pengunjung.php"); ?>
        </div>
    </div>
</section>
<!-- END DATA TABLE-->