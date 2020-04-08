<section class="statistic statistic2 col-md-12 col-lg-12">
    <div class="container">
        <h1 class="title-4">Grafik Data Tabel</h1>
        <!-- CHART-->
        <div style="width:75%; margin:auto">
            <canvas id="myChart"></canvas>
        </div>
        <script type="text/javascript" src="chartjs/Chart.js"></script>
        <?php
        $query_admin = mysqli_query($koneksi, "SELECT * FROM tbl_admin");
        $hasil_admin = mysqli_num_rows($query_admin);
        ?>
        <?php
        $query_formal = mysqli_query($koneksi, "SELECT * FROM tbl_formal");
        $hasil_formal = mysqli_num_rows($query_formal);
        ?>
        <?php
        $query_nonformal = mysqli_query($koneksi, "SELECT * FROM tbl_nonformal");
        $hasil_nonformal = mysqli_num_rows($query_nonformal);
        ?>
        <?php
        $query_keamanan = mysqli_query($koneksi, "SELECT * FROM tbl_keamanan");
        $hasil_keamanan = mysqli_num_rows($query_keamanan);
        ?>
        <?php
        $query_berita = mysqli_query($koneksi, "SELECT * FROM tbl_berita");
        $hasil_berita = mysqli_num_rows($query_berita);
        ?>
        <?php
        $query_prestasi = mysqli_query($koneksi, "SELECT * FROM tbl_prestasi");
        $hasil_prestasi = mysqli_num_rows($query_prestasi);
        ?>
        <?php
        $query_organisasi = mysqli_query($koneksi, "SELECT * FROM tbl_organisasi");
        $hasil_organisasi = mysqli_num_rows($query_organisasi);
        ?>
        <script>
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Admin",
                        "Sarana Formal",
                        "Sarana Non-Formal",
                        "Sarana Keamanan",
                        "Prestasi",
                        "Berita",
                        "Organisasi"
                    ],
                    datasets: [{
                        label: '',
                        data: [
                            <?php echo $hasil_admin; ?>,
                            <?php echo $hasil_formal; ?>,
                            <?php echo $hasil_nonformal; ?>,
                            <?php echo $hasil_keamanan; ?>,
                            <?php echo $hasil_berita; ?>,
                            <?php echo $hasil_prestasi; ?>,
                            <?php echo $hasil_organisasi; ?>
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 206, 86, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(54, 162, 235, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
        <!-- END CHART-->
    </div>
</section>