<section class="statistic-chart">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">statistics pengunjung</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <!-- CHART-->
                <div class="statistic-chart-1">
                    <h3 class="title-3 m-b-30"></h3>
                    <div class="chart-wrap">
                        <canvas id="widgetChart5"></canvas>
                    </div>
                    <?php
                    include("../koneksi.php");
                    $query = mysqli_query($koneksi, "SELECT * FROM statistik");
                    $hasil = mysqli_num_rows($query);
                    ?>
                    <div class="statistic-chart-1-note">
                        <span class="big"> <?php echo $hasil ?> </span>
                        <span>/ 16220 items sold</span>
                    </div>
                </div>
                <!-- END CHART-->
            </div>
        </div>
    </div>
</section>