<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Data Admin | <strong>Masukan Dengan Benar</strong> Data Anda
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label class=" form-control-label">Nama Admin</label>
                                <input type="text" name="nama_admin" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Password</label>
                                <input type="password" name="password" class="form-control">
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
    $query = mysqli_query($koneksi, "INSERT INTO `tbl_admin`(`nama_admin`, `username`, `password`) VALUES ('$_POST[nama_admin]','$_POST[username]','$_POST[password]')");
    if ($query) {
        echo "<script>
    alert('Data Tersimpan');
    window.location='backup_index.php?page=data_admin';
    </script>";
    } else {
        echo "<script>
    alert('Data Gagal Tersimpan');
    window.location='backup_index.php?page=data_admin';
    </script>";
    }
}
