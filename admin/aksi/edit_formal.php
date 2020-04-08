<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Masukan Dengan Benar</strong> Data Anda
                    </div>
                    <div class="card-body card-block">
                        <?php
                        include("./koneksi.php");
                        $id = $_GET['id'];
                        $query = mysqli_query($koneksi, "SELECT * FROM `tbl_formal` WHERE id_formal=$id ");
                        ?>
                        <form action="" method="POST">
                            <?php while ($data = mysqli_fetch_array($query)) { ?>
                                <div class="form-group">
                                    <label class=" form-control-label">Nama Sarana</label>
                                    <input type="hidden" name="id_formal" value="<?php echo $data['id_formal']; ?>">
                                    <input type="text" name="nama_formal" readonly value="<?php echo $data['nama_formal']; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Jumalah</label>
                                    <input type="text" name="jumlah" value="<?php echo $data['jumlah']; ?>" class="form-control">
                                </div>
                                <button type="submit" name="edit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-check"></i> Simpan
                                </button>
                                <a href="backup_index.php?page=data_formal" class=""><button type="reset" class="btn btn-danger btn-sm ">
                                        Batal
                                    </button></a>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include("./koneksi.php");
if (isset($_POST['edit'])) {
    $query = mysqli_query($koneksi, "UPDATE `tbl_formal` SET `nama_formal`='$_POST[nama_formal]',`jumlah`='$_POST[jumlah]' WHERE `id_formal`='$_POST[id_formal]'");
    if ($query) {
        echo "<script>
    alert('Data Tersimpan');
    window.location='backup_index.php?page=data_formal';
    </script>";
    } else {
        echo "<script>
    alert('Data Gagal Tersimpan');
    window.location='backup_index.php?page=data_formal';
    </script>";
    }
}
