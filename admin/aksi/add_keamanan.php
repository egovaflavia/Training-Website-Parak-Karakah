<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Data Keamanan | <strong>Masukan Dengan Benar</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label class=" form-control-label">Nama Saranan Keamanan</label>
                                <input type="text" name="nama_keamanan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Jumlah</label>
                                <input type="text" name="jumlah" class="form-control">
                            </div>
                            <button type="submit" name="simpan" class="btn btn-primary btn-sm">
                                <i class="fa fa-check"></i> Simpan
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Batal
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
    $query = mysqli_query($koneksi, "INSERT INTO `tbl_keamanan`(`nama_keamanan`, `jumlah`) VALUES ('$_POST[nama_keamanan]','$_POST[jumlah]')");
    if ($query) {
        echo "<script>
    alert('Data Tersimpan');
    window.location='backup_index.php?page=data_keamanan';
    </script>";
    } else {
        echo "<script>
    alert('Data Gagal Tersimpan');
    window.location='backup_index.php?page=data_keamanan';
    </script>";
    }
}
