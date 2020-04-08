<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Masukan Data Prestasi</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class=" form-control-label">Nama Prestasi</label>
                                <input name="nama_prestasi" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Keterangan</label>
                                <textarea name="ket_prestasi" class="form-control" cols="30" rows="7"></textarea>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Foto</label>
                                <input name="foto_prestasi" type="file" class="col-md-6 form-control">
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
    $nama_foto = $_FILES['foto_prestasi']['name'];
    $lokasi_foto = $_FILES['foto_prestasi']['tmp_name'];
    $tipe_foto = $_FILES['foto_prestasi']['type'];

    if ($lokasi_foto == "") {
        $query = "INSERT INTO `tbl_prestasi`(`nama_prestasi`, `ket_prestasi`) VALUES ('$_POST[nama_prestasi]','$_POST[ket_prestasi]')";
        $proses = mysqli_query($koneksi, $query);
    } else {
        move_uploaded_file($lokasi_foto, ".../images/$nama_foto");
        $query = "INSERT INTO `tbl_prestasi`(`nama_prestasi`, `ket_prestasi`,`foto_prestasi`) VALUES ('$_POST[nama_prestasi]','$_POST[ket_prestasi]','$nama_foto')";
        $proses = mysqli_query($koneksi, $query);
    }
    if ($proses) {
        echo "<script>
    alert('Data Terkirim');
    window.location='backup_index.php?page=data_prestasi';
    </script>";
    } else {
        echo "<script>
    alert('Data Gagal Terkirim');
    window.location='backup_index.php?page=data_prestasi';
    </script>";
    }
}
