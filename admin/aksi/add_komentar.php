<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Masukan Data Komentar</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class=" form-control-label">Nama</label>
                                <input name="nama_komentar" type="text" class="form-control">
                            </div>
                            <div class=" form-group">
                                <label class=" form-control-label">Email</label>
                                <input name="email" type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">No Hp</label>
                                <input name="nohp" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Foto</label>
                                <input name="foto_komentar" type="file" class="col-md-6 form-control">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Komentar</label>
                                <textarea name="komentar" class="form-control" cols="30" rows="7"></textarea>
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
include("../koneksi.php");
if (isset($_POST['simpan'])) {
    $nama_foto = $_FILES['foto_komentar']['name'];
    $lokasi_foto = $_FILES['foto_komentar']['tmp_name'];
    $tipe_foto = $_FILES['foto_komentar']['type'];

    if ($lokasi_foto == "") {
        $query = "INSERT INTO `tbl_komentar`(`nama_komentar`, `email`, `nohp`, `komentar`) VALUES ('$_POST[nama_komentar]','$_POST[email]', '$_POST[nohp]','$_POST[komentar]')";
        $proses = mysqli_query($koneksi, $query);
    } else {
        move_uploaded_file($lokasi_foto, ".../images/$nama_foto");
        $query = "INSERT INTO `tbl_komentar`(`nama_komentar`, `email`, `nohp`, `foto_komentar`, `komentar`) VALUES ('$_POST[nama_komentar]','$_POST[email]','$_POST[nohp]', '$nama_foto', '$_POST[komentar]')";
        $proses = mysqli_query($koneksi, $query);
    }
    if ($proses) {
        echo "<script>
    alert('Data Terkirim');
    window.location='backup_index.php?page=data_komentar';
    </script>";
    } else {
        echo "<script>
    alert('Data Gagal Terkirim');
    window.location='backup_index.php?page=data_komentar';
    </script>";
    }
}
