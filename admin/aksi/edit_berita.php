<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Masukan Data Kaba Minang</strong>
                    </div>
                    <div class="card-body card-block">
                        <?php
                        include("../koneksi.php");
                        $id = $_GET['id'];
                        $query = mysqli_query($koneksi, "SELECT * FROM tbl_berita WHERE id_berita=$id ");
                        ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <?php while ($data = mysqli_fetch_array($query)) { ?>
                                <div class="form-group">
                                    <label class=" form-control-label">Nama Penulis</label>
                                    <input type="hidden" name="id_berita" value="<?php echo $data['id_berita']; ?>">
                                    <select name="id_admin" class="form-control">
                                        <?php include("../koneksi.php");
                                        $query = mysqli_query($koneksi, "SELECT * FROM tbl_admin");
                                        while ($data1 = mysqli_fetch_array($query)) { ?>
                                            <option value="<?= $data1['id_admin'] ?>"><?= $data1['nama_admin']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class=" form-group">
                                    <label class=" form-control-label">Kategori</label>
                                    <select name="id_kategori" class="form-control">
                                        <?php include("../koneksi.php");
                                        $query = mysqli_query($koneksi, "SELECT * FROM tbl_kt_berita");
                                        while ($data2 = mysqli_fetch_array($query)) { ?>
                                            <option value="<?= $data2['id_kategori'] ?>"><?= $data2['nama_kategori'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Judul Berita</label>
                                    <input name="judul_berita" type="text" class="form-control" value="<?php echo $data['judul_berita']; ?>">
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Tanggal Berita</label>
                                    <input name="tgl_berita" type="date" class="form-control" value="<?php echo $data['tgl_berita']; ?>">
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Foto</label>
                                    <img src="../images/<?php echo $data['foto_berita']; ?>" alt="Gagal load gambar">
                                    <input name="foto_berita" type="file" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Isi Berita</label>
                                    <textarea name="isi_berita" class="form-control" cols="30" rows="7"><?php echo $data['isi_berita']; ?></textarea>
                                </div>
                                <button type="submit" name="simpan" class="btn btn-primary btn-sm">
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
include("../koneksi.php");
if (isset($_POST['simpan'])) {
    $nama_foto = $_FILES['foto_berita']['name'];
    $lokasi_foto = $_FILES['foto_berita']['tmp_name'];
    $tipe_foto = $_FILES['foto_berita']['type'];

    if ($lokasi_foto == "") {
        $query = "UPDATE `tbl_berita` SET `id_admin`='$_POST[id_admin]',`id_kategori`='$_POST[id_kategori]',`judul_berita`='$_POST[judul_berita]',`tgl_berita`='$_POST[tgl_berita]',`isi_berita`='$_POST[isi_berita]' WHERE `id_berita`='$_POST[id_berita]'";
        $proses = mysqli_query($koneksi, $query);
    } else {
        move_uploaded_file($lokasi_foto, "../images/$nama_foto");
        $query = "UPDATE `tbl_berita` SET `id_admin`='$_POST[id_admin]',`id_kategori`='$_POST[id_kategori]',`judul_berita`='$_POST[judul_berita]',`tgl_berita`='$_POST[tgl_berita]',`foto_berita`='$nama_foto',`isi_berita`='$_POST[isi_berita]' WHERE `id_berita`='$_POST[id_berita]'";
        $proses = mysqli_query($koneksi, $query);
    }
    if ($query) {
        echo "<script>
        alert('Data Tersimpan');
        window.location='backup_index.php?page=data_berita';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Tersimpan');
        window.location='backup_index.php?page=data_berita';
        </script>";
    }
}
