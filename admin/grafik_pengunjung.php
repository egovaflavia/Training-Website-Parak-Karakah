<head>
    <script src="../Chart.bundle.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <style>
        canvas {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }
    </style>
</head>

<body>
    <section class="statistic statistic2 col-md-12 col-lg-12">
        <div class="container">
            <h1 class="title-4">Grafik Data Tabel Pengunjung Situs Web</h1>
            <div style="width:75%; margin: auto;">
                <canvas id="canvas"></canvas>
            </div>
            <?php
            $bulan1 = mysqli_query($koneksi, "SELECT * FROM `statistik` WHERE MONTH(date_create) = '1'");
            $jan = mysqli_num_rows($bulan1);

            $bulan2 = mysqli_query($koneksi, "SELECT * FROM `statistik` WHERE MONTH(date_create) = '2'");
            $feb = mysqli_num_rows($bulan2);

            $bulan3 = mysqli_query($koneksi, "SELECT * FROM `statistik` WHERE MONTH(date_create) = '3'");
            $mar = mysqli_num_rows($bulan3);

            $bulan4 = mysqli_query($koneksi, "SELECT * FROM `statistik` WHERE MONTH(date_create) = '4'");
            $apr = mysqli_num_rows($bulan4);

            $bulan5 = mysqli_query($koneksi, "SELECT * FROM `statistik` WHERE MONTH(date_create) = '5'");
            $mei = mysqli_num_rows($bulan5);

            $bulan6 = mysqli_query($koneksi, "SELECT * FROM `statistik` WHERE MONTH(date_create) = '6'");
            $jun = mysqli_num_rows($bulan6);

            $bulan7 = mysqli_query($koneksi, "SELECT * FROM `statistik` WHERE MONTH(date_create) = '7'");
            $jul = mysqli_num_rows($bulan7);

            $bulan8 = mysqli_query($koneksi, "SELECT * FROM `statistik` WHERE MONTH(date_create) = '8'");
            $ags = mysqli_num_rows($bulan8);

            $bulan9 = mysqli_query($koneksi, "SELECT * FROM `statistik` WHERE MONTH(date_create) = '9'");
            $sep = mysqli_num_rows($bulan9);

            $bulan10 = mysqli_query($koneksi, "SELECT * FROM `statistik` WHERE MONTH(date_create) = '10'");
            $okt = mysqli_num_rows($bulan10);

            $bulan11 = mysqli_query($koneksi, "SELECT * FROM `statistik` WHERE MONTH(date_create) = '11'");
            $nov = mysqli_num_rows($bulan11);

            $bulan12 = mysqli_query($koneksi, "SELECT * FROM `statistik` WHERE MONTH(date_create) = '12'");
            $des = mysqli_num_rows($bulan12);

            ?>
            <script>
                var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                var randomScalingFactor = function() {
                    return Math.E();
                };
                var randomColorFactor = function() {
                    return Math.round(Math.random() * 255);
                };
                var randomColor = function(opacity) {
                    return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
                };

                var config = {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        datasets: [{
                            label: "Kunjungan Website",
                            data: [
                                <?php echo $jan; ?>,
                                <?php echo $feb; ?>,
                                <?php echo $mar; ?>,
                                <?php echo $apr; ?>,
                                <?php echo $mei; ?>,
                                <?php echo $jun; ?>,
                                <?php echo $jul; ?>,
                                <?php echo $ags; ?>,
                                <?php echo $sep; ?>,
                                <?php echo $okt; ?>,
                                <?php echo $nov; ?>,
                                <?php echo $des; ?>
                            ],
                            lineTension: 0,
                            fill: false,
                        }]
                    },
                    options: {
                        responsive: true,
                        legend: {
                            position: 'bottom',
                        },
                        hover: {
                            mode: 'label'
                        },
                        scales: {
                            xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                }
                            }]
                        },
                        title: {
                            display: true,
                            text: 'Chart - Legend'
                        }
                    }
                };

                $.each(config.data.datasets, function(i, dataset) {
                    var background = randomColor(0.5);
                    dataset.borderColor = background;
                    dataset.backgroundColor = background;
                    dataset.pointBorderColor = background;
                    dataset.pointBackgroundColor = background;
                    dataset.pointBorderWidth = 1;
                });

                window.onload = function() {
                    var ctx = document.getElementById("canvas").getContext("2d");
                    window.myLine = new Chart(ctx, config);
                };
            </script>
        </div>
    </section>
</body>

</html>