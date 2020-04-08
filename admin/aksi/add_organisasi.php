<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Masukan Data Struktur Organisasi</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class=" form-control-label">Nama</label>
                                <input name="nama_org" type="text" class="form-control">
                            </div>
                            <div class=" form-group">
                                <label class=" form-control-label">Jabatan</label>
                                <input name="jabatan_org" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Ket</label>
                                <textarea name="ket_org" class="form-control" cols="30" rows="7"></textarea>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Foto</label>
                                <input name="foto_org" type="file" class="col-md-6 form-control">
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
    $nama_foto = $_FILES['foto_org']['name'];
    $lokasi_foto = $_FILES['foto_org']['tmp_name'];
    $tipe_foto = $_FILES['foto_org']['type'];

    if ($lokasi_foto == "") {
        $query = "INSERT INTO `tbl_organisasi`(`nama_org`, `jabatan_org`, `ket_org`) VALUES ('$_POST[nama_org]','$_POST[jabatan_org]','$_POST[ket_org]')";
        $proses = mysqli_query($koneksi, $query);
    } else {
        move_uploaded_file($lokasi_foto, "../images/$nama_foto");
        $query = "INSERT INTO `tbl_organisasi`(`nama_org`, `jabatan_org`, `ket_org`, `foto_org`) VALUES ('$_POST[nama_org]','$_POST[jabatan_org]','$_POST[ket_org]','$nama_foto')";
        $proses = mysqli_query($koneksi, $query);
    }
    if ($proses) {
        echo "<script>
    alert('Data Disimpan');
    window.location='backup_index.php?page=data_organisasi';
    </script>";
    } else {
        echo "<script>
    alert('Data Gagal Disimpan');
    window.location='backup_index.php?page=data_organisasi';
    </script>";
    }
}
