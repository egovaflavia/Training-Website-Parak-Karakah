<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong> Data Visi Misi Moto </strong>
                    </div>
                    <div class="card-body card-block">
                        <?php
                        include("./koneksi.php");
                        $id = $_GET['id'];
                        $query = mysqli_query($koneksi, "SELECT * FROM `tbl_vimimo` WHERE id_vimimo=$id ");
                        ?>
                        <form action="" method="POST">
                            <?php while ($data = mysqli_fetch_array($query)) { ?>
                                <div class="form-group">
                                    <label class=" form-control-label">Visi</label>
                                    <input type="hidden" name="id_vimimo" value="<?php echo $data['id_vimimo']; ?>">
                                    <textarea name="visi" class="form-control" cols="10" rows="5"><?php echo $data['visi']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Misi</label>
                                    <textarea name="misi" class="form-control" cols="10" rows="5"><?php echo $data['misi']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Moto</label>
                                    <textarea name="moto" class="form-control" cols="10" rows="5"><?php echo $data['moto']; ?></textarea>
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
    $query = mysqli_query($koneksi, "UPDATE `tbl_vimimo` SET `visi`='$_POST[visi]',`misi`='$_POST[misi]' ,`moto`='$_POST[moto]' WHERE `id_vimimo`='$_POST[id_vimimo]'");
    if ($query) {
        echo "<script>
    alert('Data Tersimpan');
    window.location='backup_index.php?page=data_vimimo';
    </script>";
    } else {
        echo "<script>
    alert('Data Gagal Tersimpan');
    window.location='backup_index.php?page=data_vimimo';
    </script>";
    }
}
