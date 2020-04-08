<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Masukan Data Prestasi</strong>
                    </div>
                    <div class="card-body card-block">
                        <?php
                        include("../koneksi.php");
                        $id = $_GET['id'];
                        $query = mysqli_query($koneksi, "SELECT * FROM `tbl_organisasi` WHERE id_org=$id");
                        $data = mysqli_fetch_array($query);
                        ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class=" form-control-label">Nama</label>
                                <input name="id_org" type="hidden" value="<?php echo $data['id_org'] ?>" class="form-control">
                                <input name="nama_org" type="text" value="<?php echo $data['nama_org'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Jabatan</label>
                                <input name="jabatan_org" type="text" value="<?php echo $data['jabatan_org'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Keterangan</label>
                                <textarea name="ket_org" class="form-control" cols="30" rows="7"><?php echo $data['ket_org'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Foto</label><br>
                                <img src="../images/<?php echo $data['foto_org'] ?>" alt="Gagal load gambar" width="600"><br><br>
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
    $nama_foto = $_FILES['foto_prestasi']['name'];
    $lokasi_foto = $_FILES['foto_prestasi']['tmp_name'];
    $tipe_foto = $_FILES['foto_prestasi']['type'];

    if ($lokasi_foto == "") {
        $query = "UPDATE `tbl_organisasi` SET `nama_org`='$_POST[nama_org]',`jabatan_org`='$_POST[jabatan_org]',`ket_org`='$_POST[ket_org]' WHERE `id_org`='$_POST[id_org]'";
        $proses = mysqli_query($koneksi, $query);
    } else {
        move_uploaded_file($lokasi_foto, "../images/$nama_foto");
        $query = "UPDATE `tbl_organisasi` SET `nama_org`='$_POST[nama_org]',`jabatan_org`='$_POST[jabatan_org]',`ket_org`='$_POST[ket_org]',`foto_org`='$nama_foto' WHERE `id_org`='$_POST[id_org]'";
        $proses = mysqli_query($koneksi, $query);
    }
    if ($proses) {
        echo "<script>
    alert('Data Terkirim');
    window.location='backup_index.php?page=data_organisasi';
    </script>";
    } else {
        echo "<script>
    alert('Data Gagal Terkirim');
    window.location='backup_index.php?page=data_organisasi';
    </script>";
    }
}
