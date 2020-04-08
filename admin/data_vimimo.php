<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">data Visi Misi Moto</h3>
                <p class="desc">Data Visi Misi Moto hanya Dapat di Edit <br> Anda dapat mengganti Visi Misi Moto Jika Kepala Lurah Menginginkan Pergantian Visi Misi Moto</p>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2 table-stripped" id="table_id">
                        <thead>
                            <tr>
                                <th>Visi</th>
                                <th>Misi</th>
                                <th>Moto</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("koneksi.php");
                            $query = mysqli_query($koneksi, "SELECT * FROM `tbl_vimimo` WHERE 1");
                            $no = 1;
                            $data = mysqli_fetch_array($query)
                            ?>
                            <tr class="tr-shadow">
                                <td class="desc"><?php echo $data['visi']; ?></td>
                                <td class="desc"><?php echo $data['misi']; ?></td>
                                <td class="desc"><?php echo $data['moto']; ?></td>
                                <td>
                                    <div class="table-data-feature">
                                        <button name="edit" class=" item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <a class="zmdi zmdi-edit" href="backup_index.php?page=aksi/edit_vimimo&id=<?php echo $data['id_vimimo']; ?>"></a>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END DATA TABLE-->