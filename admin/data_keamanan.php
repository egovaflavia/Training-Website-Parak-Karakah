<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">data Sarana Keamanan</h3>
                <div class="table-data__tool">
                    <div class="table-data__tool-right">
                        <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="?page=aksi/add_keamanan">Tambah Data</a>
                    </div>
                </div>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2 table-stripped " id="table_id">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Sarana Keamanan</th>
                                <th>Jumalah</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("koneksi.php");
                            $query = mysqli_query($koneksi, "SELECT * FROM `tbl_keamanan` WHERE 1");
                            $no = 1;
                            while ($data = mysqli_fetch_array($query)) {
                                ?>
                            <tr class="tr-shadow">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['nama_keamanan']; ?></td>
                                <td class="desc"><?php echo $data['jumlah']; ?></td>
                                <td>
                                    <div class=" table-data-feature">
                                        <button name="edit" class=" item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <a class="zmdi zmdi-edit" href="backup_index.php?page=aksi/edit_keamanan&id=<?php echo $data['id_keamanan']; ?>"></a>
                                        </button>
                                        <button name="hapus" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <a class="zmdi zmdi-delete" href="aksi/hapus_keamanan.php?id=<?php echo $data['id_keamanan']; ?>"></a>
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