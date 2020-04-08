<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong> Data Kategori </strong>
                    </div>
                    <div class="card-body card-block">
                        <?php
                        include("./koneksi.php");
                        $id = $_GET['id'];
                        $query = mysqli_query($koneksi, "SELECT * FROM `tbl_kt_berita` WHERE id_kategori=$id ");
                        ?>
                        <form action="" method="POST">
                            <?php while ($data = mysqli_fetch_array($query)) { ?>
                                <div class="form-group">
                                    <label class=" form-control-label">Nama Kategori</label>
                                    <input type="hidden" name="id_kategori" value="<?php echo $data['id_kategori']; ?>">
                                    <input type="text" name="nama_kategori" value="<?php echo $data['nama_kategori']; ?>" class="form-control">
                                </div>
                                <button type="submit" name="edit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-check"></i> Simpan
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
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
    $query = mysqli_query($koneksi, "UPDATE `tbl_kt_berita` SET `nama_kategori`='$_POST[nama_kategori]' WHERE `id_kategori`='$_POST[id_kategori]'");
    if ($query) {
        echo "<script>
    alert('Data Tersimpan');
    window.location='backup_index.php?page=data_kategori';
    </script>";
    } else {
        echo "<script>
    alert('Data Gagal Tersimpan');
    window.location='backup_index.php?page=data_kategori';
    </script>";
    }
}
