<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">data kaba minang</h3>
                <div class="table-data__tool">
                    <div class="table-data__tool-right">
                        <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="?page=aksi/add_berita">Tambah Data</a>
                    </div>
                </div>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2 table-stripped" id="table_id">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Penulis</th>
                                <th>Kategori</th>
                                <th>Judul Berita</th>
                                <th>Tanggal</th>
                                <th>Foto</th>
                                <th>Isi Berita</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM tbl_berita a LEFT JOIN tbl_admin b ON a.id_admin=b.id_admin LEFT JOIN tbl_kt_berita c ON a.id_kategori=c.id_kategori ");
                            $no = 1;
                            while ($data = mysqli_fetch_array($query)) {
                                $isi = substr($data['isi_berita'], 0, 60);
                                ?>
                            <tr class="tr-shadow">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['nama_admin']; ?></td>
                                <td><?php echo $data['nama_kategori']; ?></td>
                                <td><?php echo $data['judul_berita']; ?></td>
                                <td><?php echo $data['tgl_berita']; ?></td>
                                <td><img src="../images/<?php echo $data['foto_berita'] ?>" alt="Gagal load gambar"></td>
                                <td><?php echo $isi ?></td>
                                <td>
                                    <div class=" table-data-feature">
                                        <button name="edit" class=" item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <a class="zmdi zmdi-edit" href="backup_index.php?page=aksi/edit_berita&id=<?php echo $data['id_berita']; ?>"></a>
                                        </button>
                                        <button name="hapus" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <a class="zmdi zmdi-delete" href="aksi/hapus_berita.php?id=<?php echo $data['id_berita']; ?>"></a>
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