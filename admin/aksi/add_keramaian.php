<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Masukan Data Keramaian</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class=" form-control-label">Nama Kegiatan</label>
                                <input name="nama_keg" type="text" class="form-control">
                            </div>
                            <div class=" form-group">
                                <label class=" form-control-label">Waktu</label>
                                <input name="waktu" type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Tempat</label>
                                <input name="tempat" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Nam Penanggung Jawab</label>
                                <input name="identitas" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">No Hp</label>
                                <input name="nohp" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Jumlah Peserta</label>
                                <input name="jumlah" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Scan KTP</label>
                                <input name="foto_keg" type="file" class="col-md-6 form-control">
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
    $nama_foto = $_FILES['foto_keg']['name'];
    $lokasi_foto = $_FILES['foto_keg']['tmp_name'];
    $tipe_foto = $_FILES['foto_keg']['type'];

    if ($lokasi_foto == "") {
        $query = "INSERT INTO `tbl_keramaian`(`nama_keg`, `waktu`, `tempat`, `identitas`, `nohp`, `jumlah`) VALUES ('$_POST[nama_keg]','$_POST[waktu]','$_POST[tempat]','$_POST[identitas]','$_POST[nohp]','$_POST[jumlah]')";
        $proses = mysqli_query($koneksi, $query);
    } else {
        move_uploaded_file($lokasi_foto, ".../images/$nama_foto");
        $query = "INSERT INTO `tbl_keramaian`(`nama_keg`, `waktu`, `tempat`, `identitas`, `nohp`, `jumlah`, `foto_keg`) VALUES ('$_POST[nama_keg]','$_POST[waktu]','$_POST[tempat]','$_POST[identitas]','$_POST[nohp]','$_POST[jumlah]', '$nama_foto')";
        $proses = mysqli_query($koneksi, $query);
    }
    if ($proses) {
        echo "<script>
    alert('Data Terkirim');
    window.location='backup_index.php?page=data_keramaian';
    </script>";
    } else {
        echo "<script>
    alert('Data Gagal Terkirim');
    window.location='backup_index.php?page=data_keramaian';
    </script>";
    }
}
