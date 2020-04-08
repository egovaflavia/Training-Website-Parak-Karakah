<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">data Layanan Pengaduan</h3>
                <div class="table-data__tool">
                    <div class="table-data__tool-right">
                        <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="?page=aksi/add_komentar">Tambah Data</a>
                    </div>
                </div>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2 table-stripped" id="table_id">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No Hp</th>
                                <th>Foto</th>
                                <th>Komentar</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM `tbl_komentar` WHERE 1");
                            $no = 1;
                            while ($data = mysqli_fetch_array($query)) {
                                $isi = substr($data['komentar'], 0, 60);
                                ?>
                            <tr class="tr-shadow">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['nama_komentar']; ?></td>
                                <td><?php echo $data['email']; ?></td>
                                <td><?php echo $data['nohp']; ?></td>
                                <td><img width="400px" height="200" src="../images/<?php echo $data['foto_komentar'] ?>" alt="Gagal load gambar"></td>
                                <td><?php echo $isi ?></td>
                                <td>
                                    <div class=" table-data-feature">
                                        <button name="edit" class=" item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <a class="zmdi zmdi-edit" href="backup_index.php?page=aksi/edit_komentar&id=<?php echo $data['id_komentar']; ?>"></a>
                                        </button>
                                        <button name="hapus" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <a class="zmdi zmdi-delete" href="aksi/hapus_komentar.php?id=<?php echo $data['id_komentar']; ?>"></a>
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