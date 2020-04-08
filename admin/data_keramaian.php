<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">data Keramaian</h3>
                <div class="table-data__tool">
                    <div class="table-data__tool-right">
                        <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="?page=aksi/add_keramaian">Tambah Data</a>
                    </div>
                </div>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2 table-stripped" id="table_id">
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
                                <td>
                                    <div class=" table-data-feature">
                                        <button name="hapus" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <a class="zmdi zmdi-delete" href="aksi/hapus_keramaian.php?id=<?php echo $data['id_keg']; ?>"></a>
                                        </button>
                                    </div>
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