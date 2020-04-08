<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Data Kategori</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label class=" form-control-label">Nama Kategori</label>
                                <input type="text" name="nama_kategori" class="form-control">
                            </div>
                            <button type="submit" name="simpan" class="btn btn-primary btn-sm">
                                <i class="fa fa-check"></i> Simpan
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include("./koneksi.php");
if (isset($_POST['simpan'])) {
    $query = mysqli_query($koneksi, "INSERT INTO `tbl_kt_berita`(`nama_kategori`) VALUES ('$_POST[nama_kategori]')");
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
